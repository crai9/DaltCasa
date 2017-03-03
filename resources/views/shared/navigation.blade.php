<header id="global-header" class="clearfix fixed top right left bg-white headroom hr-pinned hr-top">
    <div id="logo-bar" class="border-b row bg-white">

        <a class="row" href="/">
            <i aria-hidden="true" class=" block ui ui-logo ui-logo-left center"></i>
        </a>

        <div class="subscribe-hdr absolute top right dropdown-button">
            <ul class="dropdown">
                <li>
                    @if (Auth::guest())
                    <button class="meta subscribe-cta  nav-item">Menu ▼</button>
                    @else
                    <button class="meta subscribe-cta  nav-item">{{ Auth::user()->name }} - Menu ▼</button>
                    @endif
                    <ul class="submenu">
                        <li class="dropdown-hidden">
                            <a class="nav-item" href="/">
                                <span class="meta dropdown-link">Home</span>
                            </a>
                        </li>
                        <li class="dropdown-hidden">
                            <a class="nav-item" href="/music">
                                <span class="meta dropdown-link">Music</span>
                            </a>
                        </li>
                        <li class="dropdown-hidden">
                            <a class="nav-item" href="/articles">
                                <span class="meta dropdown-link">Articles</span>
                            </a>
                        </li>
                        <li class="dropdown-hidden">
                            <a class="nav-item" href="/events">
                                <span class="meta dropdown-link">Events</span>
                            </a>
                        </li>
                        <li class="dropdown-hidden">
                            <a class="nav-item" href="/about">
                                <span class="meta dropdown-link">About</span>
                            </a>
                        </li>

                        @if (Auth::guest())
                            <li class="">
                                <a class="nav-item" href="/login">
                                    <span class="meta dropdown-link">Login</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="nav-item" href="/register">
                                    <span class="meta dropdown-link">Register</span>
                                </a>
                            </li>

                        @else

                        <li class="">
                            <a href="{{ url('/logout') }}"  class="nav-item"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="meta dropdown-link">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                            <li class="">
                                <a class="nav-item" href="/settings">
                                    <span class="meta dropdown-link">Settings</span>
                                </a>
                            </li>

                        @endif

                        @permission('edit-site')

                        <li class="">
                            <a class="nav-item" href="/admin">
                                <span class="meta dropdown-link">Manage</span>
                            </a>
                        </li>

                        @endpermission

                        </ul>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <nav id="global-nav" class="mob-pad-b-huge">

        <div id="nav-sections-wrap" class="row bg-white">
            <ul role="menubar" class="center justify-c align-m">

                <li class="nav-section nav-diff block float-l border-r">
                    <a class="clearfix nav-item" href="/">
                        <span class="meta">Home</span>
                    </a>
                </li>

                <li class="nav-section nav-diff block float-l border-r">
                    <a class="clearfix nav-item" href="/music">
                        <span class="meta">Music</span>
                    </a>
                </li>

                <li class="nav-section nav-diff block float-l border-r">
                    <a class="clearfix nav-item" href="/articles">
                        <span class="meta">Articles</span>
                    </a>
                </li>

                <li class="nav-section nav-diff block float-l border-r">
                    <a class="clearfix nav-item" href="/events">
                        <span class="meta">Events</span>
                    </a>
                </li>

                <li class="nav-section nav-diff block float-l">
                    <a class="clearfix nav-item" href="/about">
                        <span class="meta">About</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

</header>