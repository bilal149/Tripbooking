@include('layouts.header')
@include('layouts.navbar')
@php
//$data= App\About::all();
$abouts = App\Models\About::all();
//$services = App\models\Service::all();
$slid = App\Models\Slid::all();
$slider1s =App\Models\Slider1::all();
$slider2s =App\Models\Slider2::all();
$uploader = App\Models\Uploader::inRandomOrder()->limit(8)->get();

@endphp

<?php
//$services = App\models\Service::where('heading','Bilal')->get();
?>

<!-- ------------------------------- slider----------------------------------------- -->
  <div class="container-fluid">
    <div class=" waga  row my-row">
        <div class=" waga   col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-col">

            <!----------------------------- sliderr -->
            <div id="carouselExampleIndicators" class=" waga  carousel slide" data-ride="carousel">
                <ol class=" waga  carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class=" waga  active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class=" waga  carousel-inner">
                    @foreach($slid as $slider)
                   
                  <div class=" waga  carousel-item active" >
                    <img class=" waga  d-block image-fluid " src="{{ asset('' . $slider->image_url) }}" alt="First slide"  >
                  </div>
                  @endforeach

                  @foreach($slider1s as $slide1)
                  <div class=" waga  carousel-item" >
                    <img class=" waga  d-block image-fluid " src="{{ asset('' . $slide1->image_url) }}" alt="second slide" >
                  </div>
                  @endforeach

                  @foreach($slider2s as $slide2)
                  <div class=" waga  carousel-item ">
                    <img class=" waga  d-block image-fluid " src="{{ asset('' . $slide2->image_url) }}" alt="Third slide">
                  </div>
                  @endforeach


                </div>
                <a class=" waga  carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class=" waga  carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class=" waga  sr-only">Previous</span>
                </a>
                <a class=" waga  carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class=" waga  carousel-control-next-icon" aria-hidden="true"></span>
                  <span class=" waga  sr-only">Next</span>
                </a>
              </div>
              <!-- --------------------------------------------------------- -->



        </div>
        
         <div class=" waga TEXT">
        <div class=" waga container">
            <div class=" waga row">
                <div class=" waga col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 algin">
                    <h2>Enjoy The Thrill</h2>
                </div>
            </div>
        </div>

    </div>
    
    </div>
</div>

<!-- ----------------------------------book-us-------------------------------------- -->

<div class=" waga  HomeQuery">
    <div class=" waga  container">
        <div class=" waga  row my-row">

            <div class=" waga  col-xl-9 col-lg-9 col-xs-12 col-sm-12 col-md-12 col-xs-12 my-col  h1 marr ">

                <h2 class="waga">Book Our Amazing Activities with Adventure Khobar</h2>
            </div>
            <div class=" waga  col-xl-3 col-lg-3 col-xs-12 col-sm-12 col-md-12 col-xs-12 my-col  h2 mrrr">

                <span><button class=" waga button:hover button"><a href="/booktrip" style="color: white;" >Book an Activity</a></button></span>
            </div>

        </div>
    </div>
</div>
<!-- --------------------------- Welcome to Adventure Khobar--------------------------------------------- -->
<div class=" waga  container-fluid mt-5 mb-5">

    <div class=" waga  row my-row font">
        <div class=" waga  col-lg-1 col-xl-1 my-col">

        </div>
        <div class=" waga   col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 my-col">
            <img src="image/home-about.png" class=" waga  img-fluid mb-2">
        </div>

     
@foreach($abouts as $data)
        <div class=" waga  col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 my-col mb-2 mt-5">
            <h1><span style="color: #0095D9;"> <strong>  {{ $data->welcome }} </span> <br> <span style="color:black;"> {{ $data->heading }} </span></strong>
            </h1>
            <h3><strong>{{$data->sub_heading}}</strong></h3>
            <br>
            <p>{{$data->details}}</p>
@endforeach
    
            <div class=" waga  link" style="background-color: #fff"><a href="/about_us" style="color: #0095D9;">Read More</a></div>
        </div>
        <div class=" waga  col-lg-1 col-xl-1 my-col">

        </div>
    </div>
</div>
<!-- ----------------------------------------cards slider---------------------------------------------------- -->

<div class=" waga  CurchHomeText">


    <div class=" waga  container-fluid my-container font">
        <div class=" waga  row my-row bl">
            <div class=" waga  col-lg-4 col-xl-4 col-md-4 my-col bl">

            </div>

            <div class=" waga  col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 my-col h1  ">
                <div class=" waga  SpacingBox"></div>
                <h2 style="text-align: center; font-family:montserrat-bold">OUR ADVENTURES</h2>
                <div class=" waga  under"></div>
            </div>


            <div class=" waga  col-lg-4 col-xl-4 col-md-4 my-col bl">

            </div>
        </div>

        <div class=" waga  row bl font">
            <!--Carousel Wrapper-->
            <div class=" waga  container">
                @for ($i=0; $i  < count($uploader);$i++)
                <div class=" waga  col-md-6 col-xl-3 col-lg-3 border-0" style="display:inline-block; float: left;">
                    <div class=" waga  card mb-4 mt-5 class ">
                        <img class=" waga  card-img-top" src="{{ asset('' . $uploader[$i]->image_url) }}" alt="Card image cap" style="height: 230px;">
                        <div class=" waga  card-body" style="background-color: #fff">
                            <h4 class=" waga  card-title" style="height: 60px;">{{ $uploader[$i]->heading }}</h4>
                            <p class=" waga  card-text" style="height: 80px;">{{ substr(strip_tags($uploader[$i]->details), 0, 100) }}...</p>
                            <div class=" waga  llink"><a href="/info/{{ $uploader[$i]->id }}"  style="color: black;"><strong>Explore More</strong></a></div>
                        </div>
                    </div>
                </div>
                @endfor
                
                <center>
                <span style="padding: 10px; border: 2px dotted #FFFFFF;" ><a href="/trips">Explore All Adventures</a></span> <BR><BR><BR></center>
            </div>
        </div>

      
