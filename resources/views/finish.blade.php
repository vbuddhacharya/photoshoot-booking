<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">
    <title>Confirmed</title>
</head>
<body>
    @include('layouts.nav')
    <main>
        <div class="con-sec">
            <div class="details">
                <img src="{{asset('/images/gallery/misc9a.jpg')}}" alt="" style="width: 100%">
                <div class="cent">
                    
                    <div class="confirm-img"><img src="{{asset('/images/logo/logo3.png')}}" alt=""></div>
                </div>
            </div>
            <div class="det">
                <div class="date"> <span class="d">{{$booking->date}}</span><span class="e">Event: {{$booking->service->service_name}}</div>
                <div class="confirm-text">Booking Successful!</div>
                <div class="confirm-text">Awaiting Payment for Confirmation!</div>
                @if(Auth::check() && Auth::user()->isAdmin==0)
                <div class="view"><a href="{{route('user.bookings')}}">View Your Bookings</a></div>
                
                <div class="note">Note: Please contact <a href="https://www.facebook.com/ujwol.chandrabuddhacharya/">here</a> for advance payment and further discussion.</div>
                @endif
            </div>
            
            
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>