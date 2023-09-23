@extends('layouts.app')

@section('content')

<section class="ftco-section ftco-no-pb ftco-no-pt">

  <div class="container">
    <div class="row no-gutters">
      <div class="card" style="padding-left:30px; padding-right:30px;">
        <img src="images/profile.png" alt="John" style="width:100%">
        <h2>Profile</h2>
        <p class="title">CEO & Founder, Happy co.ltd</p>
        <p>Member of Happy Agency</p>
        <div style="margin: 24px 0;">
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p><button class="btn btn-primary" >Edit</button></p>
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-4 ml-md-4 pl-md-5">
          <div class="detail">
            <div class="middle">

              <div class="h2">
                <h4 class="des">
                  <h2>Profile's INFO</h2>
                  <p> </p>
                  <h4>ID No :000203</h4>
                  <h4>Membership Card :AB0637</h4>
                  <h4>Name : Profile</h4>
                  <h4>Email : uraccount@gmail.com </h4>
                  <h4>Phone number :095123456 </h4>
                  <h4>Address : NO.1,Parami Road,Hlaing Township</h4>
                  <h4>Owned house : 2</h4>


                </h4>
              </div>


            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>

</section>
<style media="screen">
  .ez {
    border: solid 1px;
    border-radius: 10px;
    padding : 10px;
    padding-top : 0px;
    padding-bottom: 0px;
    margin-left: 10px;
    margin-right: 10px;
  }
  .ed {
    margin-top: 50px;
    border-radius:10px;
    margin-bottom: -80px;
  }
  .abc {
    border-radius : 10px;
    border :solid 1px;
    margin-left :50px;
    margin-right :50px;

  }
  .activ {
    background-color: #23272b;
  }
</style>
<nav class=" ed container navbar navbar-expand-lg ftco_navbar bg-dark" id="ftco-navbar">
      <div class="container">
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav">
            <li class="ez nav-item activ"><a href="/" class="nav-link">Your Properties</a></li>
            <li class="ez nav-item"><a href="/about" class="nav-link">Your Rentals</a></li>
            <li class="ez nav-item"><a href="/contact" class="nav-link">Notifications</a></li>
          </ul>
        </div>
      </div>
    </nav>


<section class="abc ftco-section ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/image_5.jpg);">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-4 ml-md-4 pl-md-5">
          <h2 class="mb-4">Fatima Columbus House</h2>
          <p>@ No.123,Parami Road,Hlaing TownShip,Yangon,Myanmar</p>
        </div>
        <div class="pl-md-5 ml-md-4 mb-5">
          <p> When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric
            question ran over her cheek, then she continued her way.</p>

          <p>Lot Area: 1,250 SQ FT</br>
            Bed Rooms: 4</br>
            Bath Rooms: 4</br>
            Garage: 1</br>
            Floor Area: 1,300 SQ FT</br>
            Year Build:: 2018</br>
            Stories: 1</br>
            Roofing: New</p>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-info">
          </div>

        </div>
      </div>
    </div>






  </div>

  </div>
  </div>

  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/image_3.jpg);">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-4 ml-md-4 pl-md-5">
          <h2 class="mb-4">Fatima Columbus House</h2>
          <p>@ No.123,Parami Road,Hlaing TownShip,Yangon,Myanmar</p>
        </div>
        <div class="pl-md-5 ml-md-4 mb-5">
          <p> When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric
            question ran over her cheek, then she continued her way.</p>

          <P>Lot Area: 1,250 SQ FT<br>
            Bed Rooms: 4<br>
            Bath Rooms: 4<br>
            Garage: 1<br>
            Floor Area: 1,300 SQ FT<br>
            Year Build:: 2018<br>
            Stories: 1<br>
            Roofing: New</p>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-info">
          </div>

        </div>
      </div>
    </div>



  </div>
</section>

@endsection
