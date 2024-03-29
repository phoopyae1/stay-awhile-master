@extends('layouts.app')
@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin-top:90px; margin-bottom:20px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="search-wrap-1 ftco-animate p-4 px-5">
          <form action="#" class="search-property-1">
            <div class="row">
              <div class="col-lg align-items-end">
                <div class="form-group">
                  <label for="#">Location</label>
                  <div class="form-field">
                    <div class="icon"><span class="ion-ios-search"></span></div>
                    <input type="text" class="form-control" placeholder="City/Locality Name">
                  </div>
                </div>
              </div>
              <div class="col-lg align-items-end">
                <div class="form-group">
                  <label for="#">Property Type</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Type</option>
                        <option value="">Commercial</option>
                        <option value="">- Office</option>
                        <option value="">Residential</option>
                        <option value="">Villa</option>
                        <option value="">Condominium</option>
                        <option value="">Apartment</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg align-items-end">
                <div class="form-group">
                  <label for="#">Property Status</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Type</option>
                        <option value="">Rent</option>
                        <option value="">Sale</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg align-items-end">
                <div class="form-group">
                  <label for="#">Price Limit</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">$5,000</option>
                        <option value="">$10,000</option>
                        <option value="">$50,000</option>
                        <option value="">$100,000</option>
                        <option value="">$200,000</option>
                        <option value="">$300,000</option>
                        <option value="">$400,000</option>
                        <option value="">$500,000</option>
                        <option value="">$600,000</option>
                        <option value="">$700,000</option>
                        <option value="">$800,000</option>
                        <option value="">$900,000</option>
                        <option value="">$1,000,000</option>
                        <option value="">$2,000,000</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg align-self-end">
                <div class="form-group">
                  <div class="form-field">
                    <input type="submit" value="Search" class="form-control btn btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-slider owl-carousel">
  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container d-md-block d-none">
      <div class="row d-md-flex slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <div class="text pb-4 pt-5">
            <h1 class="mb-4">Taylor Plan, Orchard House</h1>
            <div class="desc">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="img" style="background-image:url(images/bg_2.jpg);">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-md-6 col-lg-4">
            <div class="details p-5">
              <span class="cat d-block mb-4">House</span>
              <h3 class="mb-3">Taylor Plan, Orchard House</h3>
              <p class="loc"><span class="icon-my_location mr-2"></span> Melbourne, Vic 3004, NC USA</p>
              <ul class="mb-4">
                <li><span>Area:</span> <span>250sqft</span></li>
                <li><span>Bedroom</span> <span>3</span></li>
                <li><span>Bathroom:</span> <span>3</span></li>
                <li><span>Garage:</span> <span>1</span></li>
              </ul>
              <p><a href="#" class="btn btn-black btn-outline-black py-3">View Properties</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container d-md-block d-none">
      <div class="row d-md-flex slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <div class="text pb-4 pt-5">
            <h1 class="mb-4">Rose Villa, USA</h1>
            <div class="desc">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="img" style="background-image:url(images/bg_1.jpg);">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-md-6 col-lg-4">
            <div class="details p-5">
              <span class="cat d-block mb-4">House</span>
              <h3 class="mb-3">Rose Villa, USA</h3>
              <p class="loc"><span class="icon-my_location mr-2"></span> Melbourne, Vic 3004, NC USA</p>
              <ul class="mb-4">
                <li><span>Area:</span> <span>250sqft</span></li>
                <li><span>Bedroom</span> <span>3</span></li>
                <li><span>Bathroom:</span> <span>3</span></li>
                <li><span>Garage:</span> <span>1</span></li>
              </ul>
              <p><a href="#" class="btn btn-black btn-outline-black py-3">View Properties</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row justify-content-start mb-5">
      <div class="col-md-8 heading-section ftco-animate">
        <h2 class="mb-4">Recently Added</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-properties owl-carousel">
          <div class="item">
            <div class="project">
              <div class="img">
                <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text">
                  <span>Sale</span>
                  <h3><a href="properties.html">Fatima <br> Subdivision</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">$120,000</h4>
                <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="project">
              <div class="img">
                <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text">
                  <span>Sale</span>
                  <h3><a href="properties.html">Fatima <br> Subdivision</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">$120,000</h4>
                <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="project">
              <div class="img">
                <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text">
                  <span>Sale</span>
                  <h3><a href="properties.html">Fatima <br> Subdivision</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">$120,000</h4>
                <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="project">
              <div class="img">
                <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text">
                  <span>Sale</span>
                  <h3><a href="properties.html">Fatima <br> Subdivision</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">$120,000</h4>
                <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="project">
              <div class="img">
                <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text">
                  <span>Sale</span>
                  <h3><a href="properties.html">Fatima <br> Subdivision</a></h3>
                </div>
              </div>
              <div class="desc pt-3">
                <h4 class="price">$120,000</h4>
                <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
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
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/About.jpg);">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-4 ml-md-4 pl-md-5">
          <h2 class="mb-4">We can help you to find luxurious and beautiful properties in your local area</h2>
        </div>
        <div class="pl-md-5 ml-md-4 mb-5">
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
          <div class="row my-5 pt-2">
            <div class="col-lg-6">
              <div class="services-2 px-4 text-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-pin"></span></div>
                <div class="text">
                  <h3>Find Places Anywhere In The World</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 px-4 text-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-detective"></span></div>
                <div class="text">
                  <h3>We Have Agents With Experience</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 px-4 text-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-house"></span></div>
                <div class="text">
                  <h3>Buy &amp; Rent Modern Properties</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 px-4 text-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-purse"></span></div>
                <div class="text">
                  <h3>Making Money</h3>
                </div>
              </div>
            </div>
          </div>
          <p><a href="#" class="btn-custom">Learn More <span class="ml-2 ion-ios-arrow-forward"></span></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading-section mb-5 ftco-animate">
          <h2 class="mb-4">Welcome to Hamlet A Real Estate Agency</h2>
          <p>Far far away, behind the word mountains, far from the countries</p>
        </div>
        <div class="about-img img p-5 d-flex align-items-center" style="background-image: url(images/bg_1.jpg);">
          <div class="about-div">
            <h4 style="color:white;">Buying A Properties the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</h4>
            <p class="mb-0"><a href="#" class="btn-custom-2">Read more <span class="ml-2 icon-long-arrow-right"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="img img-3 p-5 d-flex align-self-stretch border" style="background-image: url(images/about-3.jpg);">
          <div class="about-div bg-darken about-wrap">
            <h4 style="color:white;">Renting A Properties Pointing has no control about the blind texts it is an almost unorthographic life.</h4>
            <p class="mb-0"><a href="#" class="btn-custom-2">Read more <span class="ml-2 icon-long-arrow-right"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-no-pt testimony-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4">Our satisfied customer says</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p class="mb-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="mb-4">
                  <p class="name">Gary Smith</p>
                  <span class="position">Buyer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
              </div>
              <div class="text">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p class="mb-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="mb-4">
                  <p class="name">Ronald Dock</p>
                  <span class="position">Buyer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
              </div>
              <div class="text">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p class="mb-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="mb-4">
                  <p class="name">Donald Simon</p>
                  <span class="position">Buyer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p class="mb-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="mb-4">
                  <p class="name">Henry Smith</p>
                  <span class="position">Broker</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p class="mb-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="mb-4">
                  <p class="name">John Buff</p>
                  <span class="position">Agent</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-5 heading-section ftco-animate">
        <h2 class="mb-4">Press Releases</h2>
        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        <p><a href="#" class="btn-custom">Read our blog <span class="ml-2 ion-ios-arrow-forward"></span></a></p>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-2">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-2">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-2">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">Pointing has no control about the blind texts</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt ftco-counter img ftco-animate" id="section-counter">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-start">
      <div class="col-lg-10">
        <div class="bg-counter p-4">
          <div class="row py-2 d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="1000">0</strong>
                  <span>Properties</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="351">0</strong>
                  <span>Happy Clients</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="564">0</strong>
                  <span>Finished Projects</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="300">0</strong>
                  <span>Working Days</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
