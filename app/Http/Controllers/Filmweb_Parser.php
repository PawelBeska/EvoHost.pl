<?php
namespace App\Http\Controllers;
use App\Http\Evo\Evo;
use App\Http\Evo\Web\Web;
use DebugBar\DataFormatter\VarDumper\SeekingData;

/**
 * @author          nSolutions.pl <biuro(at)nsolutions(dot)pl>
 * @copyright       (c) 2012 nSolutions.pl
 * @description     Filmweb.pl Parser
 * @version         0.1b
 */
class Filmweb_Parser
{
    const URL = 'https://www.filmweb.pl/';
    const VERSION = '0.1b';
    const COOKIES = '../cookies';
    
    // Przypisanie gatunków po ID
    public static $genres = array
    (
        2 => "animacja",
        3 => "biograficzny",
        4 => "dla dzieci",
        5 => "dokumentalny",
        6 => "dramat",
        7 => "erotyczny",
        8 => "familijny",
        9 => "fantasy",
        10 => "surrealistyczny",
        11 => "historyczny",
        12 => "horror",
        13 => "komedia",
        14 => "kostiumowy",
        15 => "kryminał",
        16 => "melodramat",
        17 => "musical",
        18 => "nowele filmowe",
        19 => "obyczajowy",
        20 => "przygodowy",
        22 => "sensacyjny",
        24 => "thriller",
        25 => "western",
        26 => "wojenny",
        27 => "film-noir",
        28 => "akcja",
        29 => "komedia obycz.",
        30 => "komedia rom.",
        32 => "romans",
        33 => "sci-fi",
        37 => "dramat obyczajowy",
        38 => "psychologiczny",
        39 => "satyra",
        40 => "katastroficzny",
        41 => "dla młodzieży",
        42 => "baśń",
        43 => "polityczny",
        44 => "muzyczny",
        45 => "etiuda",
        46 => "dreszczowiec",
        47 => "czarna komedia",
        50 => "krótkometrażowy",
        51 => "religijny",
        52 => "prawniczy",
        53 => "gangsterski",
        54 => "karate",
        55 => "biblijny",
        57 => "dokumentalizowany",
        58 => "komedia kryminalna",
        59 => "dramat historyczny",
        60 => "groteska filmowa",
        61 => "sportowy",
        62 => "poetycki",
        63 => "szpiegowski",
        64 => "edukacyjny",
        65 => "dramat sądowy",
        66 => "anime",
        67 => "niemy",
        68 => "płaszcza i szpady",
        69 => "dramat społeczny",
        70 => "fabularyzowany dok.",
        71 => "xxx",
        72 => "sztuki walki",
        73 => "przyrodniczy",
        74 => "komedia dokumentalna",
        75 => "fikcja literacka",
        76 => "propagandowy"
    );
    
    
    public static function regexps($site)
{

  $movie = [
        // Nazwa filmu
        'title' => $site->getElementsByClass('h1', 'inline filmTitle')->item(0)->getElementsByTagName('a')->item(0)->nodeValue,
        // Tytuł oryginalny
        'origTitle' => '',
        // Opis
        'description' => $site->getElementsByClass('p', 'text')->item(0)->nodeValue,
        // Rok produkcji
        'year' => filter_var($site->getElementsByClass('span', 'halfSize')->item(0)->nodeValue,FILTER_SANITIZE_NUMBER_INT),
        // Gatunek
        'genres' => '',
        'cover' => $site->getElementsByID('div', 'filmPosterLink')->item(0)->nodeValue,
        'genrs' => []
    ];
    if ($site->getElementsByClass('h2', 'cap s-16 top-5')) {
        $movie['origTitle'] = $site->getElementsByClass('h2', 'cap s-16 top-5')->item(0)->nodeValue;
    }

    foreach ($site->getElementsByClass('ul', 'inline sep-comma genresList')->item(0)->getElementsByTagName('a') as $genr) {
        array_push($movie['genrs'], $genr->nodeValue);
    }
    return $movie;
    }

    
   /**
    * Funkcja odpowiedzialna za pobranie informacji o filmie.
    * @param string $path 
    * @return array
    */
    public static function getMovie($path)
    {

        // Trzymamy ciasteczka (czasami wyskakują reklamy)
        Remote::$default_options += array
        (
            CURLOPT_COOKIEFILE => dirname(__FILE__) . DIRECTORY_SEPARATOR . Filmweb_Parser::COOKIES . DIRECTORY_SEPARATOR . 'filmweb',
            CURLOPT_COOKIEJAR => dirname(__FILE__) . DIRECTORY_SEPARATOR . Filmweb_Parser::COOKIES . DIRECTORY_SEPARATOR . 'filmweb',
        );
        
        // Wywowałmy filmweba.pl - dla usunięcia reklamy.
        Remote::get(Filmweb_Parser::URL);

        $request = Filmweb_Parser::URL;

        //pobieranie informacji o filmie
       // return Filmweb_Parser::regexps(Evo::web('https://www.filmweb.pl/film/'.$path));


        //ajax szukanie filmów
        $para = explode('\af',substr(Evo::web('https://www.filmweb.pl/search/live?q=asd')->getSiteContent(),1));
        for($x=0;$x<count($para);$x++)
        {
            $para[$x] =  explode('\c',$para[$x]);
            $para[$x][0]= 'https://www.filmweb.pl/film/'.urlencode($para[$x][5].'-'.$para[$x][6].'-'.$para[$x][1]);

        }
        return $para;
    }
}