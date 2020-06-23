

{if $route=='header'}
    {if $view=='Achat' ||  $view=='Reception'  ||  $view=='Demande'  ||  $view=='Commande'  ||  $view=='Fournisseur'  ||  $view=='Ressource'  ||  $view=='InventaireL' }
        {include file='public/core/headers/_logistiquehead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formachat'}
            {include file='src/view/logistique/achat/form.tpl'}
        {/if}
        {if $vewContent=='formcommande'}
            {include file='src/view/logistique/commande/form.tpl'}
        {/if}
        {if $vewContent=='formreception'}
            {include file='src/view/logistique/reception/form.tpl'}
        {/if}
        {if $vewContent=='formdemande'}
            {include file='src/view/logistique/dproforma/form.tpl'}
        {/if}
        {if $vewContent=='formfournisseur'}
            {include file='src/view/logistique/fournisseurs/form.tpl'}
        {/if}
        {if $vewContent=='formressource'}
            {include file='src/view/logistique/ressource/form.tpl'}
        {/if}
        {if $vewContent=='forminventaireL'}
            {include file='src/view/logistique/inventaireL/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='listeachat'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listecommande'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listereception'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listedemande'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listefournisseur'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listeressource'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listeinventaireL'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
    {/if}

{/if}




{if $route=='script'}

    {if $view=='Achat'}
        {include file='src/view/logistique/achat/script.tpl'}
    {/if}
    {if $view=='Commande'}
        {include file='src/view/logistique/commande/script.tpl'}
    {/if}
    {if $view=='Reception'}

        {include file='src/view/logistique/reception/script.tpl'}
    {/if}
    {if $view=='Demande'}

        {include file='src/view/logistique/dproforma/script.tpl'}
    {/if}
    {if $view=='Fournisseur'}

        {include file='src/view/logistique/fournisseurs/script.tpl'}
    {/if}
    {if $view=='Ressource'}

        {include file='src/view/logistique/ressource/script.tpl'}
    {/if}
    {if $view=='InventaireL'}

        {include file='src/view/logistique/inventaireL/script.tpl'}
    {/if}

{/if}