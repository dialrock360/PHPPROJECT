
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        {if $vewContenttype=='form'}
            {include file='public/core/_form.tpl'}
        {/if}
        {if $vewContenttype=='table'}
            {include file='public/core/_liste.tpl'}
        {/if}
        {if $vewContenttype=='share'}
            {include file='public/core/_share.tpl'}
        {/if}
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->