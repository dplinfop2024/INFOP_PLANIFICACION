
<nav class="navbar navbar-expand-lg bg-body-tertiary" {{$hidden}}>
  <div class="container-fluid">
    @if($tipoUsuario==='Unidad')
    <a class="navbar-brand" href="{{route('unidad.home')}}" wire:navigate>Menu Unidad</a>
    @elseif($tipoUsuario==='Programacion')
    <a class="navbar-brand" href="{{route('programacion.home')}}" wire:navigate>Menu Programacion</a>
    @elseif($tipoUsuario==='Planificacion')
    <a class="navbar-brand" href="{{route('planificacion.home')}}" wire:navigate>Menu Planificacion</a>
    @elseif($tipoUsuario==='Proveduria')
    <a class="navbar-brand" href="{{route('proveduria.home')}}" wire:navigate>Menu Proveduria</a>
    @endif
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
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
        @elseif($tipoUsuario==='Programacion')
        <a class="nav-link" href="{{route('programacion.listapoa')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista POA
        </a>
        @endif
        @if($tipoUsuario==='Unidad')
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
        @elseif($tipoUsuario==='Programacion')
        <a class="nav-link" href="{{route('programacion.listapresupuesto')}}" wire:navigate role="button" aria-expanded="false">
          Ver lista Presupuesto
        </a>
        @endif
        @if($tipoUsuario==='Unidad')
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
        @endif
        <li class="nav-item">
            <a class="nav-link" wire:click="logout()">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
