<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" navigation-header">
          <span data-i18n="nav.category.layouts">Menu Dashboard</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Layouts"></i>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Admin Akun</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('admin.add') }}" data-i18n="nav.page_layouts.1_column">Tambah Akun Admin</a>
            </li>
            <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">setting</a>
            </li>

          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-bookmark"></i><span class="menu-title" data-i18n="nav.navbars.main">Kategori Pelayanan</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('category.index') }}" data-i18n="nav.navbars.nav_light">Tambah Pelayanan</a>
            </li>
            <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">setting</a>
            </li>

          </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="nav.navbars.main">Loket</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{ route('loket.index') }}" data-i18n="nav.navbars.nav_light">Tambah Loket</a>
              </li>
              <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">setting</a>
              </li>

            </ul>
          </li>

        <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Laporan</span></a>
          <ul class="menu-content">


            <li><a class="menu-item" href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static">Laporan Bulanan Admin</a>
            </li>
            <li><a class="menu-item" href="vertical-nav-light.html" data-i18n="nav.vertical_nav.vertical_nav_light">Laporan Loket</a>
            </li>


          </ul>
        </li>
      </ul>
    </div>
  </div>
