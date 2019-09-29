<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cog" aria-hidden="true"></i>
                            <span>Setting</span>
                        </a> 
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('create.basic.setting')}}">Basic Setting</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fab fa-product-hunt" aria-hidden="true"></i>
                            <span>Cetagory</span>
                        </a> 
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('create.catagory')}}">Add cetagory</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard" aria-hidden="true"></i>
                            <span>Post</span>
                        </a> 
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('create.post')}}">Add Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

             <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sort-amount-down" aria-hidden="true"></i>
                            <span>Order</span>
                        </a> 
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('order.list')}}">Order List</a></li>
                        </ul>
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('shift.list')}}">Shift Order List</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
             <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-parent">
                        <a class="nav-link" href="#">

                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span>Message</span>
                        </a> 
                        <ul class="nav nav-children">
                            <li><a class="nav-link" href="{{route('contact.list')}}">Message List</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <hr class="separator" />
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>


    </div>

</aside>