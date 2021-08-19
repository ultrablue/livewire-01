<html>
    <head>
        <title>{{ $title ?? '⚠ It looks like you forgot a title!' }}</title>
    </head>
    <body>
        <h1>This is the Layout Component</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>