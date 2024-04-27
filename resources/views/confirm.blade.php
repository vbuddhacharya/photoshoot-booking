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
    <title>Confirmation</title>
</head>
<body>
    <header></header>
    @include('layouts.nav')
    <main>
        <div class="main-sec">
            <div class="ban">
                <img src="{{asset('images/gallery/chk1.jpg')}}" alt="">
            </div>
            <div class="book-title">Booking Confirmation</div>
            <div class="cform">
                <form action="{{route('booking.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col1">
                            <label for="date"><span class="name">Date:</span><input type="text" id="date" name="date" value="{{$values['date']}}" readonly></label>
                        </div>
                        <div class="col2">
                            <label for="client"><span class="name">Name:</span><input type="text" id="client" name="name" value="{{$values['name']}}" readonly></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            <label for="event"><span class="name">Event:</span><input type="text" id="event" name="event" value="{{$values['event']}}" readonly></label>
                        </div>
                        <div class="col2">
                            @if($values['package'] !="0")
                            <label for="package"><span class="name">Package:</span><input type="text" name="package" value="{{$values['package']}}" readonly></label>
                            @else
                            <input type="hidden" name="package" value="{{$values['package']}}" hidden>
                        @endif    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            <label for="time"><span class="name">Time:</span><input type="text" name="time" value="{{$values['time']}}" readonly></label>

                        </div>
                        <div class="col2">
                            <label for="contact"><span class="name">Contact:</span><input type="text" name="con" value="{{$values['con']}}" readonly></label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            <label for="num"><span class="name">People:</span><input type="text" name="num" value="{{$values['num']}}" readonly></label>

                        </div>
                        <div class="col2">
                            <label for="num"><span class="name">Location:</span><input type="text" name="loc" value="{{$values['loc']}}" readonly></label>

                        </div>
                    </div>
                    <div class="payments">
                        <label for="num" style="display: block"><span class="name" style="margin-bottom: 7px">Advance Payment:</span><input type="text" name="adv" value="{{$values['advance']}}" readonly></label>
                        <label for="num" style="display: block"><span class="name" style="margin-top: 7px">Total Payment:</span><input type="text" name="total" value="{{$values['total']}}" readonly></label>
                        @if($values['event']=="Others")<span class="txt">Total Payment may vary depending on nature of the event.<br></span>@endif
                        <span class="txt">Note: Advance payment must be done at least a week before the event.</span>
                    </div>
                    <input type="hidden" name="user" value="{{Auth::user()->id}}">
                    <input type="hidden" name="wholeday" value="{{$values['wholeday']}}">
                    <div class="buttons">
                        <button type="submit" name="action" value="confirm">Confirm</button>
                        <button type="submit" name="action" value="cancel">Cancel</button>
                    </div>
                </form>
            </div>
            
        </div>
        
    </main>
    @include('layouts.footer')
</body>
</html>