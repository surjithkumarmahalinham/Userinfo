@include('header')   
    <header class="foi-header landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> 
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                    <div class="container">
                        <div class="main-body">
                        
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb" class="main-breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('view.home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$user->username}}</a></li>
                                </ol>
                            </nav>
                            <!-- /Breadcrumb -->
                            <h6 class="mb-0"><span class="badge badge-success">User Detail</span></h6>
                            <div class="row gutters-sm">
                                
                                <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">UserId</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->username}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->username}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">First Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->first_name}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Last Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->last_name}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->email}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                        </div>
                                        <div class="col-sm-9 text-success">
                                        {{$user->mobile}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <a class="btn btn-info " onclick="window.print();"><i class="fa fa-print"></i> Print</a>
                                        <a class="btn btn-warning" href="{{url('pdf-download')}}"><i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                             </div>
                            </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@include('footer')