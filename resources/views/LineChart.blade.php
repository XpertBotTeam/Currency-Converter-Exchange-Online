@extends('layouts.master')
@section('title','LineChart')
@section('content')

<section style="background-color: whitesmoke;">
    <center>
    <h1 style="padding-top: 60px; color: rgba(255, 99, 132, 0.6);"><u>Line Chart Showing Market Cap ($billions) for Crypto</u></h1>
    </center>
    <center>
    <div class="container"> 
      <canvas id="myChart" width="450" height="200"></canvas>
    </div>
    <script src="/js/cryptochart.js"></script>
    </center>
    </section>

@endsection