<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/booking1.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">
    <title>Booking</title>
</head>
<body>
    <header></header>
    @include('layouts.nav')
    <main>
        <div class="main">
            <div class="picture1">
                <img src="{{asset('images/gallery/sup4.jpg')}}" alt="">
            </div>
            <div class="bform">
                <div class="book-title">Booking Details</div>
                <form action="{{route('booking.verify')}}" method="post"  onsubmit="return validate()">
                    @csrf
                    <div class="booking-form">
                        @if ($errors->any())
                        <div class="error">
                            <br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="book">
                            
                                
                                    <label for="date">
                                        <span class="name">Date</span><input type="text" name="date" id="date" value="{{ $values['date'] }}" readonly required><br>
                                    </label>
                                    @if(Auth::check() && Auth::user()->isAdmin==1)
                                    <label for="client"><span class="name">Name</span><input type="text" name="name" id="client" value="{{old('name')}}"></label>
                                @elseif (Auth::check() && Auth::user()->isAdmin==0)
                                    <label for="client"><span class="name">Name</span><input type="text" name="name" id="client" value="{{Auth::user()->name}}" readonly></label>
                                @else
                                    <label for="client"><span class="name">Name</span><input type="text" name="name" id="client" value="{{ old('name')}}"></label>
                                @endif
                            <label for="events">
                                <span class="name" style="display: block">Type</span>
                                <select name="event" id="events" onchange="showPackage()">
                                    <option value="none" selected>Select Event</option>
                                    <option value="Wedding">Wedding</option>
                                    {{-- <option value="Supari">Supari</option>
                                    <option value="Engagement">Swayambhar/Engagement</option>
                                    <option value="Bratabandha">Bratabandha</option>
                                    <option value="Ihee">Ihee</option>
                                    <option value="Gufaa">Gufaa</option>
                                    <option value="Maternity">Maternity</option>
                                    <option value="Photoshoot">Outdoor/Indoor Photoshoot</option>
                                    <option value="others">Others*</option> --}}
                                    @foreach($services as $serv)
                                        @if($serv->service_name != "Wedding")
                                            <option value="{{$serv->service_name}}">{{$serv->service_name}}@if($serv->service_name == "Others")*@endif</option>
                                        @endif
                                    @endforeach
                                </select><br>
                            </label>
                            <div id="packages">
                                <label for="package">
                                    <select name="package" id="package" style="width:100%; border-top:none">
                                        <option value="0" selected>Select a package</option>
                                        <option value="1B">Package 1-Bride</option>
                                        <option value="1G">Package 1-Groom</option>
                                        <option value="2B">Package 2-Bride</option>
                                        <option value="2G">Package 2-Groom</option>
                                        <option value="3">Package 3</option>
                                    </select>
                                </label>
                            </div>
                            
                            <div class="timeck">
                                <label for="time"><span class="tim1">Time</span><input type="text" name="time" id="time" placeholder="Eg. 6 AM" pattern="(1|2|3|4|5|6|7|8|9|10|11|12)+ (AM|PM)" required></label>
                                <label for="day">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="wholeday" value="1" id="day" unchecked><span class="name" > All Day</span></label>
                            </div>
                            
                            
                            <div class="no_and_con">
                                <label for="people"><span class="name" style="display: block;">No. of people</span> <input type="number" name="num" id="people" max="2000" value="{{ old('num')}}" required></label>
                                @if(Auth::check() && Auth::user()->isAdmin==0)
                                <label for="contact"><span class="name" style="display: block;">Contact</span><input type="text" name="con" id="contact" minlength="10" maxlength="10" pattern="98+[0-9]{8}|97+[0-9]{8}" title="Phone number starts from 98 or 97" value="{{ Auth::user()->contact}}" required></label>
                                @else
                                <label for="contact"><span class="name" style="display: block;">Contact</span><input type="text" name="con" id="contact" minlength="10" maxlength="10" pattern="98+[0-9]{8}|97+[0-9]{8}" title="Phone number starts from 98 or 97" value="{{ old('con') }}" required></label>
                                @endif
                            </div>
                            <label for="location"><span class="name">Location</span><input type="text" name="loc" id="location" value="{{ old('loc')}}" required></label>
                            <input type="hidden" name="user" value="{{Auth::user()->id}}">
                            <span class="info" >*Please inform during payment.</span>
                            <div class="buttons">
                                <button type="submit" name="action" value="confirm">Confirm</button>
                                <button type="reset" name="action" value="cancel">Cancel</button>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
        
    </main>
    @include('layouts.footer')
    <script>
        function showPackage(){
            pa = document.getElementById('events').value;
            if(pa == 'Wedding'){
                var p = document.getElementById('packages');
                p.style.display = "block"; 
            }
            else{
                var p = document.getElementById('packages');
                p.style.display = "none"; 
            }
        }
        function disableTime(){
            st = document.getElementById("start-time");
            et = document.getElementById("end-time");
            cb = document.getElementById("day");
            if(cb.checked){
                st.value="";
                et.value="";
                st.removeAttribute('required');
                et.removeAttribute('required');
                st.setAttribute('disabled','');
                et.setAttribute('disabled','');
            }
            else{
                
                st.removeAttribute('disabled');
                et.removeAttribute('disabled');
            }
            
        }
        function validate(){
            events = document.getElementById('events').value;
            if(events == "none"){
                alert("Please select valid event type.");
                return false;
            }
            if(events == "Wedding"){
                pack = document.getElementById("package").value;
                if(pack == "0"){
                    alert("Please select a wedding package.");
                    return false;
                }
            }
        }
    </script>
</body>
</html>