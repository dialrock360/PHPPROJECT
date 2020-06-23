 



<!DOCTYPE html>
<html lang="en">
@include('hemle.layout.partials.head') 
    <body class="sb-nav-fixed">

@include('hemle.layout.partials.navbar') 
      
        <div id="layoutSidenav">


@include('hemle.layout.partials.menu') 
          
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
@include('hemle.layout.partials.breadcrumbs') 
                       
                
			@yield('content')


                       
                       
                    </div>
                </main>

@include('hemle.layout.partials.footer')       
            </div>
		</div>
		
@include('hemle.layout.partials.script') 

    </body>
</html>
