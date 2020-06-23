

{if $route=='header'}
    {if $view=='Bilan' ||  $view=='Compte'  ||  $view=='Document'  ||  $view=='FactureCharge'  ||  $view=='Caisse'  ||  $view=='Flux' }
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formbilan'}
            {include file='src/view/comptabilite/bilan/form.tpl'}
        {/if}
        {if $vewContent=='formcompte'}
            {include file='src/view/comptabilite/compte/form.tpl'}
        {/if}
        {if $vewContent=='formdocument'}
            {include file='src/view/comptabilite/document/form.tpl'}
        {/if}
        {if $vewContent=='formfactureCharge'}
            {include file='src/view/comptabilite/factureCharge/form.tpl'}
        {/if}
        {if $vewContent=='formcaisse'}
            {include file='src/view/comptabilite/caisse/form.tpl'}
        {/if}
        {if $vewContent=='formflux'}
            {include file='src/view/comptabilite/flux/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='listebilan'}
            {include file='src/view/comptabilite/bilan/liste.tpl'}
        {/if}
        {if $vewContent=='listecompte'}
            {include file='src/view/comptabilite/compte/liste.tpl'}
        {/if}
        {if $vewContent=='listedocument'}
            {include file='src/view/comptabilite/document/liste.tpl'}
        {/if}
        {if $vewContent=='listefactureCharge'}
            {include file='src/view/comptabilite/factureCharge/liste.tpl'}
        {/if}
        {if $vewContent=='listecaisse'}
            {include file='src/view/comptabilite/caisse/liste.tpl'}
        {/if}
        {if $vewContent=='listeflux'}
            {include file='src/view/comptabilite/flux/liste.tpl'}
        {/if}
    {/if}

{/if}




{if $route=='script'}
 

    {if $view=='Bilan'}
        {include file='src/view/comptabilite/bilan/script.tpl'}
    {/if}
    {if $view=='Compte'}

        {include file='src/view/comptabilite/compte/script.tpl'}
    {/if}
    {if $view=='Document'}

        {include file='src/view/comptabilite/document/script.tpl'}
    {/if}
    {if $view=='FactureCharge'}

        {include file='src/view/comptabilite/factureCharge/script.tpl'}
    {/if}
    {if $view=='Caisse'}

        {include file='src/view/comptabilite/caisse/script.tpl'}
    {/if}
    {if $view=='Flux'}

        {include file='src/view/comptabilite/flux/script.tpl'}
    {/if}

{/if}