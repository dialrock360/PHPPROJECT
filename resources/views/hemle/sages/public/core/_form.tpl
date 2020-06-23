<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <i class="ace-icon fa fa-refresh"></i>

            Veillez actualiser la page apres avoir fini vos modifications svp!
            <button class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
        </div>
        <!-- Advanced Tables -->

        {if $vewContent=='formarticle'}
            {include file='src/view/stockage/article/formarticle.tpl'}
        {/if}


        {if $vewContent=='formdepartement'}
            {include file='src/view/departement/fomdepartement.tpl'}
        {/if}
        {if $vewContent=='formprofile'}
            {include file='src/view/user/formprofile.tpl'}
        {/if}

        {if $vewContent=='formstock'}

            {include file='src/view/stockage/stock/fomstock.tpl'}
        {/if}
        {if $vewContent=='editstock'}

            {include file='src/view/stockage/stock/stockmanager.tpl'}
        {/if}
        {if $vewContent=='editarticleStock'}

            {include file='/opt/lampp/htdocs/sages/src/view/stockage/stock/formeditarticlestock.tpl'}
        {/if}
        {if $vewContent=='formfamille'}
            {include file='src/view/stockage/famille/fomfamille.tpl'}
        {/if}

        {if $vewContent=='formcategorie'}
            {include file='src/view/stockage/categorie/fomcategorie.tpl'}
        {/if}

        {if $vewContent=='editcategorie'}
            {include file='src/view/stockage/categorie/formeditcategorie.tpl'}
        {/if}

        {if $vewContent=='fomconditionement'}
            {include file='src/view/stockage/conditionement/fomconditionement.tpl'}
        {/if}



        {if $vewContent=='formemployee'}
            {include file='src/view/grh/employee/formemployee.tpl'}
        {/if}
        {if $vewContent=='formprestataire'}
            {include file='src/view/grh/prestataire/formprestataire.tpl'}
        {/if}
        {if $vewContent=='formstagiaire'}
            {include file='src/view/grh/stagiaire/formstagiaire.tpl'}
        {/if}
        {if $vewContent=='formformation'}
            {include file='src/view/grh/formation/formformation.tpl'}
        {/if}
        {if $vewContent=='formrecrutement'}
            {include file='src/view/grh/recrutement/formrecrutement.tpl'}
        {/if}
        {if $vewContent=='formpaie'}
            {include file='src/view/grh/paie/formpaie.tpl'}
        {/if}


        {if $vewContent=='formproduction'}
            {include file='src/view/production/production/formproduction.tpl'}
        {/if}
        {if $vewContent=='formplanification'}
            {include file='src/view/production/planification/formplanification.tpl'}
        {/if}
        {if $vewContent=='formatelier'}
            {include file='src/view/production/atelier/formatelier.tpl'}
        {/if}

        {if $vewContent=='formprgramme'}
            {include file='src/view/gestio_projet/programme/formprogramme.tpl'}
        {/if}
        {if $vewContent=='formprojet'}
            {include file='src/view/gestio_projet/projet/formprojet.tpl'}
        {/if}
        {if $vewContent=='formtache'}
            {include file='src/view/gestio_projet/tache/formtache.tpl'}
        {/if}

        <!--End Advanced Tables -->
    </div>
</div>

