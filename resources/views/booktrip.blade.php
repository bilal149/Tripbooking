@include('layouts.header')
@include('layouts.navbar')
    <!-- --------------------------- Welcome to Adventure Khobar--------------------------------------------- -->
    <div class="container-fluid under" style="background-color: #0095D9;">
        <div class="row">
            <div class="col font text-center mt-1">
                <h1>BOOK TRIP</h1>
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

         <form action="{{ url('booktrip/send')}}" method="POST">
                {{ csrf_field() }}
            <div class="row mb-1">
                <div class="col">
                    <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
            </div>



            <div class="row mb-1 mt-3">
                <div class="col">
                    <select name="service1" id="service1" class="form-control">
                                <option value="service1">Select Services</option>
                                <option value="Scuba Diving">Scuba Diving</option>     
                                <option value="Parasailing">Parasailing</option>
                                <option value="Horse Riding">Horse Riding</option>
                                <option value="Bedouin Desert Camping">Bedouin Desert Camping</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Algarah or Judas Caves Trip">Algarah or Judas Caves Trip</option>
                                <option value="Desert Safari to Alasfar Lake">Desert Safari to Alasfar Lake</option>
                                <option value="Hiking Trip">Hiking Trip</option>
                                <option value="Quad bikes or dune buggies">Quad bikes or dune buggies</option>
                                <option value="Boat Trip">Boat Trip</option>
                                <option value="Paragliding or Paramotoring">Paragliding or Paramotoring</option>
                                <option value="Camel Farm">Camel Farm</option>
                                <option value="Camel Riding">Camel Riding</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Farm Trip">Farm Trip</option>
                      </select>
                </div>
                 <div class="col">
                    <select name="service2" id="service2" class="form-control">
                                <option value="service2">Select Services</option>
                                <option value="Scuba Diving">Scuba Diving</option>     
                                <option value="Parasailing">Parasailing</option>
                                <option value="Horse Riding">Horse Riding</option>
                                <option value="Bedouin Desert Camping">Bedouin Desert Camping</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Algarah or Judas Caves Trip">Algarah or Judas Caves Trip</option>
                                <option value="Desert Safari to Alasfar Lake">Desert Safari to Alasfar Lake</option>
                                <option value="Hiking Trip">Hiking Trip</option>
                                <option value="Quad bikes or dune buggies">Quad bikes or dune buggies</option>
                                <option value="Boat Trip">Boat Trip</option>
                                <option value="Paragliding or Paramotoring">Paragliding or Paramotoring</option>
                                <option value="Camel Farm">Camel Farm</option>
                                <option value="Camel Riding">Camel Riding</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Farm Trip">Farm Trip</option>
                      </select>
                </div>
            </div>
            
            
            



           
            
            



            <div class="row mb-1 mt-3">
                <div class="col">
                    <select name="service3" id="service3" class="form-control">
                                <option value="service3">Select Services</option>
                                <option value="Scuba Diving">Scuba Diving</option>     
                                <option value="Parasailing">Parasailing</option>
                                <option value="Horse Riding">Horse Riding</option>
                                <option value="Bedouin Desert Camping">Bedouin Desert Camping</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Algarah or Judas Caves Trip">Algarah or Judas Caves Trip</option>
                                <option value="Desert Safari to Alasfar Lake">Desert Safari to Alasfar Lake</option>
                                <option value="Hiking Trip">Hiking Trip</option>
                                <option value="Quad bikes or dune buggies">Quad bikes or dune buggies</option>
                                <option value="Boat Trip">Boat Trip</option>
                                <option value="Paragliding or Paramotoring">Paragliding or Paramotoring</option>
                                <option value="Camel Farm">Camel Farm</option>
                                <option value="Camel Riding">Camel Riding</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Farm Trip">Farm Trip</option>
                      </select>
                </div>
                  <div class="col">
                    <select name="service4" id="service4" class="form-control">
                                <option value="service4">Select Services</option>
                                <option value="Scuba Diving">Scuba Diving</option>     
                                <option value="Parasailing">Parasailing</option>
                                <option value="Horse Riding">Horse Riding</option>
                                <option value="Bedouin Desert Camping">Bedouin Desert Camping</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Algarah or Judas Caves Trip">Algarah or Judas Caves Trip</option>
                                <option value="Desert Safari to Alasfar Lake">Desert Safari to Alasfar Lake</option>
                                <option value="Hiking Trip">Hiking Trip</option>
                                <option value="Quad bikes or dune buggies">Quad bikes or dune buggies</option>
                                <option value="Boat Trip">Boat Trip</option>
                                <option value="Paragliding or Paramotoring">Paragliding or Paramotoring</option>
                                <option value="Camel Farm">Camel Farm</option>
                                <option value="Camel Riding">Camel Riding</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Farm Trip">Farm Trip</option>
                      </select>
                </div>
            </div>
            
            
            



            
            
            



            <div class="row mb-1 mt-3">
                <div class="col">
                    <select name="service5" id="service5" class="form-control">
                                <option value="service5">Select Services</option>
                                <option value="Scuba Diving">Scuba Diving</option>     
                                <option value="Parasailing">Parasailing</option>
                                <option value="Horse Riding">Horse Riding</option>
                                <option value="Bedouin Desert Camping">Bedouin Desert Camping</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Algarah or Judas Caves Trip">Algarah or Judas Caves Trip</option>
                                <option value="Desert Safari to Alasfar Lake">Desert Safari to Alasfar Lake</option>
                                <option value="Hiking Trip">Hiking Trip</option>
                                <option value="Quad bikes or dune buggies">Quad bikes or dune buggies</option>
                                <option value="Boat Trip">Boat Trip</option>
                                <option value="Paragliding or Paramotoring">Paragliding or Paramotoring</option>
                                <option value="Camel Farm">Camel Farm</option>
                                <option value="Camel Riding">Camel Riding</option>
                                <option value="Falcon Show">Falcon Show</option>
                                <option value="Farm Trip">Farm Trip</option>
                      </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone_no">
                </div>
            </div>
            
            
       
            

            <div class="row mt-3">
                <div class="form-group col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">

                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subjects Here">
                </div>
            </div>

            <div class="row mbtrip">
                <div class="form-group col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">

                    <textarea class="form-control" id="message" name="message" rows="4" cols="123" placeholder="Message"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary mt-3 mb-5">Submit</button>
        </form>

        <div class="SpacingBox"></div>
        <div class="SpacingBox"></div>
        <div class="SpacingBox"></div>
    </div>

    @include('layouts.footer')