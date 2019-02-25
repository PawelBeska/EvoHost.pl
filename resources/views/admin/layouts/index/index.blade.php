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
                                                    <h5>{{$views_count}}</h5>
                                                    <span>Wyświetleń</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="fa fa-users text-danger"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{$users_count}}</h5>
                                                    <span>Użytkowników</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-6 card-block-big br">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-files text-info"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{$files_count}}</h5>
                                                    <span>Plików</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-envelope-open text-warning"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>120</h5>
                                                    <span>Zgłoszeń</span>
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
                                                    <div id="barchart" style="height:40px;width:40px;" class="rickshaw_graph"><svg width="40" height="40"><rect x="0" y="7.670236411396245" width="6.333333333333332" height="32.329763588603754" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="13.333333333333332" y="0.3960396039603964" width="6.333333333333332" height="39.603960396039604" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="26.666666666666664" y="15.752677308547183" width="6.333333333333332" height="24.247322691452815" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="6.333333333333332" y="31.91755910284906" width="6.333333333333332" height="8.082440897150938" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="19.666666666666664" y="20.602141846837743" width="6.333333333333332" height="19.397858153162254" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="33" y="27.876338654273592" width="6.333333333333332" height="12.123661345726408" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect></svg></div>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{$free_space}}GB</h5>
                                                    <span>Wolnego miejsca</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row ">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-network text-primary"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{$servers_count}}</h5>
                                                    <span>Serwerów</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-6 card-block-big br">
                                            <div class="row ">
                                                <div class="col-sm-4">
                                                    <div id="barchart2" style="height:40px;width:40px;" class="rickshaw_graph"><svg width="40" height="40"><rect x="0" y="28.684582743988685" width="6.333333333333332" height="11.315417256011315" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="13.333333333333332" y="20.602141846837743" width="6.333333333333332" height="19.397858153162254" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="26.666666666666664" y="8.478480501111338" width="6.333333333333332" height="31.52151949888866" transform="matrix(1,0,0,1,0,0)" fill="#1abc9c"></rect><rect x="6.333333333333332" y="8.478480501111338" width="6.333333333333332" height="31.52151949888866" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="19.666666666666664" y="4.437260052535867" width="6.333333333333332" height="35.56273994746413" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect><rect x="33" y="0.3960396039603964" width="6.333333333333332" height="39.603960396039604" transform="matrix(1,0,0,1,0,0)" fill="#bdc3c7"></rect></svg></div>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>{{$used_space}}GB</h5>
                                                    <span>Miejsca zajętego</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 card-block-big">
                                            <div class="row ">
                                                <div class="col-sm-4">
                                                    <i class="icofont icofont-network-tower text-primary"></i>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <h5>100%</h5>
                                                    <span>Connections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card table-1-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <h5>5 najbardziej wyświetlanych filmów</h5>
                                    </div>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr class="text-capitalize">
                                                <th>Nazwa</th>
                                                <th>Autor</th>
                                                <th>Wyświetlenia</th>
                                                <th>Data utworzenia</th>
                                                <th>Data aktualizacji</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($most_viewed_movies as $most_viewed_movie)
                                            <tr>
                                                <td>@if(isset($most_viewed_movie['name'])) {{$most_viewed_movie['name']}} @endif</td>
                                                <td>{{\App\User::find($most_viewed_movie['author'])->name}}</td>
                                                <td>{{$most_viewed_movie->views()->count()}}</td>
                                                <td>{{$most_viewed_movie['created_at']}}</td>
                                                <td>{{$most_viewed_movie['updated_at']}}</td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card table-1-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <h5>5 najmniej wyświetlanych filmów</h5>
                                    </div>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr class="text-capitalize">
                                                <th>Nazwa</th>
                                                <th>Autor</th>
                                                <th>Wyświetlenia</th>
                                                <th>Data utworzenia</th>
                                                <th>Data aktualizacji</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($worst_viewed_movies as $worst_viewed_movie)
                                            <tr>
                                                <td>@if(isset($worst_viewed_movie['name'])) {{$worst_viewed_movie['name']}} @endif</td>
                                                <td>{{\App\User::find($worst_viewed_movie['author'])->name}}</td>
                                                <td>{{$worst_viewed_movie->views()->count()}}</td>
                                                <td>{{$worst_viewed_movie['created_at']}}</td>
                                                <td>{{$worst_viewed_movie['updated_at']}}</td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card table-1-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <h5>5 najnowszych użytkowników</h5>
                                    </div>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr class="text-capitalize">
                                                <th>Login</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($latest_registered_users as $latest_registered_user)
                                                <tr>
                                                    <td>{{$latest_registered_user['name']}}</td>
                                                    <td>{{$latest_registered_user['email']}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card table-1-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <h5>Status serwerów</h5>
                                    </div>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr class="text-capitalize">
                                                <th>Host</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($servers as $server)
                                            <tr>
                                                <td>{{$server->name}}</td>
                                                <td>
                                                    <label class="label label-{{$server->status()->color}}">{{$server->status()->name}}</label>
                                                </td>
                                            </tr>
                                            @endforeach
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
    </div>
</div>