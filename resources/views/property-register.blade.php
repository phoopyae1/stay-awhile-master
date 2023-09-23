@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
<div id="mapid"></div>
<style>
    #mapid {
        height: 180px;
    }

    #wrapper {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        padding: 30px 0;

        .form-group {
            margin-bottom: 0;
            text-align: left;
        }

        #mapid {
            height: 180px;
        }
    }
</style>

<fieldset>

    <div class="form-group">
        <div class="col-md-6">

            <div class="container offset-lg-5">
                <form action="{{URL::to('/property')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <br>
                        <h2>Register Your Property</h2>
                        <label for="Property Category">Property Category:</label>
                        <select onchange="updateChar();" class="form-control" name="category" id="category">
                            <option value="Hotel">Hotel</option>
                            <option value="Apartment">Apartment</option>
                            <option value="House">House</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Type">Property Type:</label>
                        <select class="form-control" name="type" id="type">
                            <option value="Business Hotel">Business Hotel</option>
                            <option value="Bed and Breakfast">Bed and Breakfast</option>
                            <option value="Motel">Motel</option>
                            <option value="Suite">Suite</option>
                            <option value="Inn">Inn</option>
                            <option value="Resort">Resort</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Privacy">Property Privacy:</label>
                        <select class="form-control" name="privacy">
                            <option value="Private">Private</option>
                            <option value="Shared">Shared</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Setup">Property Setup:</label>
                        <select class="form-control" name="setup">
                            <option value="Fully Furnished">Fully Furnished</option>
                            <option value="Unfurnished">Unfurnished</option>
                            <option value="Semi Furnished">Semi Furnished</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Ownership">Property Ownership:</label>
                        <select class="form-control" name="onwership">
                            <option value="Private">Private</option>
                            <option value="Public">Public</option>
                            <option value="Co-Owned">Co-Owned</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Guest Limitation">Guest Limitation:</label>
                        <input type="number" class="form-control" placeholder="1" name="guest_limitation" min="1" max="15">
                    </div>
                    <div class="form-group">
                        <label for="Bathroom Count">Bathroom Count:</label>
                        <input type="number" class="form-control" placeholder="1" name="bathroom_count" min="1" max="15">
                    </div>
                    <div class="form-group">
                        <label for="Bathroom Type">Bathroom Type:</label>
                        <select class="form-control" name="bathroom_type">
                            <option value="Private">Private</option>
                            <option value="Shared">Shared</option>
                            <option value="Hall">Hall</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property City">Property City:</label>
                        <select class="form-control" name="city">
                            <option value="Yangon">Yangon</option>
                            <option value="Mandalay">Mandalay</option>
                            <option value="Nay Pyi Taw">Nay Pyi Taw</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Country">Property Country:</label>
                        <select class="form-control" name="country">
                            <option value="Myanmar">Myanmar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Property Street">Property Street:</label>
                        <input type="string" class="form-control" placeholder="Enter the Street of Property" name="street">
                    </div>
                    <div class="form-group">
                        <label for="Property Number">Property Number:</label>
                        <input type="string" class="form-control" placeholder="Enter the Number of Property" name="number">
                    </div>
                    <div class="form-group">
                        <label for="Property Zip Code">Property Zip Code:</label>
                        <input type="string" class="form-control" placeholder="Enter the Zip Code of Property" name="zip_code">
                    </div>
                    <div class="form-group">
                        <label for="Price Per Month">Price Per Month:</label>
                        <input type="string" class="form-control" placeholder="Enter the Price Per Month" name="price_per_month">
                    </div>
                    <div class="form-group">
                        <label for="Price Per Day">Price Per Day:</label>
                        <input type="string" class="form-control" placeholder="Enter the Price Per Day" name="price_per_day">
                    </div>
                    <button type="submit" class="btn btn-primary">Register Property</button>
                </form>

                <br>
                <br>
            </div>
            <script type="text/javascript">
                function updateChar() {

                    document.getElementById("type").innerHTML = "";

                    var category = document.getElementById('category').value;
                    var sel = document.getElementById('type');

                    if (category === "Hotel") {

                        var opt1 = document.createElement('option');
                        opt1.appendChild(document.createTextNode('Business Hotel'));
                        opt1.value = 'Business Hotel';
                        sel.appendChild(opt1);

                        var opt2 = document.createElement('option');
                        opt2.appendChild(document.createTextNode('Bed and Breakfast'));
                        opt2.value = 'Bed and Breakfast';
                        sel.appendChild(opt2);

                        var opt3 = document.createElement('option');
                        opt3.appendChild(document.createTextNode('Motel'));
                        opt3.value = 'Motel';
                        sel.appendChild(opt3);

                        var opt4 = document.createElement('option');
                        opt4.appendChild(document.createTextNode('Suite'));
                        opt4.value = 'Suite';
                        sel.appendChild(opt4);

                        var opt5 = document.createElement('option');
                        opt5.appendChild(document.createTextNode('Inn'));
                        opt5.value = 'Inn';
                        sel.appendChild(opt5);

                        var opt6 = document.createElement('option');
                        opt6.appendChild(document.createTextNode('Resort'));
                        opt6.value = 'Resort';
                        sel.appendChild(opt6);


                    } else if (category === "Apartment") {

                        var opt1 = document.createElement('option');
                        opt1.appendChild(document.createTextNode('Condo'));
                        opt1.value = 'Condo';
                        sel.appendChild(opt1);

                        var opt2 = document.createElement('option');
                        opt2.appendChild(document.createTextNode('Residence'));
                        opt2.value = 'Residence';
                        sel.appendChild(opt2);

                        var opt3 = document.createElement('option');
                        opt3.appendChild(document.createTextNode('Flat'));
                        opt3.value = 'Flat';
                        sel.appendChild(opt3);


                    } else if (category === "House") {

                        var opt1 = document.createElement('option');
                        opt1.appendChild(document.createTextNode('Villa'));
                        opt1.value = 'Villa';
                        sel.appendChild(opt1);

                        var opt2 = document.createElement('option');
                        opt2.appendChild(document.createTextNode('Country House'));
                        opt2.value = 'Country House';
                        sel.appendChild(opt2);

                        var opt3 = document.createElement('option');
                        opt3.appendChild(document.createTextNode('Cabin'));
                        opt3.value = 'Cabin';
                        sel.appendChild(opt3);

                        var opt4 = document.createElement('option');
                        opt4.appendChild(document.createTextNode('Town House'));
                        opt4.value = 'Town House';
                        sel.appendChild(opt4);

                    }
                }
                //var mymap = L.map('mapid').setView([16.866070, 96.195129], 13);

              /*  var mymap = L.map('mapid', {
                    doubleClickZoom: true
                }).locate({
                    setView: true,
                    maxZoom: 16
                }); */

                navigator.geolocation.getCurrentPosition(function(pos) {
                      var mymap = L.map('mapid').setView([pos.coords.latitude, pos.coords.longitude],15);
                      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                          maxZoom: 18,
                          id: 'mapbox.streets',
                          accessToken: 'pk.eyJ1IjoicGhvbmVteWF0a2hpbmU4OCIsImEiOiJjanlneTVhc28wNjNuM21wbGh1OGpwdm9rIn0.YbPlhA8WUT_OA42WSUZxQw'
                      }).addTo(mymap);
                      var marker = L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(mymap);
                      marker.bindPopup("<b>You are currently here</b><br>Traveller!").openPopup();
                });



            </script>
</fieldset>

@endsection
