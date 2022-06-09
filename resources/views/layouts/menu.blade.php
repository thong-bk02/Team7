<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.user') }}" class="nav-link {{ Request::is('admin/personnel') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-users"></i>
        <p>Quản lí nhân sự</p>
        
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.departments') }}" class="nav-link {{ Request::is('admin/departments') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-city"></i>
        <p>Quản lí phòng ban</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.timekeeping') }}" class="nav-link {{ Request::is('admin/timekeeping') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-calendar-plus"></i>
        <p>Quản lí chấm công</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.fine') }}" class="nav-link {{ Request::is('admin/fine') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-sack-xmark"></i>
        <p>Quản lí tiền phạt</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.bonus') }}" class="nav-link {{ Request::is('admin/bonus') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-sack-dollar"></i>
        <p>Quản lí thưởng</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.salary') }}" class="nav-link {{ Request::is('admin/salary') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
        <p>Quản lí tiền lương</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.calender') }}" class="nav-link {{ Request::is('admin/calendar') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-calendar-days"></i>
        <p>Lịch làm việc</p>
    </a>
</li>
<li class="nav-item">
    <a href="" class="nav-link {{ Request::is('admin/products') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-key"></i>
        <p>Đổi mật khẩu</p>
    </a>
</li>
