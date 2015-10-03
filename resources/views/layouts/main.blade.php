<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stream</title>
    @section('styles')
        <link href="{{ elixir('css/app.css') }}" type="text/css" rel="stylesheet" />
    @show
</head>
<body>
    @include('layouts.partials.top-menu')

    <div class="container">
        <div class="jumbotron">
            @yield('content')
        </div>
    </div> <!-- /container -->

    @section('scripts')
        <script type="text/javascript" src="{{ elixir('js/jqBoot.js') }}"></script>
    @show
</body>
</html>