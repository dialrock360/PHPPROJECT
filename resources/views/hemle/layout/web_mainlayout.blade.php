 
        <!DOCTYPE html>
<html lang="fr"> 
@include('hemle.layout.mod.head')
<body id="page-top">


 
@include('hemle.layout.mod.navbar')
<div id="wrapper">

	<!-- Sidebar --> 
@include('hemle.layout.mod.menu')

	<div id="content-wrapper">

		<div class="container-fluid">
			<!-- Breadcrumbs -->
 
@include('hemle.layout.mod.breadcrumbs')

			<!-- Icon Cards-->
			
			@yield('content')


			<!-- DataTables Example -->


		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer --> 
@include('hemle.layout.mod.footer')
	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button--> 
@include('hemle.layout.mod.scrollbutton')




<!-- script files--> 
@include('hemle.layout.mod.script')


</body>

</html>
