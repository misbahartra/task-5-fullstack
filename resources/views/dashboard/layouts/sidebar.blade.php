<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active {{ Request::is('dashboard') ? 'active': '' }} " href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard 
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/articles') ? 'active' : '' }} ">
                <a class="nav-link" href="/dashboard/articles">
                    <span data-feather="file-text"></span>
                    Article
                </a>
            </li>
    </div>
</nav>