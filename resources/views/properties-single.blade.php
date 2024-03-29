@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Properties Single</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="properties.html">Properties <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Single <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="search-wrap">
            <h3>Advance Search</h3>
            <form action="#" class="search-property">
              <div class="row">
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Keyword</label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-pencil"></span></div>
                      <input type="text" class="form-control" placeholder="Keyword">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Location</label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-pencil"></span></div>
                      <input type="text" class="form-control" placeholder="City/Locality Name">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
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
                <div class="col-md-12 align-items-end ftco-animate">
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
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Agents</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Any</option>
                          <option value="">Jonh Doe</option>
                          <option value="">Doe Mags</option>
                          <option value="">Kenny Scott</option>
                          <option value="">Emily Storm</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Min Beds</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Min Bathroom</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Min Price</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Min Price</option>
                          <option value="">$1,000</option>
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
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Max Price</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Max Price</option>
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
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Min Area <span>(sq ft)</span></label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-pencil"></span></div>
                      <input type="text" class="form-control" placeholder="Min Area">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-items-end ftco-animate">
                  <div class="form-group">
                    <label for="#">Max Area <span>(sq ft)</span></label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-pencil"></span></div>
                      <input type="text" class="form-control" placeholder="Max Area">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-self-end ftco-animate">
                  <div class="form-group">
                    <div class="form-field">
                      <input type="submit" value="Search" class="form-control btn btn-primary">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div><!-- end -->
        <div class="col-md-9 properties-single">
          <div class="single-slider owl-carousel">
            <div class="item">
              <div class="properties-img" style="background-image: url(images/work-1.jpg);"></div>
            </div>
            <div class="item">
              <div class="properties-img" style="background-image: url(images/work-2.jpg);"></div>
            </div>
            <div class="item">
              <div class="properties-img" style="background-image: url(images/work-3.jpg);"></div>
            </div>
          </div>
          <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
            <h2>Fatima Columbus House</h2>
            <p class="rate mb-4">
              <span class="loc"><a href="#"><i class="icon-map"></i> 291 South 21th Street, Suite 721 New York NY 10016</a></span>
            </p>
            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            <div class="d-md-flex mt-5 mb-5">
              <ul>
                <li><span>Lot Area: </span> 1,250 SQ FT</li>
                <li><span>Bed Rooms: </span> 4</li>
                <li><span>Bath Rooms: </span> 4</li>
                <li><span>Garage: </span> 1</li>
              </ul>
              <ul class="ml-md-5">
                <li><span>Floor Area: </span> 1,300 SQ FT</li>
                <li><span>Year Build:: </span> 2018</li>
                <li><span>Stories: </span> 1</li>
                <li><span>Roofing: </span> New</li>
              </ul>
            </div>
            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          </div>
          <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
            <h3 class="mb-4">Take A Tour</h3>
            <div class="block-16">
              <figure>
                <img src="images/image_2.jpg" alt="Image placeholder" class="img-fluid">
                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
              </figure>
            </div>
          </div>

          <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
            <h4 class="mb-4">Review &amp; Ratings</h4>
            <div class="row">
              <div class="col-md-6">
                <form method="post" class="star-rating">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                       <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                   </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
