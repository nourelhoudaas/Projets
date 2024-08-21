        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <!-- <i class='bx bxs-disc nav__icon' ></i> -->
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

                                {{-- <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="{{ route('app_liste_Op',['id_projet' => $projet->id_projet]) }}"class="nav__dropdown-item">Liste des opérations</a>
                                    </div>
                                    <div class="nav__dropdown-content">
                                        <a href="{{ route('app_add_Op') }}"class="nav__dropdown-item">Ajouter une
                                            opération</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
