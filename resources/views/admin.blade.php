<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>lqwAdmin</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ config('blog.default_icon') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        [v-cloak] { display: none; }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        }

        window.User = {!! Auth::user() !!}

                window.Language = "{{ config('app.locale') }}"
    </script>
</head>
<body>
<div id="app"></div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
