<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png"> 
    <title>Wedding Kippa Photography</title>
</head>
<body>
    <div class="container">
        <header></header>
        @include('layouts.nav')
        <main>
            <div class="banner">
                <img src="{{asset('images/gallery/main5d.jpg')}}" style="width:100%; height:auto">
            </div>
            <div class="gallery">
                
                <div class="gallery-section">
                    <div class="gallery-text">
                        <div class="title">Welcome To Wedding Kippa Photography</div>
                            <p>&nbsp; &nbsp;At Wedding Kippa Photography, we are dedicated to transforming fleeting moments into timeless treasures. Our skilled team of photographers has a keen eye for detail, 
                            a passion for storytelling, and the technical expertise to deliver stunning images that will be cherished for a lifetime.
                            Choose Wedding Kippa Photography to embark on a photography journey that goes beyond capturing images. 
                            Let us preserve your precious memories with artistry, passion, and a commitment to excellence.
                         </p>
                    </div>
                    <div class="gallery-slides">
                        <div class="title">Our Masterpieces</div>
                        <div class="slideshow">
                            <div class="slides fade" style="display: none">
                                <div class="number">1/4</div>
                                <img src="{{asset('images/slideshow/pic2.jpg')}}" alt="picture 1" style="width:100%">
                            </div>
                            <div class="slides fade" style="display: none">
                                <div class="number">2/4</div>
                                <img src="{{asset('images/slideshow/pic3.jpg')}}" alt="picture 2" style="width:100%">
                                
                            </div>
                            <div class="slides fade" style="display: none">
                                <div class="number">3/4</div>
                                <img src="{{asset('images/gallery/picture1.jpg')}}" alt="picture 3" style="width:100%">
                                
                            </div>
                            <div class="slides fade" style="display: none">
                                <div class="number">4/4</div>
                                <img src="{{asset('images/slideshow/pic4.jpg')}}" alt="picture 4" style="width:100%">
                                
                            </div>
                            {{-- <span><a class="prev" onclick="plusSlides(-1)"><</a></span>
                            <span><a class="next" onclick="plusSlides(1)">></a></span> --}}
                        </div>
                        <br>
                        <div style="text-align:center; padding-top:5px;">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                        
                    </div>
                </div>
        </div>
            <aside></aside>
            <div class="services">
                <div class="services-section">
                    <div class="title">What We Offer</div>
                    <div class="row">
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/picture2.jpg')}}" alt="pic1">
                                <h3>Wedding</h3>
                                <p>A wedding day is a once-in-a-lifetime event, and we believe in delivering photographs that will
                                     be cherished for generations.We understand the significance of a wedding day and the desire to capture its essence.</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/br2.jpg')}}" alt="pic1" style="width:100%; height:auto">
                                <h3>Bratabandha</h3>
                                <p>We strive to create images that reflect the cultural richness and beauty of this important milestone in a person's life.
                                    We believe in delivering high-quality images that preserve the love, traditions, and emotions of this special day. </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/w7.jpg')}}" alt="pic1">
                                <h3>Engagement</h3>
                                <p>Your engagement is a fleeting and magical moment in your love story. Now is the perfect time to celebrate the beginning of your forever love, and there's no better way to do it than with a captivating engagement photoshoot. </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/ev22.jpg')}}" alt="pic1">
                                <h3>Club Events</h3>
                                <p>Choose our photography services to capture the energy and spirit of your college or club events. Let us artistically document the performances, competitions, and shared moments that make your gathering unique.</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/gufa16.jpg')}}" alt="pic1">
                                <h3>Ihi/Gufa</h3>
                                <p>Ihi and Gufa ceremonies are deeply rooted in family bonds, spiritual growth, and blessings.Embrace the rich cultural heritage and sacred traditions of Ihi and Gufa with the artistry and expertise of our photography services.</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="content">
                                <img src="{{asset('images/gallery/picture1.jpg')}}" alt="pic1">
                                <h3>Many More</h3>
                                <p> Our team of skilled photographers possesses a diverse range of expertise and experience. Whether you're planning a corporate event, or a personal milestone, we collaborate closely with you to create a personalized and memorable experience.
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</body>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n){
        clearInterval(myTimer);
        if(n<0){
            showSlides(slideIndex -= 1);
        }else{
            showSlides(slideIndex += 1);
        }
        if (n==-1){
            myTimer = setInterval(function(){plusSlides(n+2)}, 5000);

        }else{
            myTimer = setInterval(function(){plusSlides(n+1)},5000);
        }
    }
    function currentSlide(n){
        clearInterval(myTimer);
        myTimer = setInterval(function(){plusSlides(n+1)}, 5000);
        showSlides(slideIndex = n);
    }
    function showSlides(n){
        let i;
        let slides = document.getElementsByClassName("slides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length){
            slideIndex = 1;
        }
        if(n < 1){ slideIndex = slides.length}
        for(i=0;i<slides.length;i++){
            slides[i].style.display = "none";
        }
        
        for(i=0;i<dots.length;i++){
            dots[i].className = dots[i].className.replace(" active","");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
    window.addEventListener("load",function(){
        showSlides(slideIndex);
        myTimer = setInterval(function(){plusSlides(1)}, 5000);
    })
</script>

</html>