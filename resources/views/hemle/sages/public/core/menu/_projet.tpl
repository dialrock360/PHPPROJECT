
<li class="{if $active==5} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-bar-chart-o"></i>
        <span class="menu-text">
							 Gestion Projets
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Programmes
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Gespro/programme/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Programme
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Gespro/programmeliste/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Programmes
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>

                Projets
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Gespro/projet/{$smarty.session.user.id_service}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau Projet
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                        <a href="{$url_base}Gespro/projectliste/{$smarty.session.user.id_service}">

                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste Projets
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>


    </ul>
</li>
