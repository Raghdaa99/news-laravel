<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="{{asset('../css/style-menu.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('../css/responsive.css')}}" rel="stylesheet" type="text/css" />
<div class="no-padding">
    <div class="large-2 medium-12 small-12 columns">
        <div id="block_navigation">
            <ul class="navigation">
                <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="{{route('category.index')}}"><i class="fa fa-home"></i> Category</a></li>
                <li><a class="active" href="{{route('post.index')}}"><i class="fa fa-cubes"></i> Manage Posts</a></li>
                <li><a class="active" href="{{route('user.index')}}"><i class="fa fa-cubes"></i> Manage admins</a></li>
                <li><a class="active" href="{{route('comment.index')}}"><i class="fa fa-cubes"></i>Comments</a></li>

            </ul>
        </div>
    </div></div>
