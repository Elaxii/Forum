<html>
  <head>
      <title>Forum - @yield('title')</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link rel="alternate" hreflang="nl" href="{{ env('APP_URL', '') }}"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <meta name="keywords" content="">
      <meta property="og:url" content="{{ env('APP_URL', '') }}"/>
      <link rel="canonical" href="{{ env('APP_URL', '') }}"/>
      <meta property="og:type" content="Forum"/>
      <meta property="og:site_name" content=""/>
      <meta itemprop="name" content=""/>
      <meta itemprop="url" content="{{ env('APP_URL', '') }}"/>
      <meta name="twitter:title" content=""/>
      <meta name="twitter:url" content="{{ env('APP_URL', '') }}"/>
      <meta name="twitter:card" content=""/>
      <meta property="og:title" content=""/>
      <meta property="og:description" content=""/>
      <meta property="og:image" content=""/>
      <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

      <!-- CSS -->
      <link href="{{ asset('public/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  </head>

      
  <body>

      @yield('content')

  </body>
</html>