<header class="header">
	<div class="logo-container">
		<a href="{{route('home')}}" class="logo">						
			<img src="{{asset('public/admin/img/logo.png')}}" width="75" height="35" alt="Porto Admin" />				
		</a>					
		<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">						
			<i class="fas fa-bars" aria-label="Toggle sidebar"></i>					
		</div>
	</div>

	<!-- start: search & user box -->
	<div class="header-right">


		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<div class="profile-info" >
					<span class="name">{{Auth::user()->name}}</span>
					<span class="role">administrator</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled mb-2">
					<li class="divider"></li>
					{{-- <li>
						<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
					</li> --}}
					<li>
						<a role="menuitem" tabindex="-1"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i>
                              {{ __('Logout') }}
                         </a>
                         <a href="{{route('create.profile')}}">
                         	<i class="fas fa-user"></i>
                              Profile
                         </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>