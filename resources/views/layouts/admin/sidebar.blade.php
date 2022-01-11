<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>

            <a  class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ (request()->is('category_view')) ? 'active' : '' }}" href="category_view">
                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                Categories
            </a>
            <a class="nav-link {{ (request()->is('products_view')) ? 'active' : '' }}" href="products_view">
                <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
                Products
            </a>
            <a class="nav-link {{ (request()->is('add_product_view')) ? 'active' : '' }}" href="add_product_view">
                <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                Add Product
            </a>
            <a class="nav-link {{ (request()->is('reports_view')) ? 'active' : '' }}" href="reports_view">
                <div class="sb-nav-link-icon"><i class="fas fa-bug"></i></div>
                Reports
            </a>
            <a class="nav-link {{ (request()->is('payments_view')) ? 'active' : '' }}" href="payments_view">
                <div class="sb-nav-link-icon"><i class="far fa-money-bill-alt"></i></div>
                Payments
            </a>


            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div> --}}

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Freesource
    </div>
</nav>
