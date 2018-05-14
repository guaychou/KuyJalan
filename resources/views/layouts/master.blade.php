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
<style>

    .centered{
        left : 6cm;
    }
    .image{
        width : 40px;
        height : 40px;
        si
    }
    .ui.menu{
        background: #4545FF  ;
    }
    header{
        position: fixed;
        width: 100%;
    }
</style>
<body>

<header ><div class="ui menu">
  <a class="item">
    <i class="large home icon"></i>
  </a>
  
    <img src="facebook.png" class="ui centered image" alt="" >

  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input placeholder="Search..." type="text">
        <i class="search link icon"></i>
      </div>
    </div>
    <a class="ui item ">
    <i class="white large user circle icon"></i>
    </a>
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