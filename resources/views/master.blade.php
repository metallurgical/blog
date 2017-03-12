<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">

        <link rel="stylesheet" href="/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="/css/myCss.css">

    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            @include('layout.header.header')

            @include('layout.body.content')

            @include('layout.footer.footer')

        </div>

    </body>

    <script src="/js/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.min.js"></script>

    @stack('scripts')

</html>
