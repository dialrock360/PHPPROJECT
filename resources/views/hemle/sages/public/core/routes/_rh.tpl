

{if $route=='header'}
    {if $view=='Employee' ||  $view=='Prestataire'  ||  $view=='Stagiaire'  ||  $view=='Formation'  ||  $view=='Recrutement'  ||  $view=='Presence'  ||  $view=='Conge'  ||  $view=='Paie' }
        {include file='public/core/headers/_userhead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formemployee'}
            {include file='src/view/grh/add/form.tpl'}
        {/if}
        {if $vewContent=='formprestataire'}
            {include file='src/view/grh/add/form.tpl'}
        {/if}
        {if $vewContent=='formstagiaire'}
            {include file='src/view/grh/add/form.tpl'}
        {/if}
        {if $vewContent=='formformation'}
            {include file='src/view/grh/formation/form.tpl'}
        {/if}
        {if $vewContent=='formrecrutement'}
            {include file='src/view/grh/recrutement/form.tpl'}
        {/if}
        {if $vewContent=='formpaie'}
            {include file='src/view/grh/paie/form.tpl'}
        {/if}
        {if $vewContent=='formconge'}
            {include file='src/view/grh/conge/form.tpl'}
        {/if}
        {if $vewContent=='formpresence'}
            {include file='src/view/grh/presence/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='listeemployee'}
            {include file='src/view/grh/employee/liste.tpl'}
        {/if}
        {if $vewContent=='listeprestataire'}
            {include file='src/view/grh/prestataire/liste.tpl'}
        {/if}
        {if $vewContent=='listestagiaire'}
            {include file='src/view/grh/stagiaire/liste.tpl'}
        {/if}
        {if $vewContent=='listeformation'}
            {include file='src/view/grh/formation/liste.tpl'}
        {/if}
        {if $vewContent=='listerecrutement'}
            {include file='src/view/grh/recrutement/liste.tpl'}
        {/if}
        {if $vewContent=='listepaie'}
            {include file='src/view/grh/paie/liste.tpl'}
        {/if}
        {if $vewContent=='listeconge'}
            {include file='src/view/grh/conge/liste.tpl'}
        {/if}
        {if $vewContent=='listepresence'}
            {include file='src/view/grh/presence/liste.tpl'}
        {/if}
    {/if}

{/if}




{if $route=='script'}

    {if $view=='Employee' ||  $view=='Prestataire'  ||  $view=='Stagiaire' ||  $view=='Presence'  ||  $view=='Conge' }
        {include file='src/view/grh/add/script.tpl'}
    {/if}
    {if $view=='Formation'}

        {include file='src/view/grh/formation/script.tpl'}
    {/if}
    {if $view=='Recrutement'}

        {include file='src/view/grh/recrutement/script.tpl'}
    {/if}
    {if $view=='Paie'}

        {include file='src/view/grh/paie/script.tpl'}
    {/if}

{/if}