<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel =
        <?php echo json_encode([
                       'csrfToken' => csrf_token(),
               ]); ?>
    </script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700" rel="stylesheet">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Bootstrap and other components -->
    <link href="{{asset('/assets/css/app.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="@yield('bodyClass')">

@include('partials.header')

@yield('main')

@include('shared.modals.login')

<div id="loader"></div>
<!-- Scripts -->
<script src="/js/all.js"></script>
</body>
</html>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
