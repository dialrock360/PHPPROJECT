<!DOCTYPE html>
<html>

<!-- top slide page inclusion -->

{include file='public/core/bundles/bundle_css.tpl'}
<body class="no-skin">
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->


    <!-- top slide page inclusion -->

    {include file='public/core/bloc/_top.tpl'}
    <!-- end navbar top -->

    <!-- navbar side -->


    <div class="main-container ace-save-state" id="main-container">


        <script>
            try {
                ace.settings.loadState('main-container');
            }
            catch(err) {
                console.log( err.message);
            }
        </script>
        <!-- left nav page inclusion -->

        {include file='public/core/bloc/_nav.tpl'}

        <!-- end navbar side -->

        <!--  page-wrapper -->

        <div class="main-content">
            <div class="main-content-inner">

                <!-- top slide_breadcrumbs -->

                {include file='public/core/bloc/_breadcrumbs.tpl'}
                <!-- end _breadcrumbs top -->

                <!--  page-content -->
                <div class="page-content">


                    <!-- top slide_settings -->

                    {include file='public/core/bloc/_settings.tpl'}
                    <!-- end settings top -->

                    <!-- top page-header -->

                    {include file='public/core/bloc/_page-header.tpl'}
                    <!-- end page-header -->


                    <!-- PAGE CONTENT BEGINS -->

                    {include file='public/core/bundles/bundle_body.tpl'}

                    <!-- PAGE CONTENT ENDS -->






                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <!-- end page-wrapper -->



        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->

        <!-- top slide page inclusion -->

        {include file='public/core/bloc/_foot.tpl'}


        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->



    {include file='public/core/bundles/bundle_js.tpl'}










</body>

</html>
