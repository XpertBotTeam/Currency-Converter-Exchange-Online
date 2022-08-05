<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.js" integrity="sha512-/MqITtqQfmjLnDtBC8yxrsERbn3dvqyxtc1B/3x57xp+J3srVBcgyr9VXgDj8BYScxSJ9MauIMY7F9Fr2TJHkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- CSS STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="/css/styles.css"> 
    <link rel="stylesheet" href="/css/cryptostyle.css"> 
    
<!-- End of styling CSS -->
    <!-- For Gold -->
    <script type="text/javascript" src="https://www.bullionvault.com/banners/live_price_widget.js"></script>
    <!--   -->
    <title>@yield('Currency-Exchange')</title>
    <!--   -->
</head>
<body>
<center>
    <nav class="navbar navbar-expand-lg bg-black" style="padding-left: 30px">
      
      <div class="container-fluid">
        <a style="padding-top: 50px; padding-left: 500px"
        class="navbar-brand" href="/">
        <b><em>Currency-Exchange</em></b>
        </a>
          <div>
            <ul class="navbar-nav" style="padding: 50px">
              <li class="nav-item" style="padding: 30px">
                <a class="nav-link active" aria-current="page" href="/Home">Over-View</a>
              </li>
              <li class="nav-item"style="padding: 30px">
                <a class="nav-link" href="/Crypto">Crypto Online Values</a>
              </li>
              <li class="nav-item"style="padding: 30px">
                <a class="nav-link" href="/ConverterAPP">Converter-APP</a>
              </li>
              <li class="nav-item"style="padding: 30px">
                <a class="nav-link" href="/LineChart">Crypto-Line-Chart</a>
              </li>
              <li class="nav-item"style="padding: 30px">
                <a class="nav-link" href="/Goldview">Gold-Price</a>
              </li>
              <li class="nav-item"style="padding: 30px">
                <a class="nav-link" href="/contact">Contact US</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
@yield('content')




</body>
</html>