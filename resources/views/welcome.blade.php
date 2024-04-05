<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>
        <meta name="description" content="A simple HTML5 Template for new projects." />
        <meta name="author" content="SitePoint" />
        <meta property="og:title" content="A Basic HTML5 Template" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="A simple HTML5 Template for new projects." />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style>body { font-family:  'hanwangming light'; } </style>
    </head>
    <body>
        <div class="container-fluid">
            <p>{{ __('We\'re so happy you\'re here.') }}</p>
        </div>
    </body>
</html>
