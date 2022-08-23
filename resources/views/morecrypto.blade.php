@extends('layouts.master')
@section('title','Cryptot')
@section('content')
<section style="padding-top: 50px;">
    <script>
        alert('API Interface With Crypto Tracking!')
        </script>
<container class="container" style=" padding-bottom: 10px;">
    <cards class="cards">
<!--  Litecoin Value -->
<ltc style="width: 30%" class="">
    <card class="asset-info">
        <div class="title">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuEbsAK-pFxvtpaxjj9S7r1CdLfQMRwOfPqR7D2N8&s" height="13%" width="15%"> 
            <h1><small>ltc</small>Litecoin</h1>
        </div>
        <div class="details">
            <h2 class="asset-price" id="ltcPrice"></h2>
        </div>
    </card>
    <canvas id="ltcChart"></canvas>
</ltc>
<!--  END of Litecoin Value -->
<!--  Litecoin Value -->
<doge style="width: 30%" class="">
    <card class="asset-info">
        <div class="title">
            <img src="https://upload.wikimedia.org/wikipedia/en/d/d0/Dogecoin_Logo.png" height="13%" width="15%"> 
            <h1><small>Doge</small>Dogecoin</h1>
        </div>
        <div class="details">
            <h2 class="asset-price" id="dogePrice"></h2>
        </div>
    </card>
    <canvas id="dogeChart"></canvas>
</doge>
<!--  END of Litecoin Value -->
<!--  Litecoin Value -->
<trx style="width: 30%" class="">
    <card class="asset-info">
        <div class="title">
            <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1958.png" height="13%" width="15%"> 
            <h1><small>TRX</small>TRON</h1>
        </div>
        <div class="details">
            <h2 class="asset-price" id="tronPrice"></h2>
        </div>
    </card>
    <canvas id="tronChart"></canvas>
</trx>
<!--  END of Litecoin Value -->
</cards>
<script src="/js/formore.js"></script>
</container>
</section>
@endsection