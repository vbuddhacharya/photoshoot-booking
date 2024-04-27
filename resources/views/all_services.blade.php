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
    <title>Modify Prices</title>
</head>
<body>
    @include('layouts.nav')
    <div class="title">Services</div>
    @if ($errors->any())
        <div class="info">{{$errors->first()}}</div>
    @endif
    <div class="services">
        <table id="services">
            <tr>
                <th>Service Name</th>
                <th>Package</th>
                <th>Current Advance</th>
                <th>Current Price</th>
                <th>New Advance</th>
                <th>New Price</th>
                <th>Confirmation</th>
            </tr>
            @foreach ($services as $serv)
                <tr>
                    <td>{{$serv->service_name}}</td>
                    <td>{{$serv->package}}</td>
                    <td>{{$serv->advance}}</td>
                    <td>{{$serv->price}}</td>
                    <form action="{{route('services.update')}}" method="post">
                        @csrf
                        <input type="text" name="servid" value="{{$serv->id}}" hidden>
                        <td class="prices"><input type="text" name="adv" id="advance"></td>
                        <td class="prices"><input type="text" name="nprice" id="price"style="width:90%"></td>
                        <td class="button"><button name="update" type="submit">Update</button></td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
    
    @include('layouts.footer')
</body>
</html>