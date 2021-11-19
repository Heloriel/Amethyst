<div class="d-none d-md-flex flex-column flex-shrink-0 p-0 bg-light sidebar" style="width: 250px;">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/home" class="nav-link rounded-0 {{ request()->is('home') ? 'active' : '' }} d-flex link-dark">
          <ion-icon name="home-outline"></ion-icon> <span class="me-1">
          HOME
        </a>
      </li>
      <li class="nav-item">
        <a href="/manager" class="nav-link rounded-0 {{ (str_contains(url()->current(), 'manager')) ? 'active' : '' }} link-dark d-flex">
          <ion-icon name="create-outline"></ion-icon> <span class="me-1">
          GERENCIAR
        </a>
      </li>
      <li class="nav-item">
        <a href="/create" class="nav-link rounded-0 {{ (request()->is('create')) ? 'active' : '' }} link-dark d-flex">
          <ion-icon name="add-circle-outline"></ion-icon>
          ADICIONAR
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link rounded-0 {{ (str_contains(url()->current(), 'config')) ? 'active' : '' }} link-dark d-flex" data-bs-toggle="collapse" data-bs-target="#config-collapse" aria-expanded="true">
          <ion-icon name="settings-outline"></ion-icon>
          CONFIGURAÇÕES
        </a>
        <div class="collapse {{ (str_contains(url()->current(), 'config')) ? 'show' : '' }} submenu" id="config-collapse" style="">
            <ul class="btn-toggle-nav px-3 mt-1 list-unstyled small">
                <li class="nav-item rounded-pill small p-0 mb-1 {{ (str_contains(url()->current(), 'general')) ? 'submenu-active' : '' }}">
                    <a href="/config/general" class="nav-link p-1 rounded-0 d-flex link-dark">
                      <ion-icon name="chevron-forward-outline"></ion-icon> <span class="me-1">
                      GERAL
                    </a>
                </li>
                <li class="nav-item rounded-pill small p-0 mb-1 {{ (str_contains(url()->current(), 'status')) ? 'submenu-active' : '' }}">
                    <a href="/config/status" class="nav-link p-1 rounded-0 d-flex link-dark">
                      <ion-icon name="chevron-forward-outline"></ion-icon> <span class="me-1">
                      SITUAÇÕES
                    </a>
                </li>
                <li class="nav-item rounded-pill small p-0 mb-1 {{ (str_contains(url()->current(), 'portal')) ? 'submenu-active' : '' }}">
                    <a href="/config/portal" class="nav-link p-1 rounded-0 d-flex link-dark">
                      <ion-icon name="chevron-forward-outline"></ion-icon> <span class="me-1">
                      PORTAIS
                    </a>
                </li>
            </ul>
          </div>
      </li>
    </ul>
    <hr>
    <div class="nav-item pb-3 ps-3">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="/img/Logo-short.svg" alt="" width="32" height="32" class="rounded-circle me-2 user-avatar">
          <strong>Scriplex</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><h6 class="dropdown-header">Menu</h6></li>
          <li><a class="dropdown-item" href="/">Sair</a></li>
        </ul>
      </div>
    </div>
  </div>
