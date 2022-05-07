<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 py-3" href="/dashboard">Admin Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="/exportexcel" class="btn btn-light me-2">Export in Excel</a>
            <form action="/logout" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn me-3 px-4 btn-outline-light">Log Out</button>
            </form>
        </div>
    </div>
</header>