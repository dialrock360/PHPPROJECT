<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->

        {if $vewContent=='formarticle'}
            {include file='src/view/stockage/article/liste.tpl'}
        {/if}



        {if $vewContent=='listeproduction'}
            {include file='src/view/production/production/liste.tpl'}
        {/if}
        {if $vewContent=='listeplanification'}
            {include file='src/view/production/planification/liste.tpl'}
        {/if}
        {if $vewContent=='listeatelier'}
            {include file='src/view/production/atelier/liste.tpl'}
        {/if}

        {if $vewContent=='listeprgramme'}
            {include file='src/view/gestio_projet/programme/liste.tpl'}
        {/if}
        {if $vewContent=='listeprojet'}
            {include file='src/view/gestio_projet/projet/liste.tpl'}
        {/if}
        {if $vewContent=='listetache'}
            {include file='src/view/gestio_projet/tache/liste.tpl'}
        {/if}

        <!--End Advanced Tables -->
    </div>
</div>

