<div class="container-fluid">
    @section('page-title', $page_title)
    <div class="row">
        <!-- Kolom untuk gambar latar belakang -->
        <div class="col-md-6 d-none d-md-block" style="
            background-image: url('{{ url('assets/images/frame.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin-left: -15px;
        ">
            <!-- Tidak ada konten di sini -->
        </div>
        <!-- Kolom untuk konten -->
        <div class="col-md-6">
            <div class="d-flex flex-column justify-content-center align-items-center h-100 p-5">
                <div class="login login-4 login-signin-on">
                    <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat">
                        <div class="login-form text-center p-7 position-relative overflow-hidden mb-40">
                            <!--begin::Login Header-->
                            <div class="d-flex flex-center mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo-main.png') }}" class="max-h-75px" alt="" />
                                </a>
                            </div>
                            <!--end::Login Header-->
                            <!--begin::Login Sign in form-->
                            <div class="login-signin">
                                <div class="mb-20">
                                    <h1>Login Custom Report</h1>
                                    <p>Ayo masuk ke akun anda sekarang!</p>
                                    {{-- <h3 class="text-muted">Sign In</h3>
                                    <div class="text-muted font-weight-bold">Enter your details to login to your account:</div> --}}
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-5">
                                        <input class="form-control @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8" type="email"
                                            value="{{ old('email') }}" placeholder="Email" name="email" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <input class="form-control @error('password') is-invalid @enderror h-auto form-control-solid py-4 px-8" id="password"
                                        type="password" placeholder="Password" name="password"  required autocomplete="current-password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="checkbox-inline">
                                            <label class="checkbox m-0 text-muted">
                                            <input type="checkbox" name="remember" />
                                            <span></span>Remember me</label>
                                        </div>
                                        <a href="{{ route('password.request') }}" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
                                    </div>
                                    <button type="submit"  class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">{{ __('Login') }}</button>
                                </form>
                            </div>
                            <!--end::Login Sign in form-->
                            <!--begin::Login forgot password form-->
                            <div class="login-forgot">
                                <div class="mb-20">
                                    <h3>Forgotten Password ?</h3>
                                    <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                                </div>
                                <form class="form" id="kt_login_forgot_form">
                                    <div class="form-group mb-10">
                                        <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!--end::Login forgot password form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
