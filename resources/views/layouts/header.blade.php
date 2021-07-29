<header>
    <div class="header-wrapper">
        <div class="menu-btn">
            <div class="menu-btn__logo">
                <h2>Fadaka</h2>
            </div>
            <span class="menu-btn__burger"></span>
        </div>
        <div class="menu-btn">
            <ul class="menu-nav">
                <li class="menu-nav__items">
                    <a href="{{ route('pages.contact') }}"  class="menu-nav__link"> <span style="color:green;"><i class="fa fa-address-book"></i></span>&nbspContact Us</a>
                </li>
                <li class="menu-nav__items">
                   <a href="{{ route('pages.faq') }}" class="menu-nav__link"><span style="color:green;"><i class="fa fa-bell-concierge"></i></span>&nbspFaq</a>
                </li>
                <li class="menu-nav__items">
                    <a href="{{ route('pages.about') }}" class="menu-nav__link"><span style="color: green;"><i class="fa fa-address-card"></i></span>&nbspAbout</a>
                </li>
            </ul>

            <div class="menu-nav">
                 <ul class="menu-nav__services">
                        <li>
                           <a href="">
                            <div class="menu-nav__services__box">
                                <div class="menu-nav__services__wrapper">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="menu-nav__services__wrapper">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="menu-nav__services__wrapper">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>    
                           </a>
                        </li>
                        <li> 
                            @if(session()->has('LoggedUser'))
                            <a class="logout" href="{{ route('auth.logout') }}">
                                logout
                            </a>
                            @endif
                        </li>
                 </ul>
            </div>
        </div>
    </div><!--end of header wrappers-->    
</header>