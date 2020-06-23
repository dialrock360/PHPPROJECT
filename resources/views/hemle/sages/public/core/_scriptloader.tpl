


{if $view=='Utilisateur'}
    {include file='src/view/user/script.tpl'}
{/if}
{if $view=='Accueil'}
    {include file='src/view/welcome/script.tpl'}
{/if}
{if $view=='Stock'}
    {include file='src/view/stockage/stock/script.tpl'}
{/if}

{if $view=='Famille'}
    {include file='src/view/stockage/famille/script.tpl'}
{/if}

{if $view=='Categorie'}
    {include file='src/view/stockage/categorie/script.tpl'}
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


{if $view=='Employee'}
    {include file='src/view/grh/employee/script.tpl'}
{/if}
{if $view=='Prestataire'}

    {include file='src/view/grh/prestataire/script.tpl'}
{/if}
{if $view=='Stagiaire'}

    {include file='src/view/grh/stagiaire/script.tpl'}
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



{if $view=='Production'}
    {include file='src/view/production/production/script.tpl'}
{/if}

{if $view=='AtelierProduction'}
    {include file='src/view/production/atelier/script.tpl'}
{/if}

{if $view=='Planification'}
    {include file='src/view/production/planification/script.tpl'}
{/if}

{if $view=='Programme'}
    {include file='src/view/gestio_projet/programme/script.tpl'}
{/if}

{if $view=='Projet'}
    {include file='src/view/gestio_projet/programme/script.tpl'}
{/if}

{if $view=='Tache'}
    {include file='src/view/gestio_projet/programme/script.tpl'}
{/if}

{if $view=='Equipe'}
    {include file='src/view/gestio_projet/programme/script.tpl'}
{/if}
