<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '😪 Oops, forgot to set $title??' }}</title>

    <style>
        body {
            margin-top: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #container {
            display: grid;
            grid-template-columns: 150px 1fr 1fr;
            grid-template-rows: 100px auto auto 50px;
            grid-template-areas:
                "header   header    header"
                "nav   section   section"
                "nav   article  article"
                "footer   footer    footer"
            ;
            grid-gap: 1em;
            background: whitesmoke;
        }

        header {
            font-size: 5em;
            grid-area: header;
            background: cornflowerblue;
        }

        nav {
            grid-area: nav;
            background: springgreen;
        }

        section {
            grid-area: section;
            background: lightcoral;
            padding: 1em;

        }

        article {
            grid-area: article;
            background: mistyrose;
            padding: 2em;
        }

        footer {
            grid-area: footer;
            background: peachpuff;
        }

    </style>
</head>

<body>
    @yield('content')
</body>

</html>
