<nav class="main-menu">
    <ul>
        <li>
            <a href="index.html">
                <i class="fa fa-home nav_icon"></i>
                <span class="nav-text">
                Dashboard
                </span>
            </a>
        </li>
        <li>
            <a href="{{ Route('admin.users_list') }}">
                <i class="fa fa-user nav_icon"></i>
                <span class="nav-text">
                Users
                </span>
            </a>
        </li>
        <li>
            <a href="index.html">
                <i class="fa fa-list-ul nav_icon"></i>
                <span class="nav-text">
                Products Category
                </span>
            </a>
        </li>
        <li>
            <a href="index.html">
                <i class="fa fa-check-square-o nav_icon"></i>
                <span class="nav-text">
                Product's Brands
                </span>
            </a>
        </li>
        <li>
            <a href="index.html">
                
                <i class="icon-table nav-icon"></i>
                <span class="nav-text">
                Product Items
                </span>
            </a>
        </li>
        

        {{-- dropdown --}}
        <li class="has-subnav">
            <a href="javascript:;">
            <i class="fa fa-check-square-o nav_icon"></i>
            <span class="nav-text">
            Forms
            </span>
            <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="inputs.html">Inputs</a>
                </li>
                <li>
                    <a class="subnav-text" href="validation.html">Form Validation</a>
                </li>
            </ul>
        </li>
        {{-- dropdown --}}
        
        <li>
            <a href="charts.html">
                <i class="fa fa-bar-chart nav_icon"></i>
                <span class="nav-text">
                    Charts
                </span>
            </a>
        </li>

        <li>
            <a href="tables.html">
                <i class="icon-table nav-icon"></i>
                <span class="nav-text">
                Tables
                </span>
            </a>
        </li>
        
        
    </ul>
    <ul class="logout">
        <li>
        <a href="{{route('logout')}}">
        <i class="icon-off nav-icon"></i>
        <span class="nav-text">
        Logout
        </span>
        </a>
        </li>
    </ul>
</nav>