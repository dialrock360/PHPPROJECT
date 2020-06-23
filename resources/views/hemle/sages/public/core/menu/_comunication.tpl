

<li class="{if $active==2} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa fa-bullhorn"></i>
        <span class="menu-text">
Communication
        </span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Rapports
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Programme/index/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Rapport
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Programme/programmeliste/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Rapports
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Annonces
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Projet/index/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Annonce
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Projet/projectliste/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Annonces
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Proforma
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Projet/index/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Demande Proforma
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Projet/projectliste/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Facture Proforma
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Rendez-vous
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Projet/index/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau  RDV
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Projet/projectliste/">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste RDV
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="two-menu-1.html">
                <i class="menu-icon fa fa-caret-right"></i>
                Site Internet
            </a>

            <b class="arrow"></b>
        </li>
    </ul>
</li>
