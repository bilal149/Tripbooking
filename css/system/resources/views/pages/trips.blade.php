@include('layouts.header')
@include('layouts.navbar')
  
@php
$uploader = App\Models\Uploader::all();
@endphp
<div class="container-fluid under" style="background-color: #0095D9;">
    <div class="row">
        <div class="col font text-center mt-1">
            <h1>OUR ADVENTURES</h1>
        </div>
    </div>
</div>
<div class=" waga  container">
<div class="row" > 
       
        @for ($i=0; $i  < count($uploader);$i++)
        <div class=" waga  col-md-6 col-xl-3 col-lg-3" style="display:inline-block; float: left;">
            <div class=" waga  card mb-4 mt-5" style="border:2px solid black">
                <img class=" waga  card-img-top" src="{{ asset('' . $uploader[$i]->image_url) }}" alt="Card image cap" style="height: 240px;">
                <div class=" waga  card-body" style="background-color: #fff">
                    <h4 class=" waga  card-title" style="height: 60px;">{{ $uploader[$i]->heading }}</h4>
                    <p class=" waga  card-text" style="height: 80px;">{{ substr(strip_tags($uploader[$i]->details), 0, 100) }}...</p>
                    <div class=" waga  llink"><a href="/info/{{ $uploader[$i]->id }}"  style="color: black;"><strong>Explore More</strong></a></div>
                </div>
            </div>
        </div>
        @endfor
        
        
    </div>
</div>

 @include('layouts.footer')