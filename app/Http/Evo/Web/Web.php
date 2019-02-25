<?php
/**
 * Created by PhpStorm.
 * User: raz4r
 * Date: 20.11.18
 * Time: 14:45
 */

namespace App\Http\Evo\Web;


class Web
{

    private $site, $site_content;

    public function __construct($site, $referer)
    {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $site);
        curl_setopt($curl, CURLOPT_REFERER, $referer);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64; rv:33.0) Gecko/20100101 Firefox/33.0');
        curl_setopt($curl, CURLOPT_TIMEOUT, 300);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $this->site_content = curl_exec($curl);
        curl_close($curl);
        $this->site = $site;
    }


    public function getElementsByClass($element, $class)
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($this->site_content);
        $xpath = new \DOMXpath($dom);
        $result = $xpath->query('//' . $element . '[@class="' . $class . '"]');
        if ($result->length > 0) {
            return $result;
        }
    }

    public function getElementsByTag($tag)
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($this->site_content);
        $xpath = new \DOMXpath($dom);
        $result = $xpath->query('//' . $tag );
        if ($result->length > 0) {
            return $result;
        }
    }

    public function elementFilter($element, $content, $tag = null, $attribute = null)
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($content);
        $xpath = new \DOMXpath($dom);
        if ($tag && $attribute) {
            $result = $xpath->query('//' . $element . '[@' . $tag . '="' . $attribute . '"]');
        } else {
            $result = $xpath->query($element);
        }

        if ($result->length > 0) {

            return $result;
        }
    }

    public static function filterReplace($string, $array)
    {

        foreach ($array as $item) {
            $string = str_replace(array_keys($array, $item), $item, $string);
        }

        return $string;
    }

    public static function filter($string, $rulez = [])
    {

        $string = trim(preg_replace('/\s\s+/', '', $string));
        $string = str_replace(' ','_',$string);
        $string = filter_var($string,FILTER_SANITIZE_STRING);
        $string = str_replace("&nbsp;", "", $string);
        $string = str_replace('_',' ',$string);
        $string = trim($string);
        if (emptyArray($rulez)) {
            $string = self::filterReplace($string, $rulez);
        }
        return $string;
    }

    public function getElementsByID($element, $id)
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($this->site_content);
        $xpath = new \DOMXpath($dom);
        $result = $xpath->query('//' . $element . '[@id="' . $id . '"]');
        if ($result->length > 0) {
            return $result;
        }
    }


    public function getSiteContent()
    {
        return $this->site_content;
    }

}