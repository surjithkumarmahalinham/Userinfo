@include('header')    
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">OTP Validate</h2>
                                <form method="POST" action="{{ route('otp.valid') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">OTP <sup>*</sup></label>
                                        <input type="hidden" class="form-control" id="email" name="email" value="{{$mail_id}}">
                                        <input type="text" class="form-control" id="otp" name="otp" placeholder="OTP">
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/login.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@include('footer')