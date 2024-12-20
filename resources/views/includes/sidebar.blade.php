<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">E-Klinik</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li> --}}
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">

                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Master Data</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profilrumahsakit' ? 'active' : '' }}"
                    href="/profilrumahsakit">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-building text-info text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Profil Rumah Sakit</span>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'pasien' ? 'active' : '' }}" href="/pasien">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Pasien</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
