
<nav class="navbar navbar-expand-lg bg-body-tertiary" {{$hidden}}>
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('unidad.home')}}" wire:navigate>Menu Unidad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              POA
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('registro.poa')}}" wire:navigate>Registrar POA</a></li>
              <li><a class="dropdown-item" href="{{route('unidad.poa')}}" wire:navigate>Ver POA en ejecución</a></li>
              <li><a class="dropdown-item" href="{{route('unidad.poa')}}" wire:navigate>Ver POA en programación</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Presupuesto
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('registro.presupuesto')}}" wire:navigate wire:navigate>Registrar Presupuesto</a></li>
              <li><a class="dropdown-item" href="{{route('unidad.presupuesto')}}" wire:navigate>Ver Presupuesto en ejecución</a></li>
              <li><a class="dropdown-item" href="{{route('unidad.presupuesto')}}" wire:navigate>Ver Presupuesto en programación</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PACC
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('registro.pacc')}}" wire:navigate>Registrar PACC</a></li>
            <li><a class="dropdown-item" href="{{route('unidad.pacc')}}" wire:navigate>Ver PACC ejecución</a></li>
            <li><a class="dropdown-item" href="{{route('unidad.pacc')}}" wire:navigate>Ver PACC programación</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" wire:click="logout()">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>