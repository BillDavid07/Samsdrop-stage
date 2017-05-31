        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <div class="minimalize-styl-2" ><i class="fa fa-search fa-lg"></i></div>
            <form role="search" class="navbar-form-custom" action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search Store" class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Samsdrop - Amazon to EBay product transfer</span> | 
                </li>
                @if (Auth::user())
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <span class="m-r-sm text-muted">{{ Auth::user()->name }}</span> <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <div>
                                    Profile
                                    <span class="pull-right text-muted small">&nbsp;</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}">
                                <div>
                                    Logout
                                    <span class="pull-right text-muted small">&nbsp;</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>

        </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2 class="heading-title">{{ $headingtitle or 'Stores' }}</h2>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle ">View Store <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#" class="font-bold">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>