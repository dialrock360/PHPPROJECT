{if $route=='header'}
    {if $view=='Departement' ||  $view=='Trash'  ||  $view=='User' ||  $view=='Ingection' }
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
    {if $view=='Utilisateur'  }
        {include file='public/core/headers/_userhead.tpl'}
    {/if}
{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}

        {if $vewContent=='formdepartement'}
            {include file='src/view/service/departement/form.tpl'}
        {/if}
        {if $vewContent=='formtrash'}
            {include file='src/view/service/trash/form.tpl'}
        {/if}
        {if $vewContent=='formuser'}
            {include file='src/view/service/user/form.tpl'}
        {/if}
        {if $vewContent=='fomxss'}
            {include file='src/view/service/xss/form.tpl'}
        {/if}
        {if $vewContent=='formprofile'}
            {include file='src/view/service/user/profil/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}

        {if $vewContent=='listedepartement'}
            {include file='src/view/service/departement/liste.tpl'}
        {/if}
        {if $vewContent=='fomxss'}
            {include file='src/view/service/xss/liste.tpl'}
        {/if}
        {if $vewContent=='listetrash'}
            {include file='src/view/service/trash/liste.tpl'}
        {/if}
        {if $vewContent=='listeuser'}
            {include file='src/view/service/user/liste.tpl'}
        {/if}
    {/if}

{/if}


{if $route=='script'}
    {if $view=='Departement'}
        {include file='src/view/service/programme/script.tpl'}
    {/if}

    {if $view=='Trash'}
        {include file='src/view/service/projet/script.tpl'}
    {/if}

    {if $view=='User' }
        {include file='src/view/service/tache/script.tpl'}
    {/if}
    {if $view=='Utilisateur'   ||  $view=='Ingection'}
        {include file='src/view/service/user/profil/script.tpl'}
    {/if}
{/if}

