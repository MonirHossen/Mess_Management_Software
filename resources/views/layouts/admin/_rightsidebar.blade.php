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
                        <i class="fas fa-users"></i>Add Admin User</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('user.create') }}">Add New Admin</a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}">List of Admins</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Mess Members</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('mess_member.create') }}">Add New Member</a>
                        </li>
                        <li>
                            <a href="{{ route('mess_member.index') }}">List of Members</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Meals</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('meal.create') }}">Add New Meal</a>
                        </li>
                        <li>
                            <a href="{{ route('meal.index') }}">List of Meals</a>
                        </li>
                    </ul>
                </li>

                 <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Mess Expense</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('mess_expense.create') }}">Add New Expense</a>
                        </li>
                        <li>
                            <a href="{{ route('mess_expense.index') }}">List of Expense</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-dollar"></i>Deposit</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('deposit.create') }}">Add New Deposit</a>
                        </li>
                        <li>
                            <a href="{{ route('deposit.index') }}">List of Deposit</a>
                        </li>
                    </ul>
                </li>

            </ul>
            </li>

                    </ul>


        </nav>
    </div>
</aside>
