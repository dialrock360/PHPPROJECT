<div id="layoutSidenav_nav">


        @if($view   =='web') 
        @include('hemle.layout.partials.menu.webmenu') 
        @endif

        @if($view   =='api') 
        @include('hemle.layout.partials.menu.apimenu') 
        @endif

        @if($view    =='hemle') 
        @include('hemle.layout.partials.menu.homemenu') 
        @endif
            </div> 