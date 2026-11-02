<x-layout>
    @push('styles')
    @vite(['resources/css/welcome.css'])
    @endpush
    <div class="container-fluid video">
        <video autoplay loop muted playsinline class="video-background">
            <source src="{{ ('videos/background-video.mp4') }}" type="video/mp4">
            </video>
            <div class="row row2">
                <div class="col-4 d-flex flex-column justify-content-center bg-custom">
                    <h1 class="font-size ms-5"><span class="color-1">S</span>TART <span class="color-2">Y</span>OUR</h1>
                    <h1 class="font-size ms-5"><strong><span class="color-3">A</span>DVENTURE</strong></h1>
                    <h4 class="ms-5">Look at your next journey</h4>
                </div>
                
            </div>
        </div>
    </x-layout>