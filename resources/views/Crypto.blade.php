@extends('layouts.master')
@section('title','Crypto')
@section('content')

<body>
    <!-- Welcome to First Start of Code -->
    <!-- end of showing the welcome page -->
    
    <!-- Currency Converter application according to countries currenceis -->
    
    
    <!-- END OF THE CURRENCY CONVERTER ACCORDING TO COUNTREIS -->
    
    <!-- Showing the table and maps for more knowledge  -->
    
    <section style="background-color: #889; padding-top: 50px;">
        <div class="TableCurrency">
          <center>
            <h1 style="color:black ;">Table of the most Popular Countries that is more <u>Tracked!</u></h1></center><br><h2>
              Fore more information and knowldege follow
              <a href="https://www.cia.gov/the-world-factbook/countries/" target="_blank"><u style=" border-bottom: 3px double">link</u><small>
              </small></a>
            </h2>
      
              <ul class="responsive-table" style="padding-bottom: 21px;">
                <li class="table-header">
                    <div class="col col-1">Country</div><br>
                    <div class="col col-2">Currency Name</div><br>
                    <div class="col col-3">Code A</div><br>      
                    <div class="col col-4">Country Map</div><br>
                </li>
                
                <li class="table-row">
                    <div class="col col-1" data-label="Country"><a href="https://www.cia.gov/the-world-factbook/static/730303882b8328fe4445b5d82cb93151/04372/US-flag.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/730303882b8328fe4445b5d82cb93151/04372/US-flag.jpg" width="80" height="50"></a></div>
                    <div class="col col-2" data-label="Currency Name">	US Dollar </div>
                    <div class="col col-3" data-label="Amount">US</div>
                    <div class="col col-4" data-label="Country Map"><a href="https://www.cia.gov/the-world-factbook/static/f3a248d0fc7e56579d1f75ba68c50d9c/2f1b1/US-map.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/f3a248d0fc7e56579d1f75ba68c50d9c/2f1b1/US-map.jpg" width="80" height="50"></a></div>
                </li>
            
                <li class="table-row">
                    <div class="col col-1" data-label="Country"><a href="https://www.cia.gov/the-world-factbook/static/4549ff777349bed95a24ddd29a1b0493/f0719/CA-flag.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/4549ff777349bed95a24ddd29a1b0493/f0719/CA-flag.jpg"width="80"height="50"></a></div>
                    <div class="col col-2" data-label="Currency Name">Canadian Dollar</div>
                    <div class="col col-3" data-label="Amount">CAD</div>
                    <div class="col col-4" data-label="Country Map"><a href="https://www.cia.gov/the-world-factbook/static/9ec5ab9f09cbf4d85d29a7f935d1ed4e/4c1f1/CA-map.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/9ec5ab9f09cbf4d85d29a7f935d1ed4e/4c1f1/CA-map.jpg" width="80" height="50"></a></div>
                </li>
            
                <li class="table-row">
                    <div class="col col-1" data-label="Country"><a href="https://www.cia.gov/the-world-factbook/static/407aa941afe4e729c1772f81e0e7da3d/25252/CH-flag.jpg"><a href="https://www.cia.gov/the-world-factbook/static/407aa941afe4e729c1772f81e0e7da3d/25252/CH-flag.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/407aa941afe4e729c1772f81e0e7da3d/25252/CH-flag.jpg"weight="80" height="50"></a></div>
                    <div class="col col-2" data-label="Currency Name">Renminbi (Yuan)</div>
                    <div class="col col-3" data-label="Amount">CNY</div>
                    <div class="col col-4" data-label="Country Map"><a href="https://www.cia.gov/the-world-factbook/static/6e1950aa6584fce40c4349744aa3ca26/9eab2/CH-map.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/6e1950aa6584fce40c4349744aa3ca26/9eab2/CH-map.jpg"width="80" height="50"></a></div>
                </li>
            
                <li class="table-row">
                    <div class="col col-1" data-label="Country"><a href="https://www.cia.gov/the-world-factbook/static/110531ff52589564ce31442c67469be4/b11e6/EE-flag.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/110531ff52589564ce31442c67469be4/b11e6/EE-flag.jpg"weight="50" height="50"></a></div>
                    <div class="col col-2" data-label="Currency Name">EURO</div>
                    <div class="col col-3" data-label="Amount">EUR</div>
                    <div class="col col-4" data-label="Country Map"><a href="https://www.cia.gov/the-world-factbook/static/5cd2c829838f7546fc95a27e47f44e99/94b52/EE-map.jpg"><img class id="img" src="https://www.cia.gov/the-world-factbook/static/5cd2c829838f7546fc95a27e47f44e99/94b52/EE-map.jpg"width="80" height="50"></a></div>
                </li>
              </ul>
            
            </div>
    </section>
    
    <!-- End of the PoPULAR Contries according to the table  -->
    
    <!-- Showing the Market Cap accroding to Crypto Currencies -->
    
    <!-- End of the Market Cap!!! -->
    
    <!-- Crypto Currencies Chart showing UP/DOWN -->
    
    <section style="padding-top: 50px;">
        <script>
            alert('API Interface With Crypto Tracking!')
            </script>
    <center>
      <h1 style="color: rgb(16, 220, 192); padding-bottom: 10px;"> <b>The Values <small>of</small> Most Trending Crypto Currencies</b> <a style="color: rgb(16, 220, 192);" href="/morecrypto"><u>For More!</u></a></h1>
      </center>
      <center>
      <container class="container" style=" padding-bottom: 10px;">
        <cards class="cards">
    <!--  BTC CURENCY -->
            <bitcoin style="width: 30%" class="btc">
                <card class="asset-info">
                    <div class="title">
                        <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/btc.svg" width="15%"> 
                        <h1> <small>BTC</small> Bitcoin</h1>
                    </div>
                    <div class="details">
                        <h2 class="asset-price" id="btcPrice"></h2>
                    </div>
                </card>
                <canvas id="btcChart"></canvas>
            </bitcoin>
    <!-- Ethereum CURRENCY -->
            <ethereum style="width: 30%" class="ethereum">
              <card class="asset-info">
                  <div class="title">
                      <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/eth.svg" width="10%"> 
                      <h1> <small>eth</small> Ethereum</h1>
                  </div>
                  <div class="details">
                      <h2 class="asset-price" id="ethPrice"></h2>
                  </div>
              </card>
              <canvas id="ethereumChart"></canvas>
          </ethereum>
    <!-- Atom Currency -->
            <cosmos style="width: 30%" class="cosmos">
                <card class="asset-info">
                    <div class="title">
                        <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/atm.svg" width="15%"> 
                        <h1> <small> ATOM </small> Cosmos</h1>
                    </div>
                    <div class="details">
                        <h2 class="asset-price" id="atomPrice"></h2>
                    </div>
                </card>
                <canvas id="cosmosChart"></canvas>
            </cosmos>
    <!-- END Atom Currency -->
    <!-- LITECOIN Currency -->
            
    <!-- END LITECOIN Currency -->
        </cards>
        <script src="/js/currenciesv.js"></script>
      </container>
      </center>
    </section>
    
    
    <!-- End of Crypto Chart -->
    
    <!-- Showing the price of Gold according to Currencies  -->
    
    
@endsection