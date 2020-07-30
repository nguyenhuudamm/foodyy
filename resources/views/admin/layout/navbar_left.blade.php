<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="index.html">
                    <i class="fa fa-home"></i>
                    <span>Hệ Thống</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-list-alt"></i>
                    <span>Danh mục</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.category')}}">Danh Sách</a></li>
                    <li><a  data-toggle="modal" href="#myModal">Thêm</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa  fa-table"></i>
                    <span>Danh mục con</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.category_child')}}">Danh Sách</a></li>
                    <li><a  data-toggle="modal" href="#myModal">Thêm</a></li>
                </ul>
            </li>
           
           
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-list"></i>
                    <span>Danh mục shop</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.category_shop')}}">Danh sách</a></li>
                    <li><a  data-toggle="modal" href="#myModal">Thêm</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th  "></i>
                    <span>Món ăn</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.foods')}}">Danh sách</a></li>
                    <li><a  data-toggle="modal" href="#myModal">Thêm</a></li>
                </ul>
            </li>
            
            <li>
                <a  href="login.html">
                    <i class="fa fa-sign-out"></i>
                    <span>Đăng xuất</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->