
<li class="{if $active==6} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa-shopping-cart"></i>
        <span class="menu-text">
							Logistiques
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Achats
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Logistique/Achat/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Achat
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Logistique/listeAchat/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Achats
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Commandes
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Logistique/Commande/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelles Commande
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Logistique/listeCommande/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Commandes
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Demande de proforma
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Logistique/Demandepro/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelles Demande
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Logistique/listeDemandepro/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Demandes
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Fournissseurs
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Logistique/Fournisseur/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Fournisseur
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Logistique/listeFournisseur/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Fournissseurs
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>




        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Resources
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Logistique/Materielle/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Materielle
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Logistique/listeMaterielle/{$smarty.session.user.id_service}" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Materielles
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>


        <li class="">
            <a href="{$url_base}Logistique/Reception/{$smarty.session.user.id_service}" >
                <i class="menu-icon fa fa-caret-right"></i>
                Reception
            </a>

            <b class="arrow"></b>
        </li>

    </ul>
</li>

