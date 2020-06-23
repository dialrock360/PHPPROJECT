

{if $route=='header'}
    {if $view=='Production' ||  $view=='AtelierProduction'  ||  $view=='Planification' }
        {include file='public/core/headers/_productionheader.tpl'}
    {/if}

{/if}




{if $route=='content'}
    {if $vewContenttype=='form'}

        {if $vewContent=='formproduction'}
            {include file='src/view/production/production/form.tpl'}
        {/if}
        {if $vewContent=='formplanification'}
            {include file='src/view/production/planification/form.tpl'}
        {/if}
        {if $vewContent=='formatelier'}
            {include file='src/view/production/atelier/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}

        {if $vewContent=='listeproduction'}
            {include file='src/view/production/production/liste.tpl'}
        {/if}
        {if $vewContent=='listeplanification'}
            {include file='src/view/production/planification/liste.tpl'}
        {/if}
        {if $vewContent=='listeatelier'}
            {include file='src/view/production/atelier/liste.tpl'}
        {/if}
    {/if}

{/if}




{if $route=='script'}


    {if $view=='Production'}
        {include file='src/view/production/production/script.tpl'}
    {/if}

    {if $view=='AtelierProduction'}
        {include file='src/view/production/atelier/script.tpl'}
    {/if}

    {if $view=='Planification'}
        {include file='src/view/production/planification/script.tpl'}
    {/if}

{/if}