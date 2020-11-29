
<!-- -------------------------------------- footer---------------------------------- -->
<div class="Footers font waga">
    <div class="container waga">
        <div class="row waga">



            <div class="col-xl-3 col-lg-3  col-md-6 col-xs-12 col-sm-12 mt-5 colr waga" >

                <h5><b class="fa font" style="font-family: montserrat-regular;">OUR ADDRESS</b></h5>
                <p>20th St, South, Al Khobar 34412, Kingdom of Saudi Arabia</p> <br> <br>
            </div>
            <div class="col-xl-3 col-lg-3 col-xs-12 col-sm-12 col-md-6 mt-5 colr waga"  >
                <h5><b class="fa font" style="font-family: montserrat-regular;">CONTACT US</b> <span>
           
        <p class="ml-1"> <i class="fa fa-phone"></i> 050-3222972 <br>

            <!--i class="fa fa-phone"></i> 050-3222972 <br-->

            <i class="fa fa-at"></i> info@adventurekhobar.com <br>
            
             <i class="fa fa-at"></i> omar@adventurekhobar.com <br>
        </p> </span>
            </div>
            <div class="col-xl-4 col-lg-4  col-md-6 col-xs-12 col-sm-12 mt-5 colr Fooot waga">

                <div class="footer-pad">
                    <h4 class="font">Subscribe</h4>

                    @if (count($errors)>0)
        <div class="alert-danger">
         <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" style="width: 5px; height:5px">x</button>
    <strong>{{ $message }}</strong>
    </div>
@endif
    <form action="{{ url('footer/send')}}" method="POST">
        {{ csrf_field() }}
                        <ul class="list-unstyled border-0">
                            <li>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control footer-input" name="sub_email" placeholder="Type email">
                                    <div class="input-group-append">
                                        <input class="btn footer-btn" type="submit" value="Subscribe" name="send">
                                    </div>
                                </div>
                            </li>
                            <li>Keep up to date with our latest</li>
                            <li>news and special offers</li> 
                        </ul>
                    </form>
                </div>

            </div>
            <div class="col-xl-2 col-lg-2 col-xs-12 col-sm-12 col-md-6 waga">
                <img src="image/footer-logo.png" alt="" class="img-fluid mx-auto d-block mt-5 ">
            </div>


            <div class="col-xl-12 col-lg-12 col-xs-12 col-sm-12 col-md-12 mb-3 colr waga">


                <p class="copyright text-center mt-3">Copyright 2020 &copy; Adventure Khobar Special. Designed & Developed by: <a href="https://swismax.com/" target="blank" style="color: white;">Swismax Solutions, All Right Reserved.</a></p>

            </div>

        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------ -->
 <!--@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

          @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif 
        @endif
    </div>
@endif--> 

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>