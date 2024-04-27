<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/viewbooking.css')}}">  
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">

    <title>Your Bookings</title>
</head>
<body>
    @include('layouts.nav')
    <main>
        
        <div class="title">Your Bookings</div>
        {{-- <div class="cust"> {{Auth::user()->name}} <br>{{Auth::user()->contact}}</div> --}}
        {{-- <div class="mid"> --}}
            {{-- <div class="pics">
                <img src="{{asset('images/gallery/pot2.jpg')}}">
            </div> --}}
        
        <div class="book">
            <table id="bookings">
                <tr>
                    <th>Date</th>
                    <th>Event</th>
                    <th>Location</th>
                    <th>People</th>
                    <th>Contact</th>
                    <th>Status</th>
                </tr>
                @foreach ($bookings as $book)
                @if ($book->status == 'Pending')
                    @php
                        $date = date('Y-m-d');
                        $dt1 = new DateTime($date);
                        $dt2 = new DateTime($book->date);
                        $interval = $dt1->diff($dt2);
                        $days = $interval->format('%a');
                    @endphp
                    @if ($days<7)
                        <tr id="alert">
                    @else
                        <tr>
                    @endif
                        <td>{{$book->date}}</td>
                        <td>{{$book->service->service_name}}</td>
                        <td>{{$book->location}}</td>
                        <td>{{$book->no_of_people}}</td>
                        <td>{{$book->cust_contact}}</td>
                        <td>{{$book->status}}</td>
                    </tr>
                    @endif
                @endforeach
                @foreach ($bookings as $book)
                @if ($book->status == 'Confirmed')
                    @php
                        $date = date('Y-m-d');
                        $dt1 = new DateTime($date);
                        $dt2 = new DateTime($book->date);
                        $interval = $dt1->diff($dt2);
                        $days = $interval->format('%a');
                    @endphp
                    @if ($days<7)
                        <tr class="alert">
                    @else
                        <tr>
                    @endif
                        <td>{{$book->date}}</td>
                        <td>{{$book->service->service_name}}</td>
                        <td>{{$book->location}}</td>
                        <td>{{$book->no_of_people}}</td>
                        <td>{{$book->cust_contact}}</td>
                        <td>{{$book->status}}</td>
                    </tr>
                    @endif
                @endforeach

                @foreach ($bookings as $book)
                @if ($book->status == 'Completed')
                        <tr>
                        <td>{{$book->date}}</td>
                        <td>{{$book->service->service_name}}</td>
                        <td>{{$book->location}}</td>
                        <td>{{$book->no_of_people}}</td>
                        <td>{{$book->cust_contact}}</td>
                        <td>{{$book->status}}</td>
                    </tr>
                    @endif
                @endforeach
            </table>
        </div>
        {{-- <div class="pics">
            <img src="{{asset('images/gallery/pot7.jpg')}}">
        </div> --}}
    {{-- </div> --}}
    </main>
    @include('layouts.footer')
    
</body>
</html>