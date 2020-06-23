{if $route=='header'}
    {if $view=='Accueil'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}

    {/if}
    {if $vewContenttype=='table'}

    {/if}
    {if $vewContenttype=='share'}
        {include file='public/core/_share.tpl'}
    {/if}
{/if}


{if $route=='script'}
    {if $view=='Accueil'}
        {include file='src/view/welcome/script.tpl'}
    {/if}
{/if}

