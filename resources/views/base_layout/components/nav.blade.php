<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="nav-item start active open">
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
        <ul class="sub-menu">
            <li class="nav-item start ">
                <a href="{{route('admins.create')}}" class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">@lang('lang.Create Admin') </span>
                </a>
            </li>
            <li class="nav-item start ">
                <a href="{{route('admins.index')}}" class="nav-link ">
                    <i class="icon-bulb"></i>
                    <span class="title">@lang('lang.All admins') </span>
                </a>
            </li>

        </ul>
        </li>
        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">@lang('lang.South section ')</span>

                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('south.index')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.south details') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href="{{route('south.create')}}" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">@lang('lang.Add descreption') </span>
                    </a>
                </li>

                <li class="nav-item start ">
                    <a href={{--we add the activity create rout here--}}class="nav-link ">
                    <i class="icon-bar-chart"></i>
                    <span class="title">@lang('lang.Add new activity') </span>
                    </a>
                </li>

            </ul>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>