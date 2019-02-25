<nav class="pcoded-navbar" pcoded-header-position="relative">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <div class="user-details">
                    <span>{{auth()->user()->name}} [{{auth()->user()->group()->name}}]</span>
                </div>
            </div>
        </div>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Zarządzanie</div>
        <ul class="pcoded-item pcoded-left-item">
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_server'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-server"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Serwery</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.servers')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.default">Lista serwerów</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Aktualizacja serwerów</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.crm">Błędy serwerów</span>
                            <span class="pcoded-badge label label-danger ">2</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Statystyki</span>
                            <span class="pcoded-badge label label-info ">NEW</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_user'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Użytkownicy</span>
                    <span class="pcoded-badge label label-warning">5</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('admin.users')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Lista użytkowników</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
                @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_group'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-group"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Grupy</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" pcoded-hasmenu">
                        <a href="{{route('admin.groups')}}">
                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                            <span class="pcoded-mtext">Lista grup</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                            <span class="pcoded-mtext">Permisje</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{route('admin.permissions')}}">
                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                    <span class="pcoded-mtext">Lista permisji</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>
                    @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_file'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-film"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Pliki</span>
                   @if(\App\Movie::where('status',\App\Statusfile::statuses('wait_for_admin'))->count()) <span class="pcoded-badge label label-info">{{\App\Movie::where('status',\App\Statusfile::statuses('wait_for_admin'))->count()}} </span> @endif
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.files')}}">
                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                            <span class="pcoded-mtext">Lista plików</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                            <span class="pcoded-mtext">Zgłoszenia</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu active">
                            <li class="">
                                <a href="#">
                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                    <span class="pcoded-mtext">Lista zgłoszeń</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>
                @endif
        </ul>
    </div>
</nav>
<script>

    $("a").each(function (){if(this.href==window.location.href){$(this).parent().addClass("active"),$(this).parent().parent().parent().addClass("active"),$(this).parent().parent().parent().parent().parent().addClass("active")}});


</script>