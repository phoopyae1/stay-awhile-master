@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Properties</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
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
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="project">
                <div class="img">
                  <img src="images/work-9.jpg" class="img-fluid" alt="Colorlib Template">
                  <div class="text">
                    <span>Sale</span>
                    <h3><a href="/properties-single">Fatima <br> Subdivision</a></h3>
                  </div>
                </div>
                <div class="desc pt-3">
                  <h4 class="price">$120,000</h4>
                  <p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters my-5">
            <div class="col text-center">
              <div class="block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
