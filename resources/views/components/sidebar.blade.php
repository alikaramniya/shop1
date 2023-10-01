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
            <x-sidebar-item title="محصولات" subTitles='{{ route("home") }}:افزودن'/>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
