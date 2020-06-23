<ol class="breadcrumb">

 

        @if($view    =='hemle' || $view   =='web' || $view   =='api') 
        <li class="breadcrumb-item {{ $cactive ?? '' }} ">
        <a href="{{ url('hemle') }}">Accueil</a>

        </li>
        @endif


        @if($view   =='web')  
        </li>
        <li class="breadcrumb-item   {{ $cactive ?? ''  }}">
        <a href="{{ url('ui/web') }}">Web</a>

        </li>
                @if($rout  !=' ')  
                </li>
                <li class="breadcrumb-item   {{ $cactive ?? ''  }}">
                <a href="{{ url('ui/web') }}">{{ $breadcrumb ?? ''  }}</a>

                </li>
                @endif
        @endif

        @if($view   =='api') 
        </li>
        <li class="breadcrumb-item  {{ $cactive ?? ''  }}">
        <a href="{{ url('ui/api') }}">Api</a>

                </li>
                    @if($rout  !=' ')  
                    </li>
                    <li class="breadcrumb-item   {{ $cactive ?? ''  }}">
                    <a href="{{ url('ui/web') }}">{{ $breadcrumb ?? ''  }}</a>

                </li>
                @endif
        @endif

  
</ol>