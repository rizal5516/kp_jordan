<?php
// Mendapatkan alamat URL saat ini
$currentUrl = url()->current();
?>

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('user.index') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- Logo Undip --}}
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Teknik <br>
                Komputer</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-4">
        <!-- Dashboard -->
        <li class="menu-item {{ $currentUrl == route('user.index') ? 'active' : '' }}">
            <a href="{{ route('user.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ $currentUrl == route('user.ruangan') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="ruangan">Ruangan</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ $currentUrl == route('user.ruangan') ? 'active' : '' }}">
                    <a href="{{ route('user.ruangan') }}" class="menu-link">
                        <div data-i18n="Without menu">Daftar Ruangan</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-calendar"></i>
                <div data-i18n="Basic">jadwal</div>
            </a>
        </li>

        <li class="menu-item {{ $currentUrl == route('user.peminjaman') ? 'active' : '' }}">
            <a href="{{ route('user.peminjaman') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Peminjaman</div>
            </a>
        </li>

        <li class="menu-item {{ $currentUrl == route('user.status-peminjaman') ? 'active' : '' }}">
            <a href="{{ route('user.status-peminjaman') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Basic">Status Peminjaman</div>
            </a>
        </li>

    </ul>
</aside>
<!-- / Menu -->