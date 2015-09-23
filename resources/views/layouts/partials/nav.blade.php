<div class="container">
	<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            
            @if( ! auth()->user() )  
              <li role="presentation"><a href="/auth/register">Register</a></li>
              <li role="presentation"><a href="/auth/login">Login</a></li>
            @else  
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="/">Dashboard</a></li>
                  @can('add_student')
                    <li role="presentation"><a href="#">Add Student</a></li>
                  @endcan
                  @can('view_users')
                    <li role="presentation"><a href="/users">View Users</a></li>
                  @endcan
                  @can('edit_students_permissions')
                    <li role="presentation"><a href="#">Edit Students Permissions</a></li>
                  @endcan
                  @can('remove_student')
                    <li role="presentation"><a href="#">Remove Student</a></li>
                  @endcan
                  <li role="separator" class="divider"></li>
                  <li role="presentation"><a href="/auth/logout">Logout</a></li>
                </ul>
              </li>

            @endif
          </ul>
        </nav>
        <h3 class="text-muted">LMS</h3>
        <hr>
    </div>
</div>