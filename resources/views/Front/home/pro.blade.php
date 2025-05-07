@extends('Front.layouts.app')
@section('title') @lang('app.app-description') @endsection
@section('content')
<div class="d-flex justify-content-center" style="margin-top: 150px;">
<video
    id="my-video"
    class="video-js"
    controls
    width="1250"
    height="600"
    preload="auto"
    poster="{{asset('img/Realtor.jpg')}}"
    data-setup="{}"
  >
  <source src="{{asset('img/video.mp4')}}" type="video/mp4" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="{{asset('video.mp4')}}" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
</div>
<div class="container-xxl text-center">

<div class="h1 my-3">
"Estate-agency PRO" Home page
</div>
<img class="img-fluid" src="{{asset('img/pro/1.png')}}" alt="">
<img class="img-fluid" src="{{asset('img/pro/2.png')}}" alt="">
<img class="img-fluid" src="{{asset('img/pro/3.png')}}" alt="">
<img class="img-fluid" src="{{asset('img/pro/4.png')}}" alt="">

<div class="h1 my-3">
"Estate-agency PRO" Dashboard page
</div>
<img class="img-fluid" src="{{asset('img/pro/5.png')}}" alt="">

<div class="h1 my-3">
About Pro version of estate agency
</div>
<p class="fs-4">The Estate-agency PRO version name is Realtor and the website has own private logo that designed by Atamyrat in this website not only estates or estate agents also has service providers. The website can change background theme dark and light or auto choose your browsers or devices bacground theme and this website more responsive and dynamic. In PRO version website users after register can add estate and service. The users have statuses and there are "Start-up", "Professional" and "Enterprise". Start-up is free they can post only 5 posts. Professionals they can post 20 posts and professionals posts automatically adding to VIP post that ordering in first place and top-right automatically appears badge that Premium with yellow color and finally Enterprise users they can post infinity posts and they posts are ordered first all other posts and this also appears top-right  automatically badge that Premium with yellow color and admin first checks and answers the enterprise users and after checks professional users and finally checks start-up users posts. *If you want know more about this PRO version site you can watch video in the website and can contact with me* @Atamyrat2005
</p>

<img class="img-fluid" width="500" src="{{asset('img/Realtor.png')}}" alt="">
<div class="h1">
            <i class="bi bi-github"></i> <a class="color-a" href="https://github.com/Atamyrat2005">Atamyrat2005</a><br>
            <i class="bi bi-envelope-fill"></i> <a class="color-a" href="mailto:shukurovatamyrat@gmail.com">shukurovatamyrat@gmail.com</a><br>
            <i class="bi bi-link"></i> <a class="color-a" href="https://atamyrat2005.github.io/">Atamyrat</a><br>
        </div>
</div>
@endsection