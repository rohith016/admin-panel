<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <div class="sidebar-brand">

      <a href="./index.html" class="brand-link">

        {{-- <img
          src="../../dist/assets/img/AdminLTELogo.png"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        /> --}}

        <span class="brand-text fw-light">{{ config('app.name', 'Laravel') }}</span>

      </a>

    </div>
    <div class="sidebar-wrapper">
      <nav class="mt-2">

        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item  {{  request()->routeIs('dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon bi bi-speedometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

        </ul>

      </nav>
    </div>

  </aside>
