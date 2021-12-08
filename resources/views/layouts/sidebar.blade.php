<div class="d-none d-md-flex flex-column flex-shrink-0 p-0 bg-light sidebar" style="width: 250px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link rounded-0 {{ request()->is('/') ? 'active' : '' }} d-flex link-dark">
                <i data-feather="home" class="me-2"></i>
                   HOME
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
                class="nav-link rounded-0 {{ str_contains(url()->current(), 'list') ? 'active' : '' }}
                {{ str_contains(url()->current(), 'create') ? 'active' : '' }} link-dark d-flex"
                data-bs-toggle="collapse" data-bs-target="#biddings-collapse" aria-expanded="true">
                <i data-feather="book" class="me-2"></i>
                    REGISTROS
            </a>
            <div class="collapse {{ str_contains(url()->current(), 'list') ? 'show' : '' }}
                {{ str_contains(url()->current(), 'create') ? 'show' : '' }} submenu"
                id="biddings-collapse" style="">
                <ul class="btn-toggle-nav px-3 mt-1 list-unstyled small">
                    <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'biddings') ? 'submenu-active' : '' }}">
                        <a href="/list/biddings" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'biddings') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="list" class="mx-2"></i> LICITAÇÕES
                        </a>
                    </li>
                    <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'budgets') ? 'submenu-active' : '' }}">
                        <a href="/list/budgets" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'budgets') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="dollar-sign" class="mx-2"></i> ORÇAMENTOS
                        </a>
                    </li>
                    <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'create') ? 'submenu-active' : '' }}">
                        <a href="/create" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'create') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="plus-circle" class="mx-2"></i> CADASTRAR
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @if( auth()->user()->rank >= 2)
        <li class="nav-item">
            <a href="#" class="nav-link rounded-0 {{ str_contains(url()->current(), 'config') ? 'active' : '' }} link-dark d-flex" data-bs-toggle="collapse" data-bs-target="#config-collapse" aria-expanded="true">
                <i data-feather="settings" class="me-2"></i>
                CONFIGURAÇÕES
            </a>
            <div class="collapse {{ str_contains(url()->current(), 'config') ? 'show' : '' }} submenu"
                id="config-collapse" style="">
                <ul class="btn-toggle-nav px-3 mt-1 list-unstyled small">
                    <li
                        class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'general') ? 'submenu-active' : '' }}">
                        <a href="/config/general" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'general') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="chevron-right" class="me-2"></i>
                                GERAL
                        </a>
                    </li>
                    <li
                        class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'status') ? 'submenu-active' : '' }}">
                        <a href="/config/status" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'status') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="chevron-right" class="me-2"></i>
                                SITUAÇÕES
                        </a>
                    </li>
                    <li
                        class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'portal') ? 'submenu-active' : '' }}">
                        <a href="/config/portal" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'portal') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="chevron-right" class="me-2"></i>
                                PORTAIS
                        </a>
                    </li>
                    <li
                        class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'users') ? 'submenu-active' : '' }}">
                        <a href="/config/portal" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'users') ? 'link-dark' : 'link-secondary' }}">
                            <i data-feather="chevron-right" class="me-2"></i>
                                USUÁRIOS
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
    </ul>
    <hr>
    <div class="nav-item pb-3 ps-3">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/img/Logo-short.svg" alt="" width="32" height="32" class="rounded-circle me-2 user-avatar">
                <strong>{{ auth()->user()->name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li>
                    <h6 class="dropdown-header">Menu - {{ session()->get('rank_name') }}</h6>
                </li>
                <li><a class="dropdown-item" href="/logout">Conta</a></li>
                <hr>
                <li><a class="dropdown-item" href="/logout">Sair</a></li>
            </ul>
        </div>
    </div>
</div>
