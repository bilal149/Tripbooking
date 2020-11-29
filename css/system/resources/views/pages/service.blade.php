@include('layouts.header')
@include('layouts.navbar')
<!-- -------------------------------------Services------------------------------------- -->
 <div class="container-fluid under" style="background-color: #0095D9;">
        <div class="row">
            <div class="col font text-center mt-1">
                <h1>OUR ADVENTURES</h1>
            </div>
        </div>
    </div>
 <div class="container-fluid headd">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-12 scuba" style="background: url({{ asset('' . $data->image_url) }});height: 600px; background-repeat: no-repeat;">
          
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-12" style="margin-top: 4%;">
            <h1>{{ $data->heading }}</h1>
            <p>
                {{ $data->details }}
            </p>
        </div>
    </div>
</div>

@include('layouts.footer')