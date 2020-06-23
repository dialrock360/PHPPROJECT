<li class="{if $active==9} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa fa-money"></i>
        <span class="menu-text">
							Vente CRM
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Clients
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Vente/Client/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Client
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Vente/listeClient/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Clients
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Location
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Location
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Location
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">

            <a href="{$url_base}Role/index">


                <i class="menu-icon fa fa-desktop"></i>
                Caisse Enregisteurse
                <i class="menu-icon fa fa-caret-right"></i>
            </a>
        </li>


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Livraison
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Livraison
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Livraison
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Prospects
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Prospect
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Prospects
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>



        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Reservation
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Reservation
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Reservation
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Configuration
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Facture Proforma
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Facture
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Ventes
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Vente
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Ventes
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>




    </ul>
</li>
