         <!--========== HEADER ==========-->
 <header class="header">
    <div class="header__container">
        <div class="top">
            <div class="profile">
                <div class="profile-photo">
                    <img src="{{ asset('assets/img/logo_ministere.svg')}}" alt="">

                </div>
            </div>
        </div>
        <h2>Ministère de la Communication</h2>

        {{-- <a href="#" class="header__logo">Ministère de la Communication</a> --}}



        {{-- <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>

        </div> --}}
        <div class="nav__dropdown">
            <a href="#" class="nav__link">
                <i class='bx bxs-directions nav__icon'></i>
                <span class="nav__name">Projets</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
            </a>

            <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                    <a href="{{ route('app_liste_P') }}"class="nav__dropdown-item">Liste de
                        projets</a>
                </div>
                <div class="nav__dropdown-content">
                    <a href="{{ route('app_add_P') }}"class="nav__dropdown-item">Ajouter un
                        projet</a>
                </div>
            </div>
        </div>
        <div class="right">
        <div class="top">
            <div class="profile">
                <div class="profile-photo">
                    <img src="{{ asset('assets/img/logo_ministere.svg')}}" alt="">
                </div>
            </div>
        </div>

    </div>
</div>

</header>

<!--========== NAV ==========-->
        {{-- <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i><img src="{{ asset('assets/img/logo_ministere.svg') }}" alt=""></i>
                        <span class="nav__logo-name"></span>
                    </a>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-directions nav__icon'></i>
                                    <span class="nav__name">Projets</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="{{ route('app_liste_P') }}"class="nav__dropdown-item">Liste de
                                            projets</a>
                                    </div>
                                    <div class="nav__dropdown-content">
                                        <a href="{{ route('app_add_P') }}"class="nav__dropdown-item">Ajouter un
                                            projet</a>
                                    </div>
                                </div>
                            </div>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxs-directions nav__icon'></i>
                                    <span class="nav__name">Operations</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div> --}}
