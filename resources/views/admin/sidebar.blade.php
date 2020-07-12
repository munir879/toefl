<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">toefl Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        data master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @auth("admin")

    <li class="nav-item  {{ Request::is('test') || Request::is('test/*')  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-cog"></i>
            <span>Admin</span>
        </a>
        <div id="collapse1" class="collapse {{ Request::is('test') || Request::is('test/*')  ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom User:</h6> -->
                <a class="collapse-item {{ Request::is('test') || Request::is('test/*')  ? 'active' : '' }}" href="/test">Input Test</a>
                <a class="collapse-item" href="/questions">Questions</a>
                <a class="collapse-item" href="/articles">Articles</a>
            </div>
        </div>
    </li>

    <li class="nav-item  {{ Request::is('setting') || Request::is('setting/*')  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapse2" class="collapse {{ Request::is('setting') || Request::is('setting/*')  ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom User:</h6> -->
                <a class="collapse-item {{ Request::is('setting/account')  ? 'active' : '' }}" href="{{route('admin.account')}}">Account</a>
                <a class="collapse-item" href="/questions">Questions</a>
                <a class="collapse-item" href="/articles">Articles</a>
            </div>
        </div>
    </li>

    @endauth
    <!-- Nav Item - Pages Collapse Menu -->
    @auth("member")


    <li class="nav-item {{ Request::is('member/test') || Request::is('member/test/*')  ? 'active' : '' }}">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
            <i class="fas fa-fw fa-user"></i>
            <span>Members</span>
        </a>
        <div id="collapse2" class="collapse {{ Request::is('member/test') || Request::is('member/test/*') ? 'show' : '' }}" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom User:</h6> -->
                <a class="collapse-item {{ Request::is('member/test') || Request::is('member/test/*') ? 'active' : '' }}" href="{{route('member.test')}}">Tests</a>
                <a class="collapse-item" href="/score">Scores</a>
            </div>
        </div>
    </li>

    @endauth



</ul>
