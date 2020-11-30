<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} | Welcome</title>
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
                <div class="row w-100 justify-content-center">
                    @foreach(auth()->user()->departments as $department)
                        <div class="card col-md-4 text-center mb-3 mx-3">
                            <div class="card-body">
                                <a href="{{ route('start', $department->slug) }}" class="d-block">
                                    <img src="{{ $department->logo() }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('start', $department->slug) }}" class="d-block">
                                    <h3>{{ $department->name }}</h3>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
