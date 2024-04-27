<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">
    <title>Gallery</title>
</head>
<body>
    <header>
        
    </header>
    @include('layouts.nav')
    
    <main>
        <div class="title">Gallery</div>
        <div class="main-section">
            
            <div class="gallery-section">

            
            <div class="tab gallery-menu">
                <button class="tablinks top" onclick="openGallery(event,'Wedding')" id="DefaultOpen">Wedding</button>
                <button class="tablinks" onclick="openGallery(event,'Bratabandha')">Bratabadha</button>
                <button class="tablinks" onclick="openGallery(event,'Gufa')">Ihi/Gufa</button>
                {{-- <button class="tablinks" onclick="openGallery(event,'Events')">Events</button> --}}
                <button class="tablinks bor" onclick="openGallery(event,'Others')">Others</button>
            </div>
            
            <div id="Wedding" class="tabcontent gal">
                <div class="row">
                
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w21a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w30.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w33.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/w23a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        {{-- <img id="myImg" src="{{asset('images/gallery/w35a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w34.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w31a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>

                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/eng2.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w7.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w4.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>

                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/sup3a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/w13a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w5a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w15.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/w14.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/w20a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                </div>
                
            </div>
            <div id = "myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01" src="">
                <div id="caption"></div>
            </div>
            <div id="Gufa" class="tabcontent gal">
                <div class="row">
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa1.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa2a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa4a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa3.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa5.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa15a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa6.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                        {{-- <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa9.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa14a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/gufa16.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                </div>
                
            </div>
            <div id="Bratabandha" class="tabcontent gal">
                <div class="row">
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br6a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br1a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br3a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br5a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br7a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br9a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br4a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br2.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/br10.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                    </div>
                </div>
                
            </div>
            
            <div id="Others" class="tabcontent gal">
                <div class="row">
                
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/other5.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/misc7a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/ps2.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/pot3a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/other6.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/picture1.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/misc9.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/picture5.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                        {{-- <img id="myImg" src="{{asset('images/gallery/ps2.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/pot7a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>

                        {{-- <img id="myImg" src="{{asset('images/gallery/misc4a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                    <div class="column">
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/misc8a.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        <img id="myImg" loading="lazy" src="{{asset('images/gallery/other4.jpg')}}" style="width:100%" alt="" onclick=showModal(this)>
                        {{-- <img id="myImg" src="{{asset('images/gallery/other3.jpg')}}" style="width:100%" alt="" onclick=showModal(this)> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </main>
    @include('layouts.footer')
</body>
<script>
function showModal(element){
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = element.src;
    captionText.innerHTML = element.alt;
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function(){
    modal.style.display = "none";
}
}
</script>
<script>
    function openGallery(evnt, eventName){
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for(i=0;i<tabcontent.length;i++){
            tabcontent[i].style.display = "none";
        }
        tablinks= document.getElementsByClassName("tablinks");
        for(i=0;i<tablinks.length;i++){
            tablinks[i].className = tablinks[i].className.replace(" active","");
        }
        document.getElementById(eventName).style.display = "block";
        evnt.currentTarget.className += " active";
    }
    document.getElementById("DefaultOpen").click();
</script>
</html>