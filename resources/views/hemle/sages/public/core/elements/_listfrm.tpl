
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table id="stable" class="table  table-bordered table-hover">
            <caption>
                <div id="ok" > </div>
            </caption>




            {if $view=='Famille'}

                {if $vewContent=='formfamille'}
                    {include file='src/view/stockage/famille/liste.tpl'}
                {/if}

                {if $vewContent=='managefamille'}
                    {include file='src/view/stockage/famille/edit.tpl'}
                {/if}
            {/if}
            {if $view=='Categorie'}

                {if $vewContent=='formcategorie'}
                    {include file='src/view/stockage/categorie/liste.tpl'}
                {/if}

                {if $vewContent=='managecategorie'}
                    {include file='src/view/stockage/categorie/edit.tpl'}
                {/if}
            {/if}

            {if $view=='Conditionement'}
                {include file='src/view/stockage/conditionement/liste.tpl'}
            {/if}


            {if $view=='Departement'}
                {include file='src/view/departement/liste.tpl'}
            {/if}


            {if $view=='Article'}
                {include file='src/view/stockage/article/liste.tpl'}
            {/if}

            {if $view=='Charge'}
                {include file='src/view/stockage/article/liste.tpl'}
            {/if}

            {if $view=='Stock'}
                {include file='src/view/stockage/stock/liste.tpl'}
            {/if}

            {if $view=='MngStock'}
                {include file='src/view/stockage/stock/manage/liste.tpl'}
            {/if}

            {if $view=='trnsStock'}
                {include file='src/view/stockage/stock/transfert/liste.tpl'}
            {/if}
            {if $view=='Programme'}
                {include file='src/view/gestio_projet/programme/liste.tpl'}
            {/if}




        </table>
    </div><!-- /.span -->
</div><!-- /.row -->

