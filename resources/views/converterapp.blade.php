@extends('layouts.master')
@section('title','ConverterAPP')
@section('content')


    <body style="padding-top: 50px;">
        <section id="section">
            <div class="wrapper">
              <header>Currency Converter</header>
              <form action="#">
                <div class="amount">
                  <p>Enter Amount</p>
                  <input type="text" value="1">
                </div>
        
                <div class="drop-list">
                  <div class="from">
                    <p>From</p>
                    <div class="select-box">
                      <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                      <select> <!-- Options tags are used from JavaScript --> </select>
                    </div>
                  </div>
                  <div class="icon"><i class="fas fa-exchange-alt"></i></div>
                  <div class="to">
                    <p>To</p>
                    <div class="select-box">
                      <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                      <select> <!-- Options tag are inserted from JavaScript --> </select>
                    </div>
                  </div>
                </div>
        
                <div class="exchange-rate">Getting exchange rate...</div>
                <button>Get Exchange value Rate</button>
              </form>
            </div>
        
    <script src="/js/country-list.js"></script>
    <script src="/js/script.js"></script>
        
          </section>
        </body>
@endsection