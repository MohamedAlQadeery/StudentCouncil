<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="nav-item start">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.user')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('user.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.show users') </span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="nav-item start">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.departments')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('department.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.show departments') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href="{{route('department.create')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.create department') </span>
                    </a>
                </li>

            </ul>
        </li>


    </ul>
    <!-- END SIDEBAR MENU -->
</div>