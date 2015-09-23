<div class="container">
	<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            
            @if( ! auth()->user() )  
              <li role="presentation"><a href="/auth/register">Register</a></li>
              <li role="presentation"><a href="/auth/login">Login</a></li>
            @else  
              @can('add_student')
                <li role="presentation"><a href="#">Add Student</a></li>
              @endcan
              
              @can('remove_student')
                <li role="presentation"><a href="#">Remove Student</a></li>
              @endcan
              <li role="presentation"><a href="/auth/logout">Logout</a></li>
            @endif
          </ul>
        </nav>
        <h3 class="text-muted">LMS</h3>
        <hr>
    </div>
</div>