
{if $route=='header'}
    {if $view=='Programme' ||  $view=='Projet'  ||  $view=='Tache'  ||  $view=='Equipe'   }
        {include file='public/core/headers/_projethead.tpl'}
    {/if}

{/if}





{if $route=='content'}
    {if $vewContenttype=='form'}
        {if $vewContent=='formprogramme'}
            {include file='src/view/gestio_projet/programme/form.tpl'}
        {/if}
        {if $vewContent=='formprojet'}
            {include file='src/view/gestio_projet/projet/form.tpl'}
        {/if}
        {if $vewContent=='formtache'}
            {include file='src/view/gestio_projet/tache/form.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='table'}
        {if $vewContent=='listeprogramme'}
            {include file='public/core/elements/_listfrm.tpl'}
        {/if}
        {if $vewContent=='listeprojet'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
        {if $vewContent=='listetache'}
            {include file='public/core/elements/_listdtable1.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='edit'}
        {if $vewContent=='editprogramme'}
            {include file='src/view/gestio_projet/programme/edit.tpl'}
        {/if}
        {if $vewContent=='editprojet'}
            {include file='src/view/gestio_projet/projet/edit.tpl'}
        {/if}
        {if $vewContent=='edittache'}
            {include file='src/view/gestio_projet/tache/edit.tpl'}
        {/if}
    {/if}
    {if $vewContenttype=='manage'}
        {if $vewContent=='manageprogramme'}
            {include file='src/view/gestio_projet/programme/manage.tpl'}
        {/if}
        {if $vewContent=='manageprojet'}
            {include file='src/view/gestio_projet/projet/manage.tpl'}
        {/if}
        {if $vewContent=='managetache'}
            {include file='src/view/gestio_projet/tache/manage.tpl'}
        {/if}
    {/if}

{/if}


{if $route=='script'}

    {if $view=='Programme'}
        {include file='src/view/gestio_projet/programme/script.tpl'}
    {/if}

    {if $view=='Projet'}
        {include file='src/view/gestio_projet/projet/script.tpl'}
    {/if}

    {if $view=='Tache'}
        {include file='src/view/gestio_projet/tache/script.tpl'}
    {/if}

    {if $view=='Equipe'}
        {include file='src/view/gestio_projet/equipe/script.tpl'}
    {/if}


{/if}

