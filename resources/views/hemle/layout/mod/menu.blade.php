<ul class="sidebar navbar-nav bg-primary ">

    <li class="nav-item   {('1'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/index">
            <i class="fas fa-fw fa-home"></i>
            <span>Accueil</span>
        </a>
    </li>

    <li class="nav-item   {('2'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/database/database">
            <i class="fas fa-fw fa-database"></i>
            <span>Base de Donnee</span></a>
    </li> 
    <li class="nav-item   {('3'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/controlleur/controlleur">
            <i class="fas fa-fw fa-road"></i>
            <span>Conrolleurs</span></a>
    </li>
    <li class="nav-item   {('4'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/entite/entite">
            <i class="fas fa-fw fa-street-view"></i>
            <span>Entitées</span></a>
    </li>
    <li class="nav-item   {('5'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/modele/modele">
            <i class="fas fa-fw fa-edit"></i>
            <span>Models</span></a>
    </li>
    <li class="nav-item   {('6'==$active)?'active':''} ">
        <a class="nav-link" href="{$url_base}SM_Admin/vue/vue">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Vues</span></a>
    </li>
  
    

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> Active Database: {$activedb}</span>
        </a>
    </li>
</ul>

