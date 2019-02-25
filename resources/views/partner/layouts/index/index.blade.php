<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Strona główna</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="page-body">

                    <div class="row">
                        <div class="col-md-12 col-xl-6">

                            <div class="card table-card">
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-6 card-block-big br">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-eye-alt text-success"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{\App\View::wherein('movie',\Illuminate\Support\Facades\Auth::user()->hasMany('App\Movie',  'author','id')->select('id')->pluck('id'))->count()}}</h5>
                                                    <span>Wyświetleń</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="fa fa-dollar text-danger"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>0</h5>
                                                    <span>Zarobione pieniądze</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">

                            <div class="card table-card">
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-6 card-block-big br">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-files text-info"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{\Illuminate\Support\Facades\Auth::user()->movies()->count()}}</h5>
                                                    <span>Dodanych plików</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="fa fa-dollar text-warning"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{\Illuminate\Support\Facades\Auth::user()->balance}}zł</h5>
                                                    <span>Stan konta</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ostatnie 3 miesiące wyświetleń</h5>
                            <span>Poniżej znajdują się ostatnie <code>3 miesiące</code> historie na temat wyświeleń reklam w twoim serwisie.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Wyświetlenia</th>
                                        <th>Zarobek</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @for($x=0;$x<=2;$x++)




                                          <tr>

                                              <td>{{\Illuminate\Support\Carbon::now()->subMonth($x)->startOfMonth()->format('j.m.Y')}}</td>
                                              <td>{{\App\View::wherein('movie',\Illuminate\Support\Facades\Auth::user()->hasMany('App\Movie',  'author','id')->select('id')->pluck('id'))->whereRaw('MONTH(created_at) = ?',[\Illuminate\Support\Carbon::now()->subMonth($x)->format('m')])->whereRaw('YEAR(created_at) =?',[\Illuminate\Support\Carbon::now()->subMonth($x)->format('Y')])->count()}}</td>
                                              <td>120 PLN</td>
                                          </tr>
                                       @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ostatnie 5 wykonanych akcji na koncie</h5>
                            <span>Poniżej znajdują się ostatnie <code>5 akcji</code> wykonanych na koncie.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nazwa</th>
                                        <th>Status</th>
                                        <th>Data i czas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Wypłata gotówki na paypal</td>
                                        <td><label class="label label-success" style="background-color: green;">Wypłacono</label></td>
                                        <td>22.12.2018 || 22:24</td>
                                    </tr>
                                    <tr>
                                        <td>Dodanie serwisu</td>
                                        <td><label class="label label-warning">Wystąpił problem</label></td>
                                        <td>22.12.2018 || 22:24</td>
                                    </tr>
                                    <tr>
                                        <td>Zgłoszenie reklamy</td>
                                        <td><label class="label label-danger">Nie wykonano</label></td>
                                        <td>22.12.2018 || 22:24</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>