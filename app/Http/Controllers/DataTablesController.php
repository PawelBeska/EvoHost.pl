<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserViewMoviesRequest;

use App\Movie;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DataTablesController extends Controller
{
 public function movies(UserViewMoviesRequest $request)
 {
     return DataTables::of(Auth::user()->movies())->escapeColumns([])->editColumn('status', '<label class="label label-{{App\Movie::find($id)->status()->color}}">'.'{{App\Movie::find($id)->status()->name}}</label>')->editColumn('views','{{App\Movie::find($id)->views()->count()}}')->editColumn('url', '@if(App\Movie::find($id)->url())<a class="white" href="{{App\Movie::find($id)->url()}}" >Link</a> @else BRAK @endif')->make(true);
 }
}
