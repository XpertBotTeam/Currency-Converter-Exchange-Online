@extends('layouts.master')
@section('title','LineChart')
@section('content')

<section style="padding-bottom: 70px;">
    <CENTER>
      <p style="padding-bottom:60px;"><u style="color: red;"><b style="color: red;">BY & SELL</b></u></p>
      <h1> Values of <b style="color: gold;"><u>Gold</u></b>, <b style="color: silver;"><u>Silver</u></b>, and <b style="color: silver;"><u>Platinum</u></b> </h1><br>
      <h1 style="padding-top: 40px;">Currencies offered BY:<b style="color: red;"> USD</b> <b style="color: rgb(255, 123, 0);">GBP</b> <b style="color: blue;">EURO</b></h1>
        <div id="banner1"></div>
        <script type="text/javascript">
            var options = {
                referrerID: "JOHNSMITH101",
                size: "728x90",
                bullion: "gold",
                currency: "EUR",
                weightUnit: "TOZ"
            };
            new BullionVaultPriceWidget('banner1', options);
        </script>
    </CENTER>
</section>
@endsection