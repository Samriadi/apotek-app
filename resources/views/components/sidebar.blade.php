<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Apotek Obat Rakyat</a>
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
                    <li class="{{ Request::is('features-data-penjualan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('features-data-penjualan') }}">Data Penjualan Obat</a>
                    </li> 
                    <li class="{{ Request::is('features-data-prediksi') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('features-data-prediksi') }}">Prediksi Pembelian Obat</a>
                    </li>
                    <li class="{{ Request::is('features-data-pembelian') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('features-data-pembelian') }}">Data Pembelian Obat</a>
                    </li>
                    {{-- <li class="{{ Request::is('features-data-laporan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('features-data-laporan') }}">Laporan</a>
                    </li> --}}
                   
                </ul>
            </li>
        </ul>

    </aside>
</div>
