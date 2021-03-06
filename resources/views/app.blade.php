<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Vitaly Kasymov">
        <meta name="description" content="Đây là trang web quản của đồ sáng tạo dosangtao.vn">

        <title>Tests</title>
        <link rel="shortcut icon" type="image/png" href="https://cdn.onlinewebfonts.com/svg/img_175952.png" width="32" height="32">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/handsontable/7.1.0/handsontable.full.min.css" integrity="sha256-nmaH3Bq6F7njZD0wdBD32m4k5TBxYbx/8NFlcFE5LJQ=" crossorigin="anonymous" />
        <style>
            .blue.darken-2 {
                background-color: #fd5757 !important;
                border-color: #fd5757 !important;
            }
        </style>
        <script>
            window.Laravel = {!! json_encode([
                'siteName' => config('app.name'),
                'siteUrl' => config('app.url'),
                'apiUrl' => config('app.url') . '/api'
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
