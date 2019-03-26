<nav id="sidebar">
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{url('/home')}}">Dashboard</a>
        </li>
        <li>
            <a href="#UsersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Users</a>
            <ul class="collapse list-unstyled" id="UsersSubmenu">
                <li>
                    <a href="{{url('admin/users')}}">All Users</a>
                </li>
                <li>
                    <a href="{{url('/create/user')}}">Create User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#postsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Posts</a>
            <ul class="collapse list-unstyled" id="postsubmenu">
                <li>
                    <a href="{{route('all')}}">View All Posts</a>
                </li>
                <li>
                    <a href="{{route('create')}}">Create Post</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#categoriesubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
            <ul class="collapse list-unstyled" id="categoriesubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#mediasubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Media</a>
            <ul class="collapse list-unstyled" id="mediasubmenu">
                <li><a href="#">All Media</a></li>
                <li><a href="#">Upload Media</a></li>
            </ul>
        </li>
        <li>
            <a href="#chartsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Charts</a>
            <ul class="collapse list-unstyled" id="chartsubmenu">
                <li><a href="#">page one</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Tables</a>
        </li>

        <li>
            <a href="#">forms</a>
        </li>
    </ul>


    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>
</nav>