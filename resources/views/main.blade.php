<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <title>Laravel</title>
    <style>
    </style>
    <script type="text/javascript">
        window.__INITIAL_STATE__ = "{!! addslashes(json_encode($state)) !!}";
    </script>
</head>
<body>
<div id="app">
    <common-main/>
</div>
<script src="{{ mix('js/jean/app.js') }}" type="text/javascript"></script>
</body>
</html>
