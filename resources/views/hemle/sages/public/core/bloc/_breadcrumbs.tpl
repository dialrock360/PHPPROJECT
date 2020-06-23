
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">{$view}</a>
        </li>
        <li class="active">{$curenview}</li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">

            {if $active==8}
                {include file='src/view/stockage/submenu.tpl'}
            {/if}
            {if $active==7}
                {include file='src/view/grh/submenu.tpl'}
            {/if}
            {if $active==5}
                {include file='src/view/gestio_projet/submenu.tpl'}
            {/if}
            {if $active==3}
                {include file='src/view/production/submenu.tpl'}
            {/if}

            {if $active==6}
                {include file='src/view/logistique/submenu.tpl'}
            {/if}

								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
        </form>
    </div><!-- /.nav-search -->
</div>
