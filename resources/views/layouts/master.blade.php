<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>
</head>
<body>
<header>
<div class="ui menu">
        <a href="#"><div class="home icon"></div></a>
        <div class="right menu">
        <div class="ui category search">
  <div class="ui icon input">
    <input class="prompt" placeholder="Search animals..." type="text">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
        </div>
    </div>
</header>
    <br>

    @yield('content');

    <br>

    <footer>
     &copy : Kuy Jalan
    </footer>
</body>
</html>