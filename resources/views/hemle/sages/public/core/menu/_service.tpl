

<li class=" {if $active==10} active {/if}   hover">
    <a href="?file=page/publication">
        <i class="menu-icon fa  fa-desktop"></i>
        <span class="menu-text"> Services </span>
    </a>

    <b class="arrow"></b>
    <ul class="submenu">

        <li class="">

            <a href="{$url_base}Corbeille/index">

                Corbeille
                <i class="menu-icon fa fa-caret-right"></i>
            </a>
        </li>
        <li class="">

            <a href="{$url_base}Departement/index/{$smarty.session.user.id_service}">
                Departements
                <i class="menu-icon fa fa-caret-right"></i>
            </a>
        </li>


        <li class="{if $active==10} active {/if}  hover">
            <a href="{$url_base}Users/index">
                <i class="menu-icon fa  fa-user"></i>
                <span class="menu-text"> Utilisateurs </span>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">

                    <a href="{$url_base}Users/add">
                        Ajouter
                        <i class="menu-icon fa fa-caret-right"></i>
                    </a>
                </li>

                <li class="">

                    <a href="{$url_base}Users/liste">

                        Liste
                        <i class="menu-icon fa fa-caret-right"></i>
                    </a>
                </li>




                <li class="">

                    <a href="{$url_base}Role/index">

                        Roles
                        <i class="menu-icon fa fa-caret-right"></i>
                    </a>
                </li>

            </ul>
        </li>


    </ul>

</li>