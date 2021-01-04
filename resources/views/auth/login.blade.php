<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config("app.name", "") }} Login</title>
    <meta name="robots" content="noindex">
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/simplebar.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout"
        data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable"
            style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">
            <div
                class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a href="" class="">
                        <img src="{{ asset('images/logos/emarss.png') }}"
                            style="border-radius: 50%; height: 50px;" alt="logo">
                    </a>
                    <h2 class="ml-2 text-bg mb-0"><strong>Login</strong></h2>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                            <form action="{{ route('login.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input type="text" required=""
                                            class="form-control" name="email" value="">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if(Session::has('invalid_credentials'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('Invalid password or email.') }}</strong>
                                    </span>
                                @endif

                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label>Password</label>
                                    </div>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" required=""
                                            class="form-control" name="password" value="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
