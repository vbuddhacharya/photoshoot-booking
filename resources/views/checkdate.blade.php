<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/booking1.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/js-datepicker/dist/datepicker.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">
    <title>Choose the Date</title>
</head>
<body onLoad="enaButton()">
    <header></header>
    @include('layouts.nav')
    <main>
        <div class="main-section">
            <div class="picture">
                <img src="{{asset('images/gallery/w31a.jpg')}}" alt="">
            </div>
            <div class="dform">
                <form action="{{route('booking.available')}}" method="get">
                    @csrf
                    <div class="date-container">
                        <div class="book-title">Choose Your Booking Date</div> 
                        {{-- <div>Check to see if the date you need is available or not.</div> --}}
                        <div class="date-form">
                            {{-- <span class="date-title">Date:</span> --}}
                            <input type="text" name="date" id="datepick" placeholder="Date" value="{{old('date')}}" required>
                            <button type="submit" name="avail" value="available" class="button"><span>Check availability</span></button>
                            @if($errors->any())
                                <span class="availability" id="ava" style="visibility: visible">{{$errors->first()}}</span>
                            @else
                                <span class="availability">Busy</span>
                            @endif
                            <div class="button1">
                                <button type="submit" name="avail" value="confirmation" id="con" disabled>Next</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </main>
    @include('layouts.footer')
    <script src="https://unpkg.com/js-datepicker"></script>
    <script>
        const picker = datepicker('#datepick', {
            customDays: ['S','M','T','W','Th','F','Sa'],
            minDate: addDays(new Date()),
            maxDate: addMonth(new Date()),
            startDate: new Date(),
        }
        )
        function addDays(date){
            date.setDate(date.getDate() + 2);
            return date;
        }
        function addMonth(date){
            date.setDate(date.getDate()+ 60);
            return date;
        }
    </script>
    <script>
        function enaButton(){
            // alert("hello");
            b = document.getElementById("con");;
            // b.removeAttribute('disabled');
            a = document.getElementById('ava').innerText;
            
            if (a == 'Available'){
                b.removeAttribute('disabled');
            }
        }
        window.onload = enButton;
        
    </script>
</body>
</html>