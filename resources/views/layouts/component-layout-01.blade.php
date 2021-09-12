<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle', '⚠ I need a Title please.')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="bg-gray-300 m-5 p-5 rounded-xl w-1/3">
            <h1>This content is in the body of the layout file.</h1>
        </div>
    </div>
    <script src="{{ asset('js/local.js') }}"></script>
</body>

</html>
