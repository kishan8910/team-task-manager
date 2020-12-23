<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>

        <title>Swansea Tasks</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div id="app">
            <navbar>
            </navbar>
            <div class="container">
                <tasks>
                </tasks>
            </div>
            
        </div>
    </body>
    
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="{{ asset('js/app.js') }}">
    </script>
</html>
