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
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner'))
            <li>
                <a href="{{route('partner.index')}}">
                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                    <span class="pcoded-mtext">Strona główna</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner_view_site'))
            <li>
                <a href="{{route('partner.site')}}">
                    <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Serwis</span>
                    <span class="pcoded-badge label label-warning">3</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
                @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner_view_wallet'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-credit-card"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Portfel</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                   <li class=" ">
                        <a href="{{route('partner.wallet')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Stan portfela</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('partner.wallet.settings')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Ustawienia portfela</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
                    @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner_view_add'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-film"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Reklama</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                   <li class=" ">
                        <a href="{{route('partner.ads')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Moje reklamy</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('partner.ads.settings')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Dodaj reklamę</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>

			<li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-comments"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Zgłoszenia</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                   <li class=" ">
                        <a href="{{route('partner.ticket')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Moje zgłoszenia</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
                @endif
        </ul>
    </div>
</nav>
<script>
    eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("a").5(6(){8(1.4==9.7.4){$(1).0().3("2"),$(1).0().0().0().3("2"),$(1).0().0().0().0().0().3("2")}});',11,11,'parent|this|active|addClass|href|each|function|location|if|window|'.split('|'),0,{}))
</script>