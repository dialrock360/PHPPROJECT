
<li class="{if $active==8} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa fa-inbox"></i>
        <span class="menu-text">
							Stockage
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Articles et Services
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Stokage/Article/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Stokage/listeArticle/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>





        <li class="">
            <a href="{$url_base}Stokage/Categorie/{$smarty.session.user.id_service}" >

                Categories
                <i class="menu-icon glyphicon glyphicon-th-list"></i>

            </a>

        </li>

        <li class="">
            <a href="{$url_base}Stokage/Conditionement" >

                Conditionements
                <i class="menu-icon glyphicon glyphicon-inbox"></i>

            </a>

        </li>

        <li class="">
            <a href="{$url_base}Stokage/Famille/{$smarty.session.user.id_service}" >

                Famille
                <i class="menu-icon glyphicon glyphicon-th-large"></i>

            </a>

        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Fiches d'inventaire
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="top-menu.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Fiche
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="two-menu-1.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Des Fiches
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="{$url_base}Stock/index/{$smarty.session.user.id_service}" >

                Stock
                <i class="menu-icon fa fa-database"></i>

            </a>

        </li>


    </ul>
</li>
