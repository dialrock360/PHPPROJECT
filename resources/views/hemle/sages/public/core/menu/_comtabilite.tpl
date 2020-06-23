
<li class="{if $active==4} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa fa-calculator"></i>
        <span class="menu-text">
							Finances / Compta
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Bilan
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Exercice
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des Exercices
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Comptes
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Compte
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Compte
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Document Financier
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Document
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Document
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Charges et Factures
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Article/addcharge/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle charge
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Article/listecharge/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Listes
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>



        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Tresorerie
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Caisse
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Flux de Tresorerie
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>




    </ul>
</li>