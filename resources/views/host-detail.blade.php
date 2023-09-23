@extends('layouts.app')

@section('content')

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <!DOCTYPE html>
  <html lang="en">
  <head>
   <title>Profile</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">

      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">

      <link rel="stylesheet" href="css/aos.css">

      <link rel="stylesheet" href="css/ionicons.min.css">

      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">


      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/hoststyle.css">

    </head>

    <body>

      <div id="index">
       <div class="container" id="bg">
         <br>
      <div id="profile" class="row offset-3 offset-lg-2">
            <div class="col-lg-4 col-xs-12 well">
            <img src="images/profile.jpg" class="img-fluid" id="leemin">
      </div>
     <div id="layout">
     <div class="col-lg-10 col-xs-12 well" id="group">
           <p id="gmail" class="mt-xs-n5"><span>Leeminho@gmail.com</span></p>
            <p id="name" class="mt-xs-n1"><span>Lee Min Ho</span></p>
      <div class="col-lg-6 col-xs-12 well">
      <button id="bb">Notification</button>
      </div>
      </div>
    </div>
    </div>
    <div id="navbar" class="offset-1 offset-lg-1 mt-lg-3">

          <ul class="nav nav-tabs">
             <li class="nav-item">
                 <a class="nav-link" href="profile.html">All</a>
            </li>
             <li class="nav-item">
                 <a class="nav-link active" href="#" target="_blank">Avilable</a>
             </li>
            <li class="nav-item">
                 <a class="nav-link" href="rented.html">Rented</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="previous.html">Previous</a>
            </li>
          </ul>
     </div>
    <div id="house" class="row offset-1 mr-5 offset-lg-1  col-lg-6 col-xs-6 well img-fluid">
           <img src="images/dsf.jpg"  class="img-responsive" id="hh">
   </div>
         <div id="describe" class="offset-1  offset-lg-1  col-lg-6 col-xs-6  well">
             <p id="place" class="offset-1 offset-lg-1 mt-lg-5 ">Place   - England</p><hr>
             <p id="bedroom" class="offset-1 offset-lg-1">Rooms-3 Bathroom, 2 Bedroom, 1 Kitchen </p><hr>
             <p id="price" class="offset-1 offset-lg-1">Price-$1000 </p><hr>
             <p id="facility" class="offset-1 offset-lg-1">                 Parking Included,Spa & Gym,Heated Outdoor swimming pool (Shared)
          </p><hr>
  <button type="button" class="btn btn-default btn-sm " id="btn1">Edit</button>
  <button type="button" class="btn btn-default btn-sm" id="bt">View</button>
         </div>

            <div id="house" class="row offset-1 mr-5 offset-lg-1  col-lg-6 col-xs-6 well img-fluid">
           <img src="images/house.jpg"  class="img-responsive" id="hh">
           </div>
           <div id="describe" class="offset-1  offset-lg-1  col-lg-6 col-xs-6  well">
             <p id="place" class="offset-1 offset-lg-1 mt-lg-5 ">Place   - Myanmar</p><hr>
             <p id="bedroom" class="offset-1 offset-lg-1">Rooms-4 Bathroom, 2 Bedroom, 1 Kitchen </p><hr>
             <p id="price" class="offset-1 offset-lg-1">Price-$600 </p><hr>
             <p id="facility" class="offset-1 offset-lg-1">                 Parking Included,Spa ,swimming pool (Shared)
          </p><hr>
             <button type="button" class="btn btn-default btn-sm " id="btn1">Edit</button>
             <button type="button" class="btn btn-default btn-sm" id="bt">View</button>
         </div>

          <div id="house" class="row offset-1 mr-5 offset-lg-1  col-lg-6 col-xs-6 well img-fluid">
           <img src="images/hh.jpg"  class="img-responsive" id="hh">
           </div>
           <div id="describe" class="offset-1  offset-lg-1  col-lg-6 col-xs-6  well">
             <p id="place" class="offset-1 offset-lg-1 mt-lg-5 ">Place   - Myanmar</p><hr>
             <p id="bedroom" class="offset-1 offset-lg-1">Rooms-4 Bathroom, 2 Bedroom, 1 Kitchen </p><hr>
             <p id="price" class="offset-1 offset-lg-1">Price-$600 </p><hr>
             <p id="facility" class="offset-1 offset-lg-1">                 Parking Included,Spa ,swimming pool (Shared)
          </p><hr>
             <button type="button" class="btn btn-default btn-sm " id="btn1">Edit</button>
             <button type="button" class="btn btn-default btn-sm" id="bt">View</button>
         </div>
       </div>
       </div>

    </body>
    </html>
</section>


@endsection
