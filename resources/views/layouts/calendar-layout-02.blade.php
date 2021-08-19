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

        .calendar-container {
            width: 50%;
            margin: auto;
            background-color: black;
            margin-bottom: 300px;
        }

        /* The grid */
        .dates-grid {
            /* Grid. */
            display: grid;
            /* We need 7 columns for this calendar, which displays the traditional 7 day week. */
            grid-template-columns: repeat(7, 1fr);
            /* Set the height of the rows. */
            grid-auto-rows: 130px;
            /* This is part of the sauce that enables the grid borders without doubling them up in places (Tested in FF). */
            grid-gap: 1px;
            /* We have to ensure that that parent div's background color doesn't come through the table cells. */
            background-color: white;
            /* We need a border for the whole grid if we want it to be visually contained. */
            border: 1px solid black;
            font-size: 1em;
        }

        /* This aligns the first day the month to the correct week day, assuming:
             + There are no empty days (divs) at the beginning.
             + Monday is the first day of the week.
                - Otherwise, the offset will have to take the day of week header into account.     
        */
        .dates-grid :first-child {
            grid-column: 4;
        }

        .dates-grid div {
            outline: 1px solid black;
            /* padding-left: 1em; */
        }


        .dates-grid .date-cell .date-cell-header {
            text-align: center;
            padding: .25em;
            width: 1em;
        }

        .dates-grid .date-cell .date-cell-body {
            padding: .25em;
            outline: none;
            height: auto;
        }

        .dates-grid-header {
            /* Grid. */
            display: grid;
            /* We need 7 columns for this calendar, which displays the traditional 7 day week. */
            grid-template-columns: repeat(7, 1fr);
            /* Set the height of the rows. */
            grid-auto-rows: auto;
            /* This is part of the sauce that enables the grid borders without doubling them up in places (Tested in FF). */
            grid-gap: 1px;
            /* We have to ensure that that parent div's background color doesn't come through the table cells. */
            background-color: white;
            /* We need a border for the whole grid if we want it to be visually contained. */
            border: 1px solid black;
            font-size: 1em;
            margin-bottom: -1px;
        }

        .dates-grid-header div {
            outline: 1px solid black;
            font-size: 1em;
            padding-left: 1em;
        }

        .header {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2em;
            text-align: center;
            padding-bottom: .5em;
            padding-top: .5em;
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            background-color: white;
        }




        .saturday {
            background-color: lightgray;
        }

        .sunday {
            background-color: lightgray;
            color: darkred;
            font-weight: bold;

        }

        .today {
            /* border: 1px dashed darkolivegreen; */
            /* border-radius: 10px; */
            background-color: lightpink;
        }

    </style>
</head>

<body>
    @yield('content')
</body>

</html>
