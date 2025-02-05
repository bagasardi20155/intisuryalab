<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="z-index: 2">
    <div class="app-brand demo">
        <a href="{{ route('products.index') }}" class="app-brand-link">
            <span class="app-brand-text menu-text fw-bolder ms-2">Inti Surya Lab</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ $active == 'dashboard' ? 'active' : '' }}">
            <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ $active == 'add-product' ? 'active' : '' }}">
            <a href="{{ route('products.create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus"></i>
                <div data-i18n="Add Product">Tambah Produk</div>
            </a>
        </li>
    </ul>
</aside>