<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ URL::to('/') }}"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('profil/gandi') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                    	<a href="{{ route('Profile.formsederhana') }}"><i class="fa fa-fw fa-edit"></i>Form Sederhana</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('crud')}}"><i class="fa fa-fw fa-edit"></i>CRUD Builer</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                </ul>
</div>