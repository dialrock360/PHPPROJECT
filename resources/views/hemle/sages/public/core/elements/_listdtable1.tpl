<div class="admin-dashone-data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="sparkline8-list shadow-reset">

                    <div class="sparkline8-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <caption>
                                    <div id="ok" > </div>
                                </caption>

                                {if $view=='Programme'}
                                    {include file='src/view/gestio_projet/programme/liste.tpl'}
                                {/if}

                                {if $view=='Projet'}
                                    {include file='src/view/gestio_projet/projet/liste.tpl'}
                                {/if}

                                {if $view=='Tache'}
                                    {include file='src/view/gestio_projet/tache/liste.tpl'}
                                {/if}

                                {if $view=='Equipe'}
                                    {include file='src/view/gestio_projet/equipe/liste.tpl'}
                                {/if}





                                {if $view=='Achat'}
                                    {include file='src/view/logistique/achat/liste.tpl'}
                                {/if}
                                {if $view=='Commande'}
                                    {include file='src/view/logistique/commande/liste.tpl'}
                                {/if}
                                {if $view=='Reception'}

                                    {include file='src/view/logistique/reception/liste.tpl'}
                                {/if}
                                {if $view=='Demande'}

                                    {include file='src/view/logistique/dproforma/liste.tpl'}
                                {/if}
                                {if $view=='Fournisseur'}

                                    {include file='src/view/logistique/fournisseurs/liste.tpl'}
                                {/if}
                                {if $view=='Ressource'}

                                    {include file='src/view/logistique/ressource/liste.tpl'}
                                {/if}
                                {if $view=='InventaireL'}

                                    {include file='src/view/logistique/inventaireL/liste.tpl'}
                                {/if}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>