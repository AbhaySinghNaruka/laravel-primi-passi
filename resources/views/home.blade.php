<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            body{
                background-color: rgb(79, 79, 79);
                color: rgb(198, 198, 198);
                text-align: center;
                padding-top: 250px;
            }
        </style>
    </head>
    <body>
        <?php
        $name = 'name'
        ?>
        <?php
        $surname = 'surname'
        ?>
        <?php
        $age = '22'
        ?>
        {{ 'Hello World!' }}
        <div>Benvenuto, {{ $name }} {{$surname}}, {{$age}}.</div>
    </body>
</html>
