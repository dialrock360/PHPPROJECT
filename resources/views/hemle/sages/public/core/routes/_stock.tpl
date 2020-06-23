{if $route=='header'}
    {if $view=='Article'}
        {include file='public/core/headers/_formhead.tpl'}
    {/if}
    {if $view=='Charge'}
        {include file='public/core/headers/_formhead.tpl'}
    {/if}

    {if $view=='Utilisateur'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
    {if $view=='Accueil'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
    {if $view=='Stock'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
    {if $view=='Famille'}
        {if $view=='Famille'}
            {if $vewContent=='formfamille'}
                {include file='public/core/headers/_dasboardhead.tpl'}
            {/if}

            {if $vewContent=='managefamille'}
                {include file='public/core/headers/_formhead.tpl'}
            {/if}
        {/if}
    {/if}

    {if $view=='Categorie'}
        {include file='public/core/headers/_formhead.tpl'}
    {/if}
    {if $view=='trnsStock'}
        {include file='public/core/headers/_stockhead.tpl'}
    {/if}
    {if $view=='MngStock'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {literal}
        <style>
            #formartstk{
                display: none;
            }
        </style>
    {/literal}

    {/if}

    {if $view=='Conditionement'}
        {include file='public/core/headers/_dasboardhead.tpl'}
    {/if}
{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}

        {if $vewContent=='formarticle'}


            {include file='src/view/stockage/article/form.tpl'}
        {/if}
        {if $vewContent=='formcharge'}

            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
        {if $vewContent=='formstock'}

            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
        {if $vewContent=='editstock'}

            {include file='src/view/stockage/stock/manage.tpl'}
        {/if}
        {if $vewContent=='editarticleStock'}

            {include file='src/view/stockage/stock/formeditarticlestock.tpl'}
        {/if}
        {if $vewContent=='formfamille'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
        {if $vewContent=='managefamille'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}

        {if $vewContent=='formcategorie'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
        {if $vewContent=='managecategorie'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}

        {if $vewContent=='editcategorie'}
            {include file='src/view/stockage/categorie/form.tpl'}
        {/if}

        {if $vewContent=='fomconditionement'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}

    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='formarticle'}

            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='trans'}
        {if $vewContent=='managestock'}
            {include file='src/view/stockage/stock/transfert/form.tpl'}
        {/if}
    {/if}

{/if}


{if $route=='script'}


    {if $view=='Famille'}
        {if $vewContent=='formfamille'}
            {include file='src/view/stockage/famille/script.tpl'}
        {/if}

        {if $vewContent=='managefamille'}
            {include file='src/view/stockage/categorie/script.tpl'}
        {/if}
    {/if}
    {if $view=='Categorie'}
        {if $vewContent=='formcategorie'}
            {include file='src/view/stockage/categorie/script.tpl'}
        {/if}

        {if $vewContent=='managecategorie'}
            {include file='src/view/stockage/article/script.tpl'}
        {/if}
    {/if}

    {if $view=='Conditionement'}
        {include file='src/view/stockage/conditionement/script.tpl'}
    {/if}


    {if $view=='Departement'}
        {include file='src/view/departement/script.tpl'}
    {/if}


    {if $view=='Article'}
        {include file='src/view/stockage/article/script.tpl'}
    {/if}

    {if $view=='Charge'}
        {include file='src/view/stockage/article/script.tpl'}
    {/if}

    {if $view=='Stock'}
        {include file='src/view/stockage/stock/script.tpl'}
    {/if}

    {if $view=='MngStock'}
        {include file='src/view/stockage/stock/manage/script.tpl'}
    {/if}

    {if $view=='trnsStock'}
        {include file='src/view/stockage/stock/transfert/script.tpl'}
    {/if}



{/if}

