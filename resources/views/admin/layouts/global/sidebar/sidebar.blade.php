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
            <li>
                <a href="{{route('admin.index')}}">
                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                    <span class="pcoded-mtext">Strona główna</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
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
                </ul>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_user'))
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Użytkownicy</span>
@if(App\View::whereRaw('DAY(created_at) = ?',[date('d')])->count())  <span class="pcoded-badge label label-warning"> {{App\View::whereRaw('DAY(created_at) = ?',[date('d')])->count()}} @endif</span>
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
</ul>
</li>
                @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_settings'))
                <li>
                    <a href="{{route('admin.settings')}}">
                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Ustawienia</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin_view_partner'))
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Partnerzy</div>

<li class="pcoded-hasmenu">
  <a href="javascript:void(0)">
      <span class="pcoded-micon"><i class="fa fa-group"></i></span>
      <span class="pcoded-mtext" data-i18n="nav.dash.main">Partnerzy</span>
      <span class="pcoded-mcaret"></span>
  </a>
  <ul class="pcoded-submenu">
      <li class="">
          <a href="{{route('admin.partners')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Lista partnerów</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
  </ul>
</li>
<li>
  <a href="javascript:void(0)">
      <span class="pcoded-micon"><i class="fa fa-file"></i></span>
      <span class="pcoded-mtext" data-i18n="nav.dash.main">Serwisy</span>
  </a>
</li>
<li class="pcoded-hasmenu">
  <a href="javascript:void(0)">
      <span class="pcoded-micon"><i class="fa fa-credit-card-alt"></i></span>
      <span class="pcoded-mtext" data-i18n="nav.dash.main">Płatności</span>
      <span class="pcoded-mcaret"></span>
  </a>
  <ul class="pcoded-submenu">
      <li class="">
          <a href="{{route('admin.payments.cash_in')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Wpłaty</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
      <li class="">
          <a href="{{route('admin.payments.cash_out')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Wypłaty</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
      <li class="">
          <a href="{{route('admin.servers')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Ustawienia</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
  </ul>
</li>
<li class="pcoded-hasmenu">
  <a href="javascript:void(0)">
      <span class="pcoded-micon"><i class="fa fa-video-camera"></i></span>
      <span class="pcoded-mtext" data-i18n="nav.dash.main">Reklama</span>
      <span class="pcoded-mcaret"></span>
  </a>
  <ul class="pcoded-submenu">
      <li class="">
          <a href="{{route('admin.ads.ads')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Lista reklam</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
      <li class="">
          <a href="{{route('admin.servers')}}">
              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
              <span class="pcoded-mtext" data-i18n="nav.dash.default">Ustawienia</span>
              <span class="pcoded-mcaret"></span>
          </a>
      </li>
  </ul>
</li>
                    @endif
@endif
</ul>
</div>
</nav>
<script>
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("a").5(6(){8(1.4==9.7.4){$(1).0().3("2"),$(1).0().0().0().3("2"),$(1).0().0().0().0().0().3("2")}});',11,11,'parent|this|active|addClass|href|each|function|location|if|window|'.split('|'),0,{}))
</script>