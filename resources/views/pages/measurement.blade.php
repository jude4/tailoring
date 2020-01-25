<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Measurement</title>
<style>

.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50px
  }

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #dd4b39;
  color: white;
}

​
/* Darker background on mouse-over */
.btn:hover {
  background-color:blue;
}

.dropbtn{
  background-color:darkturquoise ;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  float: right;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980b9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.footer {
  position:relative;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: darkturquoise;
  color: black;
  text-align: center;

}
* {
  box-sizing: border-box;
}

body {
  background-color: white;
  padding: 30px;
  font-family: verdena;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
  color: darkturquoise;
  text-align: center;
  text-shadow:darkslategrey 3px 2px;
  font-size: 70px;
}

/* Large rounded green border */
hr.new5 {
  border: 2px solid darkturquoise;
  border-radius: 25px;
}

p {
  font-size: 20px;
  color: black;
  font-style: bold;
  }

.row {
  margin: 4px -8px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.bg {
       background: url("images/wallpaper1.jpg");
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center;
       height: 1000px;
     }




img{
      vertical-align: middle;
      width:relative;
      margin-left:auto;
      margin-right: auto;
      height: auto;
      border:0;
      display: block;
      opacity: 0,1 }

.mySlides {
      display: none;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

#dd {
    display: inline-block;
    position: relative;
}

#dd-content {
    display: none;
    position: absolute;
    min-width: 160px;

}

#dd-content a {
    padding: 12px 16px;
    display: block;
}

#dd-content a:hover{
    background: #f1f1f1;
}

