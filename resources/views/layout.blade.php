<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projects</title>

    <!-- Styles -->
    <link href="{{url('/')}}/css/app.css" rel="stylesheet" media="all">
    <link href="{{url('/')}}/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="{{url('/')}}/css/fontawesome.min.css" rel="stylesheet" media="all">
    
    @yield('styles')

</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="{{url('/')}}/js/bootstrap.js"></script>    

@yield('scripts')

</html>
