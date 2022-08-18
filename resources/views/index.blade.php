@extends('layouts.master')
@section('title','Home')
@section('content')


<div class="circle">
        <center>
          <i><img class id="img"
          src="https://images.pexels.com/photos/534216/pexels-photo-534216.jpeg?auto=compress&cs=tinysrgb&w=600" width="50%" height="250" alt="LOGOWEB">
          </i>
        </center>
      </div>
        <section  id="Start">
        <center>
          <h1 style="font-size: 40px; padding:40px;"><b><u>Welcome To Currency Exchange</u></b></h1>
          <h1>Real-Time, Accurate & Reliable Data for Crypto and Country Currencies over 165+ World<br>according to <u style=" border-bottom: 3px double">US DOLLAR CURRENCY</u></h1>
        <h3 style="padding:40px;"> <u>Lastly Updated:</u> <u>Date-Month-year-Time:</u> <span id="time"> </span></h3>
    <script src="js/time.js"></script>
    </center>
        </section>


@endsection