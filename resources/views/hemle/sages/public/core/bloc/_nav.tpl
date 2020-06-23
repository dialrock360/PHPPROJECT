
    <!-- navbar side -->
    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">

        {include file='public/core/menu/sidebar-shortcuts.tpl'}

        <!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">

            <li class=" {if $active==1} active {/if} hover">
                <a href="{$url_base}Welcome/index">
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text"> Accueil </span>
                </a>

                <b class="arrow"></b>

            </li>


            {include file='public/core/menu/_comunication.tpl'}
            {include file='public/core/menu/_production.tpl'}
            {include file='public/core/menu/_comtabilite.tpl'}
            {include file='public/core/menu/_projet.tpl'}
            {include file='public/core/menu/_logistique.tpl'}
            {include file='public/core/menu/_rh.tpl'}

            {include file='public/core/menu/_stock.tpl'}
            {include file='public/core/menu/_vente.tpl'}
            {include file='public/core/menu/_service.tpl'}


































        </ul>


        <!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <!-- end navbar side -->