@include('header')
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible show">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="auth-section-title">Create account</h2>
                                <p class="auth-section-subtitle">Create your account to continue.</p>
                                <form method="POST" action="{{route('register.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">First Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Mobile <sup>*</sup></label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password <sup>*</sup></label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/Register.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@include('footer')