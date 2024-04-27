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
    <title>Services</title>
</head>
<body>
    @include('layouts.nav')
    <main>
        <div class="service-container">
            {{-- <div class="banner">
                
                    <img src="{{asset('images/bann1.jpg')}}" style="width:100%; height:auto">
            </div> --}}
                
                <div class="services">
                    <div class="title">Our Services</div>
                    <div class="c1">
                    <div class="serv">
                            <div class="pictures">
                                
                                    <span class="pict">
                                        <img src="{{asset('images/gallery/w111.jpg')}}" alt="others">
                                    </span>
                                    <span class="pict double" >
                                        <img src="{{asset('images/gallery/w10.jpg')}}" alt="others" style="margin-bottom:0">
                                        <img src="{{asset('images/gallery/w18.jpg')}}" alt="others">
                                    </span>
                                    <span class="pict">
                                        <img src="{{asset('images/gallery/w1a.jpg')}}" alt="others">
                                    </span>
                                
                            </div>
                            <div class="details">
                                <span class="service-name">Wedding</span>
                                <p>
                                    Looking for the perfect way to preserve the magic and beauty of your wedding day? 
                                    Look no further! At Wedding Kippa Photography, we specialize in capturing the essence of your love story through stunning and captivating images. Our team of experienced and 
                                    passionate photographers is dedicated to creating an exceptional visual narrative that will be cherished for a lifetime.We offer a range of packages to suit your budget and requirements.
                                    <a href="{{route('services.wedding')}}">Take a look!</a>
                                </p>
                            </div>
                            
                    </div>
                    </div>
                    <div class="c2">
                    <div class="serv1">
                        
                        <div class="details">
                            <span class="service-name">Engagement (Swayamvar)</span>
                            <p>Celebrate the beginning of your journey to happily ever after with Wedding Kippa Photography.
                            We are dedicated to capturing the essence of your love, the excitement of your journey together, and the anticipation of your upcoming wedding day.
                            {{-- Contact us today to schedule your personalized engagement session and let us capture the sparkle and romance that defines your love story. --}}
                            </p>
                            @foreach ($services as $service)
                                @if($service->service_name == 'Engagement(Swayamvar)')
                                <div class="pvalue">Starts from  Rs. {{$service->price}}
                                    Including Advance Rs. {{$service->advance}}
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="pictures">
                            
                            <span class="pict double">
                                <img src="{{asset('images/gallery/e2.jpg')}}" alt="others">
                                <img src="{{asset('images/gallery/e3.jpg')}}" alt="others">
                            </span>
                            <span class="pict">
                                <img src="{{asset('images/gallery/w13a.jpg')}}" alt="others">
                            </span>
                            <span class="pict double" >
                                <img src="{{asset('images/gallery/w7.jpg')}}" alt="others" style="margin-bottom:0">
                                <img src="{{asset('images/gallery/eng2.jpg')}}" alt="others">
                            </span>
                            
                        
                        </div>
                    </div>
                    </div>
                    <div class="c1">
                <div class="serv">
                    <div class="pictures" style="width:45%">
                        
                            {{-- <span class="pict">
                                <img src="{{asset('images/gallery/w111.jpg')}}" alt="others">
                            </span>
                            <span class="pict double" >
                                <img src="{{asset('images/gallery/w10.jpg')}}" alt="others" style="margin-bottom:0">
                                <img src="{{asset('images/gallery/w18.jpg')}}" alt="others">
                            </span> --}}
                            <span class="supari">
                                <img src="{{asset('images/gallery/sup2.jpg')}}" alt="others" >
                                {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                            </span>
                        
                    </div>
                    <div class="details" style="width:60%; margin-left:-10px">
                        <span class="service-name">Supari</span>
                        <p>Celebrate the richness of Nepali tradition and the joyous moments of giving Supari with the artistry of our photography services.
                            Allow us to artistically document this significant tradition, preserving the cultural heritage and cherished moments of your celebration.
                        </p>
                        @foreach ($services as $service)
                            @if($service->service_name == 'Supari')
                                <div class="pvalue">Starts from Rs. {{$service->price}} Including Advance Rs. {{$service->advance}}</div>
                            @endif
                        @endforeach
                    </div>
                    
                </div>
            </div>
            <div class="c2">
            <div class="serv1">
                
                <div class="details">
                    <span class="service-name">Bratabandha</span>
                    <p>Embrace the spirituality and splendor of Bratabandha through the lens of Wedding Kippa Photography.
                        Contact us today to book our services and let us create a visual masterpiece that honors the sacred rites of your Bratabandha ceremony. 
                    </p>
                    @foreach ($services as $service)
                        @if($service->service_name == 'Bratabandha')
                            <div class="pvalue">Starts from Rs. {{$service->price}} Including Advance Rs. {{$service->advance}}</div>
                        @endif
                    @endforeach
                </div>
                <div class="pictures">
                    <span class="pict">
                        <img src="{{asset('images/gallery/br1a.jpg')}}" alt="others">
                    </span>
                    <span class="pict double" >
                        {{-- <img src="{{asset('images/gallery/br6a.jpg')}}" alt="others" style="margin-bottom:0"> --}}
                        <img src="{{asset('images/gallery/br6a.jpg')}}" alt="others">
                    </span>
                    <span class="pict">
                        <img src="{{asset('images/gallery/br4a.jpg')}}" alt="others">
                        {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                    </span>
                        
                    
                </div>
        </div>
    </div>
    <div class="c1">
        <div class="serv">
            <div class="pictures">
                
                    <span class="pict">
                        <img src="{{asset('images/gallery/gufa2a.jpg')}}" alt="others">
                    </span>
                    <span class="pict double" >
                        <img src="{{asset('images/gallery/gufa1.jpg')}}" alt="others" style="margin-bottom:0">
                        <img src="{{asset('images/gallery/gufa3.jpg')}}" alt="others">
                    </span>
                    <span class="pict">
                        <img src="{{asset('images/gallery/gufa4a.jpg')}}" alt="others">
                        {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
                    </span>
                
            </div>
            <div class="details">
                <span class="service-name"> Ihi/Gufa </span>
                <p>
                    Capture the sacred essence of Ihi and Gufa ceremonies with Wedding Kippa Photography.
                    {{-- Our experienced team understands the cultural significance and emotional connections of these traditions, ensuring that every moment is artistically captured.  --}}
                    Preserve the beauty and spiritual richness of your celebrations with high-quality images that will be treasured for generations to come.

                </p>
                @foreach ($services as $service)
                    @if($service->service_name == 'Ihi/Gufa')
                        <div class="pvalue">Starts from Rs. {{$service->price}} Including Advance Rs. {{$service->advance}}</div>
                    @endif
                @endforeach
            </div>
            
    </div>
</div>
<div class="c2">
    <div class="serv1">
        
        <div class="details">
            <span class="service-name">Indoor/Outdoor Shoot</span>
            <p>
                At Wedding Kippa Photography, we specialize in creating stunning and timeless photographs that celebrate life's ordinary yet extraordinary moments. 
                {{-- Whether it's a family portrait, a couples' shoot, or a personal milestone, we are dedicated to capturing the essence, emotions, and beauty of every photoshoot. --}}
                From the choice of location to the selection of props and styling, we pay meticulous attention to every detail.
            </p>
            @foreach ($services as $service)
                @if($service->service_name == 'Indoor/Outdoor Shoot')
                    <div class="pvalue">Starts from Rs. {{$service->price}} Including Advance Rs. {{$service->advance}}</div>
                @endif
            @endforeach
        </div>
        <div class="pictures">
            
            <span class="pict">
                <img src="{{asset('images/gallery/pot7a.jpg')}}" alt="others">
            </span>
            <span class="pict double" >
                {{-- <img src="{{asset('images/gallery/w10.jpg')}}" alt="others" style="margin-bottom:0"> --}}
                <img src="{{asset('images/gallery/ps7a.jpg')}}" alt="others">
            </span>
            <span class="pict">
                <img src="{{asset('images/gallery/ps3a.jpg')}}" alt="others">
                {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
            </span>
        
    </div>
</div>
</div>
<div class="c1">
<div class="serv">
    <div class="pictures">
        
            <span class="pict">
                <img src="{{asset('images/gallery/misc3a.jpg')}}" alt="others">
            </span>
            
            <span class="pict">
                <img src="{{asset('images/gallery/pot3a.jpg')}}" alt="others">
                {{-- <img src="{{asset('images/gallery/picture7.jpg')}}" alt="others"> --}}
            </span>
            <span class="pict double" >
                <img src="{{asset('images/gallery/ev12.jpg')}}" alt="others" style="margin-bottom:0">
                <img src="{{asset('images/gallery/ev6.jpg')}}" alt="others">
            </span>
        
    </div>
    <div class="details">
        <span class="service-name">Others</span>
        <p>
            Whether you're looking for corporate headshots, lifestyle portraits, event coverage, or any other special occasion, 
            we have the expertise and creativity to bring your vision to life.Contact us today to discuss your photography requirements and 
            let us create exceptional images that capture the essence of your special moments.
        </p>
        @foreach ($services as $service)
            @if($service->service_name == 'Others')
                <div class="pvalue">Starts from Rs. {{$service->price}} Including Advance Rs. {{$service->advance}}</div>
            @endif
        @endforeach
    </div>
    
</div>
</div>
                    
                </div>
            
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>