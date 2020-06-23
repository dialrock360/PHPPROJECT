 
 
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Web</div>
                          
                         
                            <li class="nav-item   {{ ($active ?? ''  =='0') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('hemle') }}">
                                    <i class="fas fa-fw fa-home"></i>
                                    <span>Accueil</span>
                                </a>
                            </li>

                            <li class="nav-item   {{ ($active ?? ''  =='1') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('ui/web') }}">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Configuration</span></a>
                            </li>  
                            <li class="nav-item   {{ ($active ?? ''  =='2') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('ui/web_ctrl') }}">
                                    <i class="fas fa-fw fa-road"></i>
                                    <span>Conrolleurs</span></a>
                            </li>
                            <li class="nav-item  {{ ($active ?? ''  =='3') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('ui/web_ent') }}">
                                    <i class="fas fa-fw fa-street-view"></i>
                                    <span>Entitées</span></a>
                            </li>
                            <li class="nav-item   {{ ($active ?? ''  =='4') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('ui/web_mod') }}">
                                    <i class="fas fa-fw fa-edit"></i>
                                    <span>Models</span></a>
                            </li>
                            <li class="nav-item   {{ ($active ?? ''  =='5') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('ui/web_view') }}">
                                    <i class="fas fa-fw fa-desktop"></i>
                                    <span>Vues</span></a>
                            </li>
                        
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                            <a class="nav-link" href="{{ url('/') }}">
                            <div class="small">Back to :</div>
                             Laravel
                            </a>
                       
                    </div>
                </nav>