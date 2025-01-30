<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

  <div class="sidebar-brand">

    <a href="{{ route('dashboard') }}" class="brand-link">

      {{-- <img
        src="../../dist/assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      /> --}}

      <span class="brand-text fw-light">{{ config('adminlte.panel_name', 'Laravel') }}</span>

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

      @foreach ($menuItems as $item)

          @if (isset($item['submenu']) && count($item['submenu']) > 0)

              @php
                  $hasActiveChild = collect($item['submenu'])->contains(function ($sub_item) {
                      return request()->routeIs($sub_item['route_name']);
                  });
              @endphp

              <li class="nav-item {{ $hasActiveChild ? " menu-open" : "" }}">
                  <a href="#" class="nav-link ">
                  <i class="nav-icon {{ $item['icon'] }}"></i>
                  <p>
                      {{ $item['name'] }}
                      <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                  </a>
                  <ul class="nav nav-treeview">
                      @foreach ($item['submenu'] as $sub_item)
                          <li class="nav-item">
                              <a href="{{ route($sub_item['route_name']) }}" class="nav-link {{  request()->routeIs( $sub_item['route_name'] ) ? 'active' : '' }}">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>{{ $sub_item['name'] }}</p>
                              </a>
                          </li>
                      @endforeach
                  </ul>
              </li>
          @else
               @php
                    $routeName =  explode(".", $item['route_name'])[0];
                    $mainRouteNameGroup = $routeName . ".*";
                @endphp
                <li class="nav-item  {{  request()->routeIs( $mainRouteNameGroup ) ? 'menu-open' : '' }}">
                    <a href="{{ route($item['route_name']) }}" class="nav-link">
                        <i class="nav-icon {{ $item['icon'] }}"></i>
                    <p>{{ $item['name'] }}</p>
                    </a>
                </li>
          @endif

      @endforeach

      </ul>

    </nav>
  </div>

</aside>
