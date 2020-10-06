<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{!empty($title) ? " {$title} - " : null}} Be the Hero </title>
    <link rel="stylesheet" href="{{url(mix('web/css/styles.css'))}}">
</head>
<body>
<div id="app">
    @yield('content')
</div>

<script src="{{url(mix('web/js/scripts.js'))}}"></script>
</body>
</html>
