

<li class="{if $active==7} active {/if} ">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-users"></i>
        <span class="menu-text">
								RH
							</span>

        <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
        <li class="">


            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                Employees
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Rh/formrh/employee">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvel employee
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Rh/listrh/employee">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste employees
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">


            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                Prestataires
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Rh/formrh/prestataire">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau prestataire
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Rh/listrh/prestataire">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste prestataires
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">


            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                Stagiaire
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{$url_base}Rh/formrh/stagiaire">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau stagiaire
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{$url_base}Rh/listrh/stagiaire">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste stagiaires
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
        <li class="">

            <a href="{$url_base}Rh/paie/{$smarty.session.user.id_service}">
                Paie
                <i class="menu-icon fa fa-magic"></i>
            </a>
        </li>

        <li class="">

            <a href="{$url_base}Rh/formation/{$smarty.session.user.id_service}">
                Formations
                <i class="menu-icon fa fa-language"></i>
            </a>
        </li>



        <li class="">
            <a href="{$url_base}Rh/recrutement/{$smarty.session.user.id_service}">
                Recrutements
                <i class="menu-icon fa fa-lastfm"></i>

            </a>

            <b class="arrow"></b>
        </li>




    </ul>
</li>