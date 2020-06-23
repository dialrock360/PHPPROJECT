

{if $route=='header'}
    {if $view=='Client' ||  $view=='Location'  ||  $view=='Livraison'  ||  $view=='Vente'  ||  $view=='CaisseEnr'  ||  $view=='Reservation'  ||  $view=='Proforma'   ||  $view=='Prospect' }
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formprospect'}
            {include file='src/view/ventecrm/client/form.tpl'}
        {/if}
        {if $vewContent=='formcaisseEnr'}
            {include file='src/view/ventecrm/client/form.tpl'}
        {/if}
        {if $vewContent=='formclient'}
            {include file='src/view/ventecrm/client/form.tpl'}
        {/if}
        {if $vewContent=='formlocation'}
            {include file='src/view/ventecrm/location/form.tpl'}
        {/if}
        {if $vewContent=='formlivraison'}
            {include file='src/view/ventecrm/livraison/form.tpl'}
        {/if}
        {if $vewContent=='formvente'}
            {include file='src/view/ventecrm/vente/form.tpl'}
        {/if}
        {if $vewContent=='formreservation'}
            {include file='src/view/ventecrm/reservation/form.tpl'}
        {/if}
        {if $vewContent=='formproforma'}
            {include file='src/view/ventecrm/proforma/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}

        {if $vewContent=='listeprospect'}
        {include file='src/view/ventecrm/client/liste.tpl'}
        {/if}
        {if $vewContent=='listecaisseEnr'}
            {include file='src/view/ventecrm/client/liste.tpl'}
        {/if}
        {if $vewContent=='listeclient'}
            {include file='src/view/ventecrm/client/liste.tpl'}
        {/if}
        {if $vewContent=='listelocation'}
            {include file='src/view/ventecrm/location/liste.tpl'}
        {/if}
        {if $vewContent=='listelivraison'}
            {include file='src/view/ventecrm/livraison/liste.tpl'}
        {/if}
        {if $vewContent=='listevente'}
            {include file='src/view/ventecrm/vente/liste.tpl'}
        {/if}
        {if $vewContent=='listereservation'}
            {include file='src/view/ventecrm/reservation/liste.tpl'}
        {/if}
        {if $vewContent=='listeproforma'}
            {include file='src/view/ventecrm/proforma/liste.tpl'}
        {/if}
    {/if}

{/if}




{if $route=='script'}

    {if $view=='CaisseEnr'}
        {include file='src/view/ventecrm/caisseEnr/script.tpl'}
    {/if}
    {if $view=='Prospect'}

        {include file='src/view/ventecrm/prospect/script.tpl'}
    {/if}
    {if $view=='Client'}
        {include file='src/view/ventecrm/client/script.tpl'}
    {/if}
    {if $view=='Location'}

        {include file='src/view/ventecrm/location/script.tpl'}
    {/if}
    {if $view=='Livraison'}

        {include file='src/view/ventecrm/livraison/script.tpl'}
    {/if}
    {if $view=='Vente'}

        {include file='src/view/ventecrm/vente/script.tpl'}
    {/if}
    {if $view=='Reservation'}

        {include file='src/view/ventecrm/reservation/script.tpl'}
    {/if}
    {if $view=='Proforma'}

        {include file='src/view/ventecrm/proforma/script.tpl'}
    {/if}

{/if}