
<header>
    <div class="top sticky">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="{{route('index')}}">
                            <img src="{{URL::asset('assets/home/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-sm-9">

                    <!--  NAVIGATION MENU AREA -->
                    <nav class="desktop-menu">
                        <ul data-breakpoint="800" id="menu-primary-menu" class="sf-menu">
                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
                                <a  title="Home" href="{{route('index')}}">Home <span class="caret"></span></a>
                            </li>
                            @guest
                                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                    <a  title="Logowanie" href="{{ route('login') }}">Logowanie</a>
                                </li>

                                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                    <a  title="Rejestracja" href="{{ route('register') }}">Rejestracja</a>
                                </li>
                            @else
                                <li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1205 ">
                                    <a  title="Więcej" href="#">Więcej <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Moje konto" href="{{route('my_account')}}">Moje konto</a>
                                        </li>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Moje filmy" href="{{route('my_movies')}}">Moje filmy</a>
                                        </li>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Upload zdalny" href="{{route('remote')}}">Upload zdalny</a>
                                        </li>
                                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin'))
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Panel administratora" href="{{ route('admin.index') }}">Panel administratora</a>
                                        </li>
                                            @endif
                                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner'))
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                                <a  title="Panel partnera" href="{{ route('partner.index') }}">Panel partnera</a>
                                            </li>
                                        @endif
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Wyloguj" href="{{ route('logout') }}">Wyloguj</a>
                                        </li>
                                    </ul>
                                </li>

                                @endguest
                       </ul>
                    </nav>
                    <!--  END OF NAVIGATION MENU AREA -->

                    <!--  MOBILE MENU AREA -->
                    <nav class="mobile-menu">
                        <ul data-breakpoint="800" id="menu-primary-menu-1">
                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1238">
                                <a  title="Home" href="{{route('index')}}">Home <span class="caret"></span></a>
                            </li>
                            @guest
                                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                    <a  title="Logowanie" href="{{ route('login') }}">Logowanie</a>
                                </li>

                                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                    <a  title="Rejestracja" href="{{ route('register') }}">Rejestracja</a>
                                </li>
                            @else
                                <li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1205 ">
                                    <a  title="Więcej" href="#">Więcej <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Moje konto" href="{{route('my_account')}}">Moje konto</a>
                                        </li>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Moje filmy" href="{{route('my_movies')}}">Moje filmy</a>
                                        </li>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Upload zdalny" href="{{route('remote')}}">Upload zdalny</a>
                                        </li>
                                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin'))
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                                <a  title="Panel administratora" href="{{ route('admin.index') }}">Panel administratora</a>
                                            </li>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('partner'))
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                                <a  title="Panel partnera" href="{{ route('partner.index') }}">Panel partnera</a>
                                            </li>
                                        @endif
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                            <a  title="Wyloguj" href="{{ route('logout') }}">Wyloguj</a>
                                        </li>
                                    </ul>
                                </li>

                            @endguest
                        </ul>

                    </nav>
                    <!--  END OF MOBILE MENU AREA -->


                </div>
            </div>
        </div>
    </div>
</header>
