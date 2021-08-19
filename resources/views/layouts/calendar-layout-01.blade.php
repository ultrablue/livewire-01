<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '📅 Oops! forgot to set $title??' }}</title>

    <style>
        body {
            margin-top: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .calendar {
            width: 50%;
            margin: auto;
            background-color: black;
        }

        /* The grid */
        .day-of-week,
        .date-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 1px;
            background-color: white;
        }

        .month-header {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2em;
            text-align: center;
            padding-bottom: .5em;
            /* border-top: 1px solid black; */
            /* border-left: 1px solid black; */
            /* border-right: 1px solid black; */
            background-color: white;
            grid-template-columns: auto;
            grid-gap: 1px;
            display: grid;
        }

        .day-of-week>div {
            text-align: center;
            font-size: 1em;
            /* display: grid; */
            /* grid-gap: 1px; */
            /* background-color: transparent; */
        }

        .date-grid :first-child {
            grid-column: 4;
        }

        .date-grid {
            font-size: 1em;
            grid-template-rows: 100px;
            grid-auto-rows: 100px;
        }

        .date-grid>div {
            outline: 1px solid darkslateblue;
            grid-gap: 1px;
            padding-left: 1em;
            height: 3fr;
        }

        .saturday {
            background-color: lightblue;
        }

        .sunday {
            background-color: lightgreen;
            color: red;
            font-weight: bold;

        }

        .today {
            border: 2px solid darkolivegreen;
            border-radius: 10px;
            background-color: lightpink;
        }

    </style>
</head>

<body>
    @yield('content')
</body>

</html>
