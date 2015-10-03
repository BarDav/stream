<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stream</title>
    <meta id="token" value="{{ csrf_token() }}" />
    <link href="{{ elixir('css/app.css') }}" type="text/css" rel="stylesheet" />
    @yield('styles')
</head>
<body>
    @include('layouts.partials.top-menu')

    <div class="container">
        <div class="jumbotron">
            @yield('content')
        </div>
    </div> <!-- /container -->

    <script type="text/javascript" src="{{ elixir('js/jqBoot.js') }}"></script>

    @yield('scripts')
</body>
</html>