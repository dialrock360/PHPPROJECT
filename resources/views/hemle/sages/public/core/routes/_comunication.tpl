

{if $route=='header'}
    {if $view=='Rendezvous' ||  $view=='Annonce'  ||  $view=='Siteweb'   ||  $view=='Rapport'    }
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formrendezvous'}
            {include file='src/view/communication/rendezvous/form.tpl'}
        {/if}
        {if $vewContent=='formannonce'}
            {include file='src/view/communication/annonce/form.tpl'}
        {/if}
        {if $vewContent=='formsiteweb'}
            {include file='src/view/communication/siteweb/form.tpl'}
        {/if} 
        {if $vewContent=='formrapport'}
            {include file='src/view/communication/rapport/form.tpl'}
        {/if} 
    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='listerendezvous'}
            {include file='src/view/communication/rendezvous/liste.tpl'}
        {/if}
        {if $vewContent=='listeannonce'}
            {include file='src/view/communication/annonce/liste.tpl'}
        {/if}
        {if $vewContent=='listesiteweb'}
            {include file='src/view/communication/siteweb/liste.tpl'}
        {/if} 
        {if $vewContent=='listerapport'}
            {include file='src/view/communication/rapport/liste.tpl'}
        {/if} 
    {/if}

{/if}




{if $route=='script'}

    {if $view=='Rendezvous'}
        {include file='src/view/communication/rendezvous/script.tpl'}
    {/if}
    {if $view=='Annonce'}

        {include file='src/view/communication/annonce/script.tpl'}
    {/if}
    {if $view=='Siteweb'}

        {include file='src/view/communication/siteweb/script.tpl'}
    {/if} 
    {if $view=='Rapport'}

        {include file='src/view/communication/rapport/script.tpl'}
    {/if} 

{/if}