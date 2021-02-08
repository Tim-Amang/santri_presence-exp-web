<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-success">Menu</div>
                <a class="nav-link">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-success"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-user text-success"></i></div>
                    Pengguna
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Pengurus</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Santri</a>
                    </nav>
                </div>
                <a class="nav-link" href="/index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-alt text-success"></i></div>
                    Report
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <button class="btn btn-secondary" onclick="darkmode()" type="button" aria-disabled="true" id="darkmodeButton">
                <i class="fas fa-moon" id="darkmodeIcon"></i>
                <span class="m-0 p-0" id="darkmodeText">Dark Mode</span>
            </button>
            <div class="small mt-2">Santri Presence || Admin</div>
        </div>
    </nav>
</div>