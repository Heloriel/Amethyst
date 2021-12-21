<nav class="navbar navbar-expand-lg bg-white py-1">
    <div class="container-fluid">

        <div class="col-12 col-md-auto d-flex align-items-center">

        <a class="navbar-brand col-6 col-md-auto me-0 text-center" href="#"><img src="/img/Logo.svg" alt="Logo" height="25" /></a>

        <div class="d-flex d-md-none mobile-nav">
            <div class="nav-item col-3 d-flex justify-content-center notification">
                <button href="#" class="link-dark" role="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="bell"></i>
                </button>
                <div class="dropdown list-group-flush dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link itemaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </a>
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link item
                    </a>
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link item
                    </a>
                </div>
            </div>

            <button class="navbar-toggler col-3 d-block p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu"></i>
            </button>
        </div>

    </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills flex-column mb-auto d-md-none">
                <li class="nav-item">
                    <a href="/" class="nav-link rounded-0 {{ request()->is('/') ? 'active' : '' }} d-flex link-dark">
                        <i data-feather="home" class="me-2"></i>
                        HOME
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link rounded-0 {{ preg_match('(budget|biddings|create)', url()->current()) ? 'active' : '' }} link-dark d-flex" data-bs-toggle="collapse" data-bs-target="#biddings-collapse" aria-expanded="true">
                        <i data-feather="book" class="me-2"></i> REGISTROS
                    </a>
                    <div class="collapse {{ preg_match('(budget|biddings|create)', url()->current()) ? 'show' : '' }} submenu" id="biddings-collapse" style="">
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
                @if (auth()->user()->rank >= 2)
                <li class="nav-item">
                    <a href="#" class="nav-link rounded-0 {{ str_contains(url()->current(), 'config') ? 'active' : '' }} link-dark d-flex" data-bs-toggle="collapse" data-bs-target="#config-collapse" aria-expanded="true">
                        <i data-feather="settings" class="me-2"></i>
                        CONFIGURAÇÕES
                    </a>
                    <div class="collapse {{ str_contains(url()->current(), 'config') ? 'show' : '' }} submenu" id="config-collapse" style="">
                        <ul class="btn-toggle-nav px-3 mt-1 list-unstyled small">
                            <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'general') ? 'submenu-active' : '' }}">
                                <a href="/config/general" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'general') ? 'link-dark' : 'link-secondary' }}">
                                    <i data-feather="chevron-right" class="me-2"></i>
                                    GERAL
                                </a>
                            </li>
                            <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'status') ? 'submenu-active' : '' }}">
                                <a href="/config/status" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'status') ? 'link-dark' : 'link-secondary' }}">
                                    <i data-feather="chevron-right" class="me-2"></i>
                                    SITUAÇÕES
                                </a>
                            </li>
                            @if (auth()->user()->rank >= 3)
                            <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'portal') ? 'submenu-active' : '' }}">
                                <a href="/config/portal" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'portal') ? 'link-dark' : 'link-secondary' }}">
                                    <i data-feather="chevron-right" class="me-2"></i>
                                    PORTAIS
                                </a>
                            </li>
                            @endif
                            <li class="nav-item rounded-pill small p-0 mb-1 {{ str_contains(url()->current(), 'user') ? 'submenu-active' : '' }}">
                                <a href="/config/user/list" class="nav-link p-1 rounded-0 d-flex {{ str_contains(url()->current(), 'user') ? 'link-dark' : 'link-secondary' }}">
                                    <i data-feather="chevron-right" class="me-2"></i>
                                    USUÁRIOS
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
            <div class="nav-item navbar-search col-12 col-md-6 mx-md-2 my-2 my-md-0 px-2 d-block">
                <form class="">
                    <div>
                        <input class="form-control rounded-pill navbar-search" type="search" placeholder="PROCURAR NO SISTEMA ..." aria-label="Search">
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-container d-none d-md-block">

            <div class="nav-item navbar-search col-md-6">
                <form class="">
                    <div>
                        <input class="form-control rounded-pill navbar-search" type="search" placeholder="PROCURAR NO SISTEMA ..." aria-label="Search">
                    </div>
                </form>
            </div>

            <div class="nav-item col-auto">
                <a href="#" class="link-dark" role="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="bell"></i>
                </a>
                <div class="dropdown list-group-flush dropdown-menu dropdown-menu-end me-3" aria-labelledby="dropdownMenuLink">
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link itemaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </a>
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link item
                    </a>
                    <a href="#" class="list-group-item" aria-current="true">
                        The current link item
                    </a>
                </div>
            </div>

            <div class="nav-item col-md-auto d-none d-md-block mx-2 text-end align-self-center">
                <a href="/create" class="btn btn-outline-primary btn-sm rounded-pill px-3" role="button">
                    CADASTRAR <i data-feather="plus" class="ms-2"></i>
                </a>
            </div>
        </div>

        </div>
    </nav>
