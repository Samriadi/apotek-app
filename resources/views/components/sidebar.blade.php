<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Apotek Rakyat</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            
            <li class="nav-item dropdown {{ $type_menu === 'features' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-box"></i> <span>Features</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('features-data-obat') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('features-data-obat') }}">Data Obat</a>
                    </li>
                   
                </ul>
            </li>
        </ul>

    </aside>
</div>
