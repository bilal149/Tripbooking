@include('layouts.header')
@include('layouts.navbar')

    <!-- --------------------------- Welcome to Adventure Khobar--------------------------------------------- -->
    <div class="container-fluid under" style="background-color: #0095D9;">
        <div class="row">
            <div class="col font text-center mt-1">
                <h1>CONTACT US</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 contact">

        <div class="row my-row font text-center">

            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <i class="fas fa-map-marker-alt"></i>
                <h4 class="mt-5">Our Location</h4>
                <p>20th St, South, Al Khobar 34412</p>

            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <i class="fas fa-envelope-open-text"></i>
                <h4 class="mt-5">EMAIL US</h4>
                <p>Info@adventurekhobar.com <br> Omar@adventurekhobar.com 
                </p>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <i class="fas fa-phone-volume"></i>
                <h4 class="mt-5">CALL US</h4>
                <p>050-3222972 <br></p>

            </div>

        </div>
    </div>
    <!-- -------------------------------------------Form to send message--------------------------------------------------- -->

    <div class="container-fluid under">
        <div class="row">
            <div class="col font text-center mt-1">
                <h1 style="color: #0095D9">Message Here!</h1>
                <div class="SpacingBox"></div>
            </div>
        </div>
    </div>

    <div class="container forms" style="color: #000;">
    
        @if (count($error)>0)
        <div class="alert-danger">
         <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="" method="POST">
          

            <div class="row mb-1">
                <div class="col">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" name="Enter Name">
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
            </div>

            <div class="row mt-3">
                <div class="form-group col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">

                    <input type="text" class="form-control" name="subject"  id="subject" placeholder="Enter Subjects Here">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                    <textarea class="form-control" id="textarea" name="textarea" rows="4"  placeholder="Message"></textarea>
                </div>
            </div>
            <button type="submit"  name="send" class="btn btn-primary mt-3 mb-5">Submit</button>
        </form>

        <div class="SpacingBox"></div>
        <div class="SpacingBox"></div>
        <div class="SpacingBox"></div>
    </div>

 @include('layouts.footer')