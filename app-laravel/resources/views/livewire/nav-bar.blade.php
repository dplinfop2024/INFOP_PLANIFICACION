
<nav class="navbar navbar-expand-lg bg-body-tertiary" {{$hidden}}>
  <div class="container-fluid">
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
      <a class="navbar-brand" href="{{route('proveduria.home')}}" wire:navigate>Menu Proveduria</a>
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
        <!--Menu navbar para Programación-->
        @elseif($tipoUsuario==='Programacion')
        <a class="nav-link" href="{{route('programacion.listapoa')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista POA
        </a>
        <a class="nav-link" href="{{route('programacion.listapresupuesto')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista Presupuesto
        </a>
        <!--Menu navbar para Proveeduria-->
        @elseif($tipoUsuario==='Proveduria')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
            </a>
            <ul class="dropdown-menu">
              @foreach($menuProveduriaPACC as $menu_PACC_)
              <li><a class="dropdown-item" href="{{route($menu_PACC_['link'])}}" wire:navigate>{{$menu_PACC_['opcion']}}</a></li>
              @endforeach
            </ul>
        </li>
        <!--Menu navbar para evaluación-->
        @elseif($tipoUsuario==='Evaluacion')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            POA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('evaluacion.listapoa')}}" wire:navigate>Ver lista POA</a></li>
            <li><a class="dropdown-item" href="{{route('evaluacion.listaavancepoa')}}" wire:navigate>Ver lista Avances POA</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('evaluacion.listapacc')}}" wire:navigate>Ver lista PACC</a></li>
            <li><a class="dropdown-item" href="{{route('evaluacion.listaavancepacc')}}" wire:navigate>Ver lista Avances PACC</a></li>
          </ul>
        </li>
        <a class="nav-link" href="{{route('evaluacion.listapresupuestoejecucion')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista Presupuesto
        </a>
        @endif
        <li class="nav-item">
            <a class="nav-link" wire:click="logout()">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
