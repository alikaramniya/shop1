<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="{{ route('home') }}">
                    <i class="icon-dashboard"></i>
                    <span>صفحه اصلی</span>
                </a>
            </li>
            <x-sidebar-item title="محصولات" subTitles='{
                     {{ route("home") }} : "item1", 
                     "index2.html" : "item2", 
                     "index3.html" : "item3"
                }' />
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
