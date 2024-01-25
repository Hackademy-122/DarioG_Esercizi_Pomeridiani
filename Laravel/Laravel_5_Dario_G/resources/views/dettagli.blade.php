<x-layout>
    
    <div id="" class="container-fluid">
        <div class="row my-5 d-flex justify-content-center">

    {{-- descrizione --}}
            <div class="col-12 col-md-5">
                <h1 class="">{{$dettaglioRichiesto['type'] }}</h1>
                <p>Misura consigliata: {{$dettaglioRichiesto['consigli']}}</p>
                <p>Dove andare: {{$dettaglioRichiesto['where']}}</p>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="button" class="btn btn-info">Acquista</button>
                    </div>
            </div>
    {{-- immagine --}}
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <img id="dettagli_img" src="{{$dettaglioRichiesto['img']}}" class="img-thumbnail" height="350px" alt="">
            </div>
    {{-- video --}}
            <div class="col-12 col-md-5 d-flex justify-content-center">
                <iframe class="h-100" src="https://www.youtube.com/embed/8-Gu_BLh2pQ?autoplay=1&mute=1" title="Perfect Powder Day #snowboarding #shorts #winter #newvideo #snow" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
    
        </div>
    </div>
    
    
    
    </x-layout>