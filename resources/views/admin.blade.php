<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/viewbooking.css')}}"> 
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png"> 
    <title>Bookings</title>
</head>
<body>
    @include('layouts.nav')
    
    <div class="pending">

        <div class="book-title">Pending Bookings</div>
        @if($errors->any())
        <div class="info">{{$errors->first()}}</div>
         @endif
        <table id="pending">
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Event</th>
            <th>Package</th>
            <th>Time</th>
            <th>All Day</th>
            <th>People</th>
            <th>Location</th>
            <th>Contact</th>
            <th>Advance</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        @foreach ($bookings as $booking)
        @if ($booking->status == 'Pending')
        @php
            $date = date('Y-m-d');
            $dt1 = new DateTime($date);
            $dt2 = new DateTime($booking->date);
            $interval = $dt1->diff($dt2);
            $days = $interval->format('%a');
        @endphp
        @if ($days<7)
            <tr id="alert">
        @else
            <tr>
        @endif
            <td>{{$booking->date}}</td>
            <td>{{$booking->cust_name}}</td>
            <td>{{$booking->service->service_name}}</td>
            @if($booking->service->package == 0)
                <td>None</td>
            @else
                <td>{{$booking->service->package}}</td>
            @endif
            <td>{{$booking->time}}</td>
            <td>@if($booking->all_day == 1)Yes @else No @endif</td>
            <td>{{$booking->no_of_people}}</td>
            <td>{{$booking->location}}</td>
            <td>{{$booking->cust_contact}}</td>
            <td>{{$booking->service->advance}}</td>
            <td>{{$booking->service->price}}</td>
            <td class="button" style="width:160px">
                <form action="{{route('update.booking')}}" method="post">
                    @csrf
                    <div class="b1">
                        <input type="text" name="bookingid" value="{{$booking->id}}" hidden>
                        <button name="change" value="confirm" type="submit">Confirm</button>
                        <button name="change" value="delete">Delete</button>
                    </div>
                    
                </form>
            </td>
        </tr>
        @endif
            
            @endforeach
    </table>
    </div>
    <div class="confirmed">
        <div class="book-title">Confirmed Bookings</div>
        <table id="confirmed">
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Event</th>
                <th>Package</th>
                <th>Time</th>
                <th>All Day</th>
                <th>People</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Advance</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
            @foreach ($bookings as $booking)
            @if ($booking->status == 'Confirmed')
            @php
            $date = date('Y-m-d');
            $dt1 = new DateTime($date);
            $dt2 = new DateTime($booking->date);
            $interval = $dt1->diff($dt2);
            $days = $interval->format('%a');
        @endphp
            
            <tr>
                <td>{{$booking->date}}</td>
                <td>{{$booking->cust_name}}</td>
                <td>{{$booking->service->service_name}}</td>
                @if($booking->service->package == 0)
                <td>None</td>
            @else
                <td>{{$booking->service->package}}</td>
            @endif
                <td>{{$booking->time}}</td>
                <td>@if($booking->all_day == 1)Yes @else No @endif</td>
                <td>{{$booking->no_of_people}}</td>
                <td>{{$booking->location}}</td>
                <td>{{$booking->cust_contact}}</td>
                <td>{{$booking->service->advance}}</td>
                <td>{{$booking->service->price}}</td>
                
                <td class="button" style="width:160px">
                    <form action="{{route('update.booking')}}" method="post">
                        @csrf
                        <input type="text" name="bookingid" value="{{$booking->id}}" hidden>
                        <div class="b1">
                            <button name="change" value="complete" type="submit">Complete</button>
                            <button name="change" value="delete">Delete</button>
                        </div>
                        
                    </form>
                </td>
            </tr>
            @endif
                
        
        
            @endforeach
        </table>
    </div>
    <div class="completed">
        <div class="book-title">Completed Bookings</div>
        <table id="completed">
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Event</th>
                <th>Package</th>
                <th>Time</th>
                <th>All Day</th>
                <th>People</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Total</th>
            </tr>
            @foreach ($bookings as $booking)
            @if ($booking->status == 'Completed')
            <tr>
                <td>{{$booking->date}}</td>
                <td>{{$booking->cust_name}}</td>
                <td>{{$booking->service->service_name}}</td>
                @if($booking->service->package == 0)
                <td>None</td>
            @else
                <td>{{$booking->service->package}}</td>
            @endif
                <td>{{$booking->time}}</td>
                <td>@if($booking->all_day == 1)Yes @else No @endif</td>
                <td>{{$booking->no_of_people}}</td>
                <td>{{$booking->location}}</td>
                <td>{{$booking->cust_contact}}</td>
                <td>{{$booking->service->price}}</td>
            </tr>
            @endif        
        
        @endforeach
    </table>
    </div>
@include('layouts.footer')
</body>
</html>