@include('layouts.header')
@include('layouts.navbar')
    <!-- --------------------------- Welcome to Adventure Khobar--------------------------------------------- -->
    <div class="container-fluid under" style="background-color: #0095D9;">
        <div class="row">
            <div class="col font text-center mt-1">
                <h1>ABOUT US</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">

        <div class="row my-row font">
            <div class="col-lg-0 col-xl-0 my-col">

            </div>
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 my-col">
                <img src="image/home-about.png" class="mb-2" width="100%">
            </div>
            
            @php
            //$data= App\About::all();
            $abouts = App\Models\About::all();
            @endphp
    
    @foreach($abouts as $data)
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-col mb-2 mt-5">
                <h1><span style="color: #0095D9;"> <strong>  {{ $data->welcome }} </span> <br> <span style="color:black;"> {{ $data->heading }} </span></strong>
                </h1>
                <h3><strong>{{$data->sub_heading}}</strong></h3>
                <br>
                <p>{{$data->details}}</p>
    @endforeach

                
            </div>
            <div class="col-lg-1 col-xl-1 my-col">

            </div>
        </div>
    </div>
    <div class="vision">
        <div class="container mt-5 mb-5">

            <div class="row my-row font">
                
                @php
                $visions = App\Models\Vision::all();
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-col mb-2 mt-5">
                    <div class="vision1">
                        @foreach($visions as $data)
                        <h1 class="mb-3 mt-1">{{ $data->heading}} </h1>
                        <p>{{ $data->details}} </p>
                        @endforeach    
                    </div>
                </div>


                @php
                $missions = App\Models\Mission::all();
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-col mb-2 mt-5" >
                    <div class="vision1">
                        @foreach($missions as $data)
                        <h1 class="mb-3 mt-1">{{ $data->heading}} </h1>
                        <p>{{ $data->details}} </p>
                        @endforeach
                        </div>
                    </div>
                </div>



            </div>
        </div>
      
      @include('layouts.footer')



