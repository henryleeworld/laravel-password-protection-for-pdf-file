<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="A simple HTML5 Template for new projects." />
        <meta name="author" content="SitePoint" />
        <meta property="og:title" content="A Basic HTML5 Template" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="A simple HTML5 Template for new projects." />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>body { font-family:  'hanwangming light'; } </style>
    </head>
    <body>
        <div class="container-fluid">
            <p>{{ __('We\'re so happy you\'re here.') }}</p>
        </div>
    </body>
</html>
