

<nav class="navbar navbar-expand-lg bg-body-tertiary"  {{$hidden}}>
  <div class="container-fluid" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <a class="logo mx-3">
        <img src="/images/Logo INFOP small.png" alt="Bootstrap" width="200" height="84">
      </a>
      @if($tipoUsuario==='Unidad')
      <a class="navbar-brand" href="{{route('unidad.home')}}" wire:navigate>Menu Unidad</a>
      @elseif($tipoUsuario==='Programacion')
      <a class="navbar-brand" href="{{route('programacion.home')}}" wire:navigate>Menu Programacion</a>
      @elseif($tipoUsuario==='Planificacion')
      <a class="navbar-brand" href="{{route('planificacion.home')}}" wire:navigate>Menu Planificacion</a>
      @elseif($tipoUsuario==='Proveduria')
      <a class="navbar-brand" href="{{route('proveduria.home')}}" wire:navigate>Menu Proveeduria</a>
      @elseif($tipoUsuario==='Evaluacion')
      <a class="navbar-brand" href="{{route('evaluacion.home')}}" wire:navigate>Menu Evaluacion</a>
      @endif
      <ul class="navbar-nav">
        <!--Menu navbar para Unidad-->
        @if($tipoUsuario==='Unidad')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              POA
            </a>
            <ul class="dropdown-menu">
              @foreach($menuUnidadPOA as $menuPOA)
              <li><a class="dropdown-item" href="{{route($menuPOA['link'])}}" wire:navigate>{{$menuPOA['opcion']}}</a></li>
              @endforeach
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Presupuesto
          </a>
          <ul class="dropdown-menu">
            @foreach($menuUnidadPresupuesto as $menuPres)
            <li><a class="dropdown-item" href="{{route($menuPres['link'])}}" wire:navigate wire:navigate>{{$menuPres['opcion']}}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
          </a>
          <ul class="dropdown-menu">
            @foreach($menuUnidadPACC as $menuPACC)
            <li><a class="dropdown-item" href="{{route($menuPACC['link'])}}" wire:navigate>{{$menuPACC['opcion']}}</a></li>
            @endforeach
          </ul>
        </li>
        <!--Menu navbar para Planificación-->
        @elseif($tipoUsuario==='Planificacion')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            POA
            </a>
            <ul class="dropdown-menu">
              @foreach($menuPlanificacionPOA as $menu_POA)
              <li><a class="dropdown-item" href="{{route($menu_POA['link'])}}" wire:navigate>{{$menu_POA['opcion']}}</a></li>
              @endforeach
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
            </a>
            <ul class="dropdown-menu">
              @foreach($menuPlanificacionPACC as $menu_PACC)
              <li><a class="dropdown-item" href="{{route($menu_PACC['link'])}}" wire:navigate>{{$menu_PACC['opcion']}}</a></li>
              @endforeach
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Presupuesto
            </a>
            <ul class="dropdown-menu">
              @foreach($menuPlanificacionPresupuesto as $menu_Pres)
              <li><a class="dropdown-item" href="{{route($menu_Pres['link'])}}" wire:navigate>{{$menu_Pres['opcion']}}</a></li>
              @endforeach
            </ul>
        </li>
        <!--Menu navbar para Programación-->
        @elseif($tipoUsuario==='Programacion')
        <a class="nav-link" href="{{route('poa.lista')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista POA
        </a>
        <a class="nav-link" href="{{route('presupuesto.lista')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista Presupuesto
        </a>
        <!--Menu navbar para Proveeduria-->
        @elseif($tipoUsuario==='Proveduria')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('pacc.lista')}}" wire:navigate role="button"></a></li>
            </ul>
        </li>
        <!--Menu navbar para evaluación-->
        @elseif($tipoUsuario==='Evaluacion')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            POA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('poa.lista')}}" wire:navigate>Ver lista POA</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('poa.lista')}}" wire:navigate>Ver lista PACC</a></li>
          </ul>
        </li>
        <a class="nav-link" href="{{route('poa.lista')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista Presupuesto
        </a>
        @endif
      </ul>
      <ul class="navbar-nav" style="margin-left: auto;">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="/images/user.png" alt="Imagen de Perfil">
              <b>Usuario: Prueba
        </a></b>

          <ul class="dropdown-menu" style="margin-left: auto;">
            <li><a class="dropdown-item" href="{{route('mantenimiento.editarperfil')}}" wire:navigate> Editar Perfil</a></li>
            <li><a class="nav-link" wire:click="logout()">Cerrar sesión</a></li>
          </ul>
        </li>
      </div>
    </div>
  </div>
</nav>