</div>
</div>



<!-- ----------------------------------desert safari-------------------------------------- -->
<div class=" waga  Safari">
    <div class=" waga  container-fluid">
        <div class=" waga  row text-dark">
            <div class=" waga  col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">

            </div>
            
            <div class=" waga  col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="font-family: montserrat-bold;">
                <h2><b>Free Includes In Desert Safari</b></h2>
                <div class=" waga  under"></div>
            </div>
            <div class=" waga  col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">

            </div>
        </div>


        <div class=" waga  row text-dark">
            <div class=" waga  col-lg-1 col-xl-1 col-md-1 col-sm-12 col-xs-12">

            </div>
            <div class=" waga  col-lg-10 col-xl-10 col-md-10 col-sm-12 col-xs-12 mt-5">

                <div class=" waga  row">
                    <div class=" waga  column">
                        <img src="image/freeservices-01.png" alt="Snow" style="width:100%">
                    </div>
                    <div class=" waga  column">
                        <img src="image/freeservices-02.png" alt="Forest" style="width:100%">
                    </div>
                    <div class=" waga  column">
                        <img src="image/freeservices-03.png" alt="Mountains" style="width:100%">
                    </div>



                    <div class=" waga  column">
                        <img src="image/freeservices-04.png" alt="Snow" style="width:100%">
                    </div>
                    <div class=" waga  column">
                        <img src="image/freeservices-05.png" alt="Forest" style="width:100%">
                    </div>
                    <div class=" waga  column">
                        <img src="image/freeservices-06.png" alt="Mountains" style="width:100%">
                    </div>

                </div>
            </div>
            <div class=" waga  col-lg-1 col-xl-1 col-md-1 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
</div>
<!-- ------------------------------subcribe------------------------------------------ -->
<div class=" waga  Safari mt-5" style="background-color: #d0d6d6">
    <div class=" waga  container-fluid Subscribe">
        <div class=" waga  row text-dark">
            <div class=" waga  col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">

            </div>
            <div class=" waga  col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="font-family: montserrat-bold;">
                <h2><strong>Subscribe For Latest Offers</strong></h2>

                <p class=" waga  para">Subscribe to our news letter now stay up to date with new collection, the latest lookbooks and exclusive offers</p>
            </div>
            <div class=" waga  col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">

            </div>

            <div class=" waga  col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12  font">



                
                @if (count($errors)>0)
                <div class=" waga  alert-danger">
                 <button type="button" class=" waga  close" data-dismiss="alert">x</button>
                    <ul>
                        @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            @if ($message = Session::get('success'))
            <div class=" waga  alert alert-success alert-block">
                <button type="button" class=" waga  close" data-dismiss="alert" style="width: 5px; height:5px">x</button>
            <strong>{{ $message }}</strong>
            </div>
        @endif
            <form action="{{ url('index/send')}}" method="POST">
                {{ csrf_field() }}



                <section class=" waga  newsletter">
                    <div class=" waga  container">
                        <div class=" waga  row">
                            <div class=" waga  col-sm-12">
                                <div class=" waga  content">
                                    <div class=" waga  input-group">
                                        <input type="email" class=" waga  form-control" name="sub_email" placeholder="Enter Your Email Address Here">
                                        <span class=" waga  input-group-btn">
            <button class=" waga  btn btns" name="send" type="submit">SUBSCRIBE</button>
            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>


            </div>
        </div>
    </div>
</div>

<!-- ----------------------------------Follow-us-------------------------------------- -->

<div class=" waga  container Favicon  ">
    <div class=" waga  row">

        <div class=" waga  col-xl-6 col-lg-6 col-xs-12 col-sm-12 col-md-12 mt-4  font ">
            <h1 class=" waga  bord">Follow Us <br> Social Media</h1>
        </div>
        <div class=" waga  col-xl-6 col-lg-6 col-xs-12 col-sm-12 col-md-12   ">

            <a href="https://www.instagram.com/adventurekhobar/" target="_blank" class=" waga  fab fa-instagram mb-5"></a>
            <a href="https://api.whatsapp.com/send?phone=0503222972" target="_blank" class=" waga  fab fa-whatsapp mb-5"></a>
            <a href="https://www.facebook.com/adventurekhobar/" target="_blank" class=" waga  fab fa-facebook-f mb-5"></a>
          

        </div>


    </div>
</div>


  <!-- ------------------------------------------------------------------------ -->
  <div class=" waga  Foot network font" style="background-image: url(image/footer-contact.jpg);">
    <div class=" waga  container my-container">
        <div class=" waga  row my-row">
            <div class=" waga  col-xl-12 col-lg-12 col-xs-12 col-sm-12 col-md-12 my-col">
                <h2 class=" waga  ml-4 ">Do You Want Our Services / Trips Services ?</h2>
                <h5 class=" waga  ml-4 ">Contact us now at Khobar Adventures 050-3222972 OR</h5>
                <button class=" waga  button1 my-col"><a href="callto:0503222972" style="color: #000">CALL US</a></button>
                <button class=" waga  button2 my-col"><a href="mailto:info@adventurekhobar.com" style="color: #fff" >EMAIL US</a></button>

            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
