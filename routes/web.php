<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;



function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function Reflexiveroute()
{  
    $current= URL::current();
    $Servers=array("http://127.0.0.1:8000/", "http://localhost/LaravelAPI/public/");
    $Reflex=$Reflexiveroute=  (startsWith($current,$Servers[0]))? str_replace( $Servers[0], "",$current): 
    ((startsWith($current,$Servers[1]))? str_replace( $Servers[1], "",$current):"/"); 
    $params = explode("/", $Reflexiveroute) ;
    
    if (isset($params[1])) {
        $Reflex=$params[0].'/{'.$params[1].'}';
    }
    return    $Reflex;
} 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /*Route::get('/', function () {
        return view('welcome');
    }); 
 
    $urlRoute =explode("/", URL::current());
    foreach( $urlRoute as $part){
       // echo $part.'<br>';
    }*/
    /*  $Reflexiveroute= (startsWith(URL::current(),$Servers[0]))? str_replace( $Servers[0], "",URL::current()): 
                          ((startsWith(URL::current(),$Servers[1]))? str_replace( $Servers[1], "",URL::current()):"/"); 
                          $params = explode("/", $Reflexiveroute) ;
                          if (isset($params[1])) {
                            $Reflexiveroute=$params[0].'/{'.$params[1].'}';
                          } */

                   //  echo Reflexiveroute(URL::current(),$Servers);
                    
                        Route::get('/', function () {
                        return view('welcome');
                        });            

                          Route::get(Reflexiveroute(), function ($ui='') {
                          
                             $Rroute = Reflexiveroute();
                            
                            $R_view=$F_view=$F_params='';
                            if ($Rroute=='hemle' || $Rroute=='/' ) {
                                
                                $F_view=($Rroute=='hemle' )?'hemle.index':'welcome';
                                $F_params=($Rroute=='hemle' )? array("view"=>'hemle', "active"=>"0",  "title"=>'Hemle',"cactive"=>"active"):'';

                            }else{

                              //  echo  $Rroute.'<br>';
                                
                            $title=$view=($ui=='web' || $ui=='api'  )?  $ui: explode("_", $ui)[0];
                            $url=($view=='web' || $view=='api'  )? 'hemle.'.$view: 'hemle.'.explode("_", $ui)[0];
                            $breadcrumb='configuration'; $active = 1; $cactive = $rout = '';
                          
                           if ($ui!='web' && $ui!='api'  ) {
                             
                                  if (isset(explode("_", $ui)[1] )) {
                                      $rout = explode("_", $ui)[1] ;
                                      $active = ($rout == 'ctrl') ? '2': (($rout == 'ent')  ? '3':(($rout == 'mod')  ? '4':(($rout == 'view') ? '5':'')));
                  
                                      $breadcrumb = ($rout == 'ctrl') ? 'controllers': (($rout == 'ent')  ? 'entities':  (($rout == 'mod' && $view == 'web')  ? 'models': (($rout == 'view') ? 'views': (($rout == 'mod' && $view == 'api') ? 'Api Test':'configuration'))));
                                      $title='Hml'. $breadcrumb;
                                      $cactive = ($rout == 'ctrl') ? 'active': (($rout == 'ent')  ? 'active':(($rout == 'mod')  ? 'active':(($rout == 'view') ? 'active':'')));
                                  }
                                  
                           }

                           $F_view=$url;
                           $F_params=array("view"=>$view, "title"=>$title, "rout"=> $rout ,"cactive"=> $cactive  ,"breadcrumb"=> $breadcrumb, "active"=>$active);
                        }
                        //  echo $F_view;
                      // return  ($Rroute=='/')?view($F_view):view($F_view, $F_params  );
                          return  view($F_view, $F_params  );
                      });  
                      
                      

  /*  Route::get('hemle', function () {  
        return  view('hemle.index',  array("view"=>'hemle', "active"=>"0", "cactive"=>"active")); }
    );*/
     /*Route::get('ui/{id}', function ($ui) {

          $title=$view=($ui=='web' || $ui=='api'  )?  $ui: explode("_", $ui)[0];
          $url=($view=='web' || $view=='api'  )? 'hemle.'.$view: 'hemle.'.explode("_", $ui)[0];
          $breadcrumb='configuration'; $active = 1; $cactive = $rout = '';
        
         if ($ui!='web' && $ui!='api'  ) {
           
                if ( ! isset($rout[1])) {
                    $rout = explode("_", $ui)[1] ;
                    $active = ($rout == 'ctrl') ? '2': (($rout == 'ent')  ? '3':(($rout == 'mod')  ? '4':(($rout == 'view') ? '5':'')));

                    $breadcrumb = ($rout == 'ctrl') ? 'controllers': (($rout == 'ent')  ? 'entities':  (($rout == 'mod' && $view == 'web')  ? 'models': (($rout == 'view') ? 'views': (($rout == 'mod' && $view == 'api') ? 'Api Test':'configuration'))));
                    $title='Hml'. $breadcrumb;
                    $cactive = ($rout == 'ctrl') ? 'active': (($rout == 'ent')  ? 'active':(($rout == 'mod')  ? 'active':(($rout == 'view') ? 'active':'')));
                }
                
         }
       
       return  view($url,  array("view"=>$view, "title"=>$title, "rout"=> $rout ,"cactive"=> $cactive  ,"breadcrumb"=> $breadcrumb, "active"=>$active));
   
    }); */

 
    
   