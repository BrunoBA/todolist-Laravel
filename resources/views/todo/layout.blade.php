<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Todo List | LARAVEL</title>      
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="alert alert-success" style="display: none;"></div>
                <div class="alert alert-danger" style="display: none;"></div>
            </div>
            <div class="header clearfix">
                <h3 class="text-muted">Todo List</h3>
                <hr>
            </div>
            @yield('lista')
        </div>
        <script src="/js/activities.js"></script> 
    </body>
</html>