#dd:hover #dd-content {
    display: block;

}
</style>
</head>
<body>
        <div id="app">
            <!-- Logo -->
            <div class="logo">
             <a href="#">
             <h2 class="mb-0 site-logo"><img src="{{ asset('images/logo_99.png')}}" alt="Image" class="img-fluid" width="200px" align="left">
             </a>
           </div>

     <!--menu button-->

     <div class="dropdown-hover right">

       <button onclick="myFunction()" class="dropbtn"></i>Menu</button>

       <div id="myDropdown" class="dropdown-content"
       style="right: 0">
         <a href="{{ url('/') }}">Home</a>
         <a class="btn btn-outline-light" href="#" @mouseover="hover = true" ><b>Categories</b></a>
         <hr />
         <div v-if="hover" @mouseleave="hover = false">
             @foreach($categories as $category)
            <a href="{{url('/pages/product', $category->id)}}">{{$category->name}}</a>

        @endforeach

         </div>

     <hr/>
     <a href="{{url('/pages/take-measurement/')}}">Measurement</a>
     <a href="{{url('/about')}}">About</a>

         @if(!auth()->check())
             <a href="{{route('login')}}">Login</a>
             <a href="{{route('register') }}">Sign-up</a>
             @else
             <a href="{{url('users/dashboard')}}">Dashboard</a>
             <a href=""  onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         @endif
       </div>
     </div>


     <script>
     /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
     function myFunction() {
       document.getElementById("myDropdown").classList.toggle("show");
     }

     // Close the dropdown if the user clicks outside of it
     window.onclick = function(event) {
       if (!event.target.matches('.dropbtn')) {
         var dropdowns = document.getElementsByClassName("dropdown-content");
         var i;
         for (i = 0; i < dropdowns.length; i++) {
           var openDropdown = dropdowns[i];
           if (openDropdown.classList.contains('show')) {
             openDropdown.classList.remove('show');
           }
         }
       }
     }
     </script>


     <!-- MAIN (Center website) -->
     <div class="main">

     <h1>SARA COUTURE</h1>
     <hr class="new5">
     <br>
     @include('flash::message')
     <script>
     var slideIndex = 1;
     showSlides();

     function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       var dots = document.getElementsByClassName("dot");
       for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
       }
       slideIndex++;
       if (slideIndex > slides.length) {slideIndex = 1}
       for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
       }
       slides[slideIndex-1].style.display = "block";
       dots[slideIndex-1].className += " active";
       setTimeout(showSlides, 2000); // Change image every 2 seconds
     }
     </script>
     <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h2>
                             Measurement for Blouse
                             <span class="" style="margin-left: ">
                                <button class="btn btn-outline-dark" @click="top = true; buttom = false">Top dress</button>
                                <button class="btn btn-outline-secondary" @click="buttom = true; top = false">Buttom dress</button>
                             </span>
                        </h2>
                    </div>


                    <div class="card-body">
                        <div v-if="top">
                            <form action="{{ url('/pages/measurements') }}" method="POST" >
                                @csrf
                                <h3>Top Dress</h3>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputState">Fabric</label>
                                      <select id="inputState" name="fabric" class="form-control" required>
                                        <option selected>Choose Type of fabric</option>
                                        <option >Cotton</option>
                                        <option >Silk</option>
                                        <option >Stretchy</option>
                                        <option >Chiffon</option>
                                        <option >Crepe</option><option value="ankara">Ankara</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Quantity</label>
                                        <select id="inputState" name="quantity" class="form-control" required>
                                          <option selected>Choose...</option>
                                          <option >1yard</option>
                                            <option >2yards</option>
                                            <option >3yards</option>
                                            <option >4yards</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputState">Length</label>
                                    <select id="inputState" name="length" class="form-control" required="required">
                                      <option selected required>Choose...</option>
                                      <option>Full Length</option>
                                      <option>Half Length</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Bust Size</label>
                                        <input type="text" name="bust_size" class="form-control" id="inputAddress2" placeholder="Your Bust size..." required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Shoulder Size</label>
                                        <input type="text" name="shoulder_size" class="form-control" placeholder="Your Shoulder Size here..." id="inputCity" required>
                                      </div>
                                </div>

                                  <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Sleeve Length</label>
                                        <input type="text" name="sleeve_length" class="form-control" id="inputAddress2" placeholder="Your Sleeve length  ..." required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputAddress2">Round Curve</label>
                                        <input type="text" name="round_curve" class="form-control" id="inputAddress2" placeholder="Your round curve size..." required>
                                      </div>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                                  <button type="submit" class="btn btn-outline-primary">Send</button>
                                  <button class="btn btn-outline-dark" @click="closeFor">Cancle</button>
                            </form>
                        </div>

                        <div v-if="buttom">
                            <form action="{{ url('/pages/measurements') }}" method="POST">
                                @csrf
                                <h3>Buttom Dress</h3>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputState">Fabric</label>
                                      <select id="inputState" name="fabric" class="form-control" required>
                                        <option selected>Choose Type of fabric</option>
                                        <option >Cotton</option>
                                        <option >Silk</option>
                                        <option >Stretchy</option>
                                        <option >Chiffon</option>
                                        <option >Crepe</option><option value="ankara">Ankara</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Quantity</label>
                                        <select id="inputState" name="quantity" class="form-control" required>
                                          <option selected>Choose...</option>
                                          <option >1yard</option>
                                            <option >2yards</option>
                                            <option >3yards</option>
                                            <option >4yards</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputState">Length</label>
                                    <select id="inputState" name="length" class="form-control" required="required">
                                      <option selected required>Choose...</option>
                                      <option>Full Length</option>
                                      <option>Half Length</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Waist Size</label>
                                        <input type="text" name="waist_size" class="form-control" id="inputAddress2" placeholder="Your Bust size..." required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Hip Size</label>
                                        <input type="text" name="Hip_size" class="form-control" placeholder="Your Shoulder Size here..." id="inputCity" required>
                                      </div>
                                </div>

                                  <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Knee Length</label>
                                        <input type="text" name="knee_length" class="form-control" id="inputAddress2" placeholder="Your Sleeve length  ..." required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputAddress2">Thigh</label>
                                        <input type="text" name="thigh" class="form-control" id="inputAddress2" placeholder="Your round curve size..." required>
                                      </div>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                                  <button type="submit" class="btn btn-outline-primary">Send</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-4">



                        <img src="{{asset('images/tape.jpg')}}" alt="">

            </div>
        </div>

                </div>
                </div>

            </div>
        </div>
    </div>
     <!-- END GRID -->

     <!-- END MAIN -->
     <div class="footer">
      <br>follow us on:

     <!-- Add font awesome icons -->
     <a href="https://www.facebook.com/Sarachoko" class="fa fa-facebook"></a>
     <a href="https://twitter.com/SarahAgol"class="fa fa-twitter"></a>
     <a href="https://www.instagram.com/sarachoko/" class="fa fa-instagram"></a>


       <address>
         <p>68, Wire Road Benin city | Tel: +2348162269823 | sarachoko@ymail.com</p>
         </address>
        <P>
          HOURS<br>
          Monday-Fridays:9am-6pm<br>
        </P>
      </div>

        </div>

        <script src="{{asset('js/app.js')}}"></script>

        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    hover: false,
                    top: false,
                    buttom: false
                }
            });
        </script>
</body>
</html>
