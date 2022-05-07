<nav id="sidebarMenu" class="mt-2 col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? '' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <ul>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? '' : '' }}" href="/dayone">
                        <span data-feather="file"></span>
                        Peserta Day 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? '' : '' }}" href="/daytwo">
                        <span data-feather="file"></span>
                        Peserta Day 2
                    </a>
                </li>
            </ul>
        </ul>
    </div>
</nav>