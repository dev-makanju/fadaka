<header>
    <div class="header-wrapper">
        <div class="menu-btn">
                <div class="menu-btn__logo">
                    <h2>Fadaka</h2>
                </div>
                <div class="menu-btn__logo">
                    <div class="logo__wrapper">
                         <div class="menu-nav__services__wrapper"></div>
                    </div>
                </div>
        </div>
    
        <div class="menu-btn navbar">
            <div class="menu-btn__wrapps">         
            <ul class="menu-nav">
                <li class="menu-nav__items">
                    <a href="/"  class="menu-nav__link">Home</a>
                </li>
                <li class="menu-nav__items">
                    <a href="{{ route('pages.contact') }}"  class="menu-nav__link">Contact us</a>
                </li>
                <li class="menu-nav__items">
                   <a href="{{ route('pages.faq') }}" class="menu-nav__link">Faq</a>
                </li>
                <li class="menu-nav__items">
                    <a href="{{ route('pages.about') }}" class="menu-nav__link">About</a>
                </li>
            </ul>

            <div class="menu-nav">
                 <ul class="menu-nav__services">
                        @if(!session()->has('LoggedUser'))
                        <div class="link__landing__page">
                            <div  class="link__landing__page__wrapper">
                                <a class="header-link" href="{{ route('Auth.register') }}">Sign up</a>
                            </div>
                            <div class="link__landing__page__wrapper">
                                <a class="header-link" href="{{ route('Auth.login') }}">Sign in</a>
                            </div>
                        </div>                   
                        @else
                        <a class="logout" href="{{ route('auth.logout') }}">
                            logout
                        </a>
                        @endif
                 </ul>
            </div>

            </div>
        </div>
    </div><!--end of header wrappers-->    
</header>