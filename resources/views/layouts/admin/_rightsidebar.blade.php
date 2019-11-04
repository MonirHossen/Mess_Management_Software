<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Mess Members</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('user.create') }}">Add New Member</a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}">List of Members</a>
                        </li>
                    </ul>
                </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
