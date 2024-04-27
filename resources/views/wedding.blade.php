<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/services1.css')}}">  
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png"> 
    <title>Wedding Packages</title>
</head>
<body>
    @include('layouts.nav')
    <main>
        <div class="service-container">
            
                
                <div class="services">
                    <div class="title">Wedding Packages</div>
                    <div class="c1">
                    <div class="serv">
                            <div class="pictures">
                                
                                    <span class="pict">
                                        <img src="{{asset('images/gallery/w3a.jpg')}}" alt="others">
                                    </span>
                                    <span class="pict double" >
                                        <img src="{{asset('images/gallery/w9.jpg')}}" alt="others" style="margin-bottom:0">
                                        <img src="{{asset('images/gallery/w7.jpg')}}" alt="others">
                                    </span>
                                    <span class="pict">
                                        <img src="{{asset('images/gallery/w111.jpg')}}" alt="others">
                                        {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                                    </span>
                                
                            </div>
                            <div class="details">
                                <span class="package-name">Package 1</span>
                                <div class="wed">
                                    <div class="b">
                                        <span class="pname">Bride</span>
                                        
                                
                                    <ul>
                                        <li>1 Photographer</li>
                                        <li>1 Videographer</li>
                                        <li>12x18 frame</li>
                                        <li>Photo album</li>
                                        <li>A pendrive</li>
                                    </ul>
                                    @foreach ($services as $service)
                                            @if($service->service_name == 'Wedding' && $service->package == "1B")
                                                <span class="price"> Rs. {{$service->price}} </span>
                                            @endif
                                        @endforeach
                                    </div>
                                    
                                        
                                    
                                    <div class="g">
                                        <span class="pname">Groom</span>
                                        
                                <ul>
                                    <li>1 Photographer</li>
                                    <li>1 Videographer</li>
                                    <li>12x18 frame</li>
                                    <li>Photo album</li>
                                    <li>A pendrive</li>
                                </ul>
                                @foreach ($services as $service)
                                    @if($service->service_name == 'Wedding' && $service->package == "1G")
                                        <span class="price">Rs. {{$service->price}}</span>
                                    @endif
                                @endforeach
                            </div>
                                </div>
                                
                            </div>
                            
                    </div>
                    </div>
                    <div class="c2">
                    <div class="serv1">
                        
                        <div class="details">
                            <span class="package-name">Package 2</span>
                            <div class="wed">
                                <div class="b">
                                    <span class="pname">Bride</span>
                                    
                                <ul>
                                    <li>2 Photographer</li>
                                    <li>1 Videographer</li>
                                    <li>Same day photoshoot</li>
                                    <li>2 12x18 frames</li>
                                    <li>Photo book</li>
                                    <li>A 64gb pendrive</li>
                                </ul>
                                @foreach ($services as $service)
                                    @if($service->service_name == 'Wedding' && $service->package == "2B")
                                        <span class="price">Rs. {{$service->price}}</span>
                                    @endif
                                @endforeach
                                </div>
                                
                                    
                                
                                <div class="g">
                                    <span class="pname">Groom</span>
                                   
                            <ul>
                                <li>2 Photographer</li>
                                <li>1 Videographer</li>
                                <li>Same day photoshoot</li>
                                <li>2 12x18 frames</li>
                                <li>Photo book</li>
                                <li>A 64gb pendrive</li>
                            </ul>
                            @foreach ($services as $service)
                                @if($service->service_name == 'Wedding' && $service->package == "2G")
                                    <span class="price">Rs. {{$service->price}}</span>
                                @endif
                            @endforeach
                        </div>
                            </div>
                            
                        </div>
                        <div class="pictures">
                            
                            <span class="pict double">
                                <img src="{{asset('images/gallery/w34.jpg')}}" alt="others">
                                <img src="{{asset('images/gallery/w30.jpg')}}" alt="others">
                            </span>
                            <span class="pict double" >
                                {{-- <img src="{{asset('images/gallery/w.jpg')}}" alt="others" style="margin-bottom:0"> --}}
                                <img src="{{asset('images/gallery/w31a.jpg')}}" alt="others">
                            </span>
                            <span class="pict">
                                <img src="{{asset('images/gallery/e1a.jpg')}}" alt="others">
                                {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                            </span>
                        
                        </div>
                    </div>
                    </div>
                    <div class="c1">
                        <div class="serv">
                                <div class="pictures">
                                    
                                        <span class="pict">
                                            <img src="{{asset('images/gallery/w35a.jpg')}}" alt="others">
                                        </span>
                                        <span class="pict double" >
                                            <img src="{{asset('images/gallery/w33.jpg')}}" alt="others" style="margin-bottom:0">
                                            <img src="{{asset('images/gallery/w16.jpg')}}" alt="others">
                                        </span>
                                        <span class="pict">
                                            <img src="{{asset('images/gallery/w20a.jpg')}}" alt="others">
                                            {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                                        </span>
                                    
                                </div>
                                <div class="details">
                                    <span class="package-name">Package 3</span>
                                    <div class="wed p3">
                                        <div class="b">
                                            <span class="pname">Bride and Groom</span>
                                            
                                    
                                            <ul>
                                                <li>2 Photographer</li>
                                                <li>1 or 2 Videographer</li>
                                                <li>Same day photoshoot</li>
                                                <li>4 12x18 frames</li>
                                                <li>2 Photo book</li>
                                                <li>A 64gb pendrive for both side</li>
                                            </ul>
                                            @foreach ($services as $service)
                                                @if($service->service_name == 'Wedding' && $service->package == "3")
                                                    <span class="price"> Rs. {{$service->price}} </span>
                                                @endif
                                            @endforeach
                                        </div>
                                        
                                            
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                        </div>
                        </div>

                    
                </div>
            
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>