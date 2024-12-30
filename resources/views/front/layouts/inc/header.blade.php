<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        position: absolute;
        left: 100%;
        top: 0;
        margin-left: 0.1rem;
        display: none;
        /* Initially hidden */
    }

    .dropdown-submenu:hover .dropdown-menu {
        display: block;

        /* Show submenu on hover */
    }
</style>

<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-center">
            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Me</a></li>

                    <!-- Dynamically Rendered Categories -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu">
                            @foreach ($categories as $category)
                                <div class="dropdown-item dropdown-submenu">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">{{ $category->category_name }}</a>
                                    <div class="dropdown-menu">
                                        @foreach ($category->subcategories as $subcategory)
                                            <a class="dropdown-item" href="{{ url('category/' . $subcategory->slug) }}">
                                                {{ $subcategory->subcategory_name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Right-aligned and centered logo -->
            <div class="centerit d-flex justify-content-center align-items-center ml-auto">
                <a class="navbar-brand py-0" href="/">
                    <img loading="preload" decoding="async" class="img-fluid" src="{{ blogInfo()->blog_logo }}"
                        alt="BLOGNJ" style="max-width: 200px">
                </a>
            </div>

            <div class="navbar-actions" style="margin: 50px 0 !important;">
                <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="{{ url('/search') }}" class="search ml-auto">
                    <input id="search-query" name="query" value="codeigniter" type="search" placeholder="Search..."
                        autocomplete="off">
                </form>
            </div>
        </nav>
    </div>
</header>