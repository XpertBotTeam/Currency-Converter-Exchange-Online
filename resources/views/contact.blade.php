@extends('layouts.master')
@section('title','Follow Us')
@section('content')


<section style="padding-bottom: 90px; padding-bottom: 100px;">
   <h2 class="h2a" style="padding-top: 68px; color:darkturquoise;"><a target="blank" href="https://github.com/waledoss"><b><em><u style="color: darkturquoise;">@waledoss We are happy to find you here!</u></em></b></a></h2>
 <span>
 <div class="row social" align="center">
   <a target = "blank" href = 'https://www.twitch.tv/settings/profile'><i class="fab fa-twitch"></i></a>
   <a target = "blank" href = 'https://www.youtube.com/channel/UCkXeMbNBV2rEuMtbeEMNtbA'><i class="fab fa-youtube"></i></a>
   <a target = "blank" href='https://www.facebook.com/walid.kinaan.50/'><i class='fab fa-facebook'></i></a>
   <a target = "blank" href='https://www.instagram.com/_walid_kinaan_/'><i class='fab fa-instagram'></i></a>
   <a target="blank" href="https://social.tchncs.de/web/@walidkinaan"><i class="fab fa-mastodon"></i></a>
   <a target="blank" href="https://discord.com/channels/@me"> <i class="fab fa-discord"></i></a>
 </div>
 
 </span>  

 <span style="height: auto">
  <p style="margin-right: 960px;color:rgb(220, 26, 226)">
  <u>Interesting API'S You Might Like!</u> 
  </p>
  <p style="padding-right: 500px;padding-top:5px"><a href="/api/ser">Click! For more Update view with the supported Cryptocurrencies
  </a></p>
  <p style="margin-right: 700px">
  <a style="color: green" href="/api/Hostor"> Click! For more historical Currency Data  
    </a></p>
    <p style="margin-right: 700px"><a href="/api/ava"> Click! For more viewing the Supported Cryptocurrencies! 
    </a></p>
  <p style="margin-right: 700px;color: red"><u style="color: red"> Note: </u> Don't forget to Subscribe to get all the view that is waiting you, to start tracking!
  <a href="https://rapidapi.com/natkapral/api/currency-converter5/pricing"> Follow this link for Subscription
    </a></p>
  </span>
 </section>
<script src="/js/helpful.js"></script>

@endsection