@include('header')   
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                    <div class="container">
                        <div class="main-body">
                            <div class="row gutters-sm">
                                
                                <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
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