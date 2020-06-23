<li class="{if $active==3} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa  fa-gavel"></i>
        <span class="menu-text">
							Gestion production
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Atelier
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Tache/atelierliste">

                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvel Atelier
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Tache/atelierliste" >
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Ateliers
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>



        <li class="">
            <a href="{$url_base}Programme/planification/{$smarty.session.user.id_service}">
                <i class="menu-icon fa fa-caret-right"></i>
                Planification
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Production
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Projet/production">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle Productions
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Projet/productionliste">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Production
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

    </ul>
</li>
