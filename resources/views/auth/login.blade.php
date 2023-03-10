<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Admin</title>
    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        <h1>LINEAR REGRESSION</h1>
                    </a>
                </div>
                <form class="card card-md" method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login to your account</h2>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"  placeholder="Password" id="password" name="password" required autocomplete="current-password">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password" onclick="showPassword()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                    </a>
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </div>
                    <div class="hr-text">or</div>
                    <div class="card-body">
                        <div class="text-center text-muted mt-3">
                            Back to ? <a href="{{url('/')}}" tabindex="-1">linear regression web</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>
        <script src="{{asset('assets/dist/js/custome.js')}}"></script>
  </body>
</html>
