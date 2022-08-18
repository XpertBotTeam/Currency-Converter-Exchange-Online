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
    <!-- FOR NAVBAR STYLING -->
    <script src="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/js/okta-sign-in.min.js" type="text/javascript"></script>
    <link href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/css/okta-sign-in.min.css" type="text/css" rel="stylesheet"/>
    <link href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/css/okta-theme.css" type="text/css" rel="stylesheet"/>
 <!--   -->

  <!-- Title of the document  -->
    <title>@yield('Currency-Exchange')</title>
    <!--   -->

</head>
<body>
<section>
<center>
    <nav class="navbar navbar-expand-lg bg-black" style="padding-left: 50px;">
      
      <div class="container-fluid">
        
        <a style=" margin-left: -88%;"href="/contact"><img  class id="img" src="https://img.freepik.com/premium-photo/blockchain-market-usd-currency-concept-with-blue-glowing-digital-dollar-symbol-abstract-technological-backdrop-with-world-map-waving-lines-3d-rendering_670147-524.jpg?size=626&ext=jpg"width="96"height="65"> 
        </a>
        <a style="padding-bottom: 20px; padding-left: 500px"
        class="navbar-brand" href="/home">
        <b style="padding-top: 5px"><u style="border-bottom: 3px double"><em>Currency-Exchange</em></u></b>
        </a>

          <div>
            <ul class="navbar-nav" style="padding: 10px;padding-top:40px">

              <center>
             
                <a style="padding-left: 30px" class="nav-link active" aria-current="page" href="/home"><u>Dashboard- Overview</u></a>
              
                <a style="padding-left: 30px;" class="nav-link" href="/Crypto"><u>Crypto Online Values</u></a>

                <a style="padding-left: 30px" class="nav-link" href="/ConverterAPP"><u>Converter-APP</u></a>
              
                <a style="padding-left: 30px" class="nav-link" href="/LineChart"><u>Crypto-Line-Chart</u></a>
              
                <a style="padding-left: 30px" class="nav-link" href="/Goldview"><u>Gold-Price</u></a>
              
                <a style="padding-left: 30px" class="nav-link" href="/contact"><u>Contact US</u></a>

                <a style="padding-left: 30px;" class="nav-link active" aria-current="page" href="/"><u>Sign-Out</u></a>
                
              </center>

            </ul>
          </div>
      </div>
    </nav>
@yield('content')


</center>
</section>
</body>
</html>