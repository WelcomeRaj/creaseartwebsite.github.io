
<?php
//session_start();
include( "config.php");
?>
<!doctype html>
<html lang="en">
<head>
  <title>Creaseart</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
  <link rel="stylesheet" href="css/style.css">
  <script src="//code.jquery.com/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <!-- navbar section -->

   

  <div id="par-js">
 <div class="container-fluid mainsec ">
  <nav class="navbar container navbar-expand-lg pr-3 pl-3">
      <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-bars " style="font-size: 30px;"></i>
      </button>

      <!-- SidebarLEFT -->

      <!-- Toggle Bar -->
          <div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog leftsidebar" role="document">
                  <div class="modal-content">
      
                      <div class="modal-header " style="background:url(img/ham/profile_bg_img.png)">
                        <div class="col-10">
                           <div class="profilelogstae my-4">
                             <div class="d-flex justify-content-around align-items-center">
                               <img src="img/ham/profileimgdemo.png" alt="" style="width: 6rem;">
                               <div>
                                 <div class="userlog">
                                   <p><b>Vivek Rawat</b> </p>
                                   <small><b>+91  7539910300</b> </small><br>
                                   <small class="m-1"><a href="profile.html">Edit Profile</a></small>
                                 </div>
                               </div>
                             </div>
                            
                          </div>
                        </div>
                        <div class="col-2">
                          <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>	
                        </div>
                          
                         
                      </div>
      
                      
                      
                      <div class="modal-body sidebar-item" style="background: url(img/ham/dashboard_bg_img.png); background-position: center;">
                          <ul>
                            <!-- <li><span><p class="" id="myModalLabel" data-toggle="modal" data-dismiss="modal" data-target="#modallogin" style="padding: .8rem 1.6rem;
                              margin: 0rem 7rem 0rem 0rem; cursor: pointer; color: white; background: #B52421">Login / Signup</p></span> </li>
                              <hr> -->
                            <li><img src="img/ham/edit_profile.svg" alt="">&nbsp; <a class="" href="profile.html">My Account </a></li>
                            <li><img src="img/ham/orderhere.svg" alt=""> &nbsp;<a class="" data-toggle="modal" data-target="#enterpin" data-dismiss="modal" href="">Order Here</a></li>
                            <li><img src="img/ham/coupons_offers.svg" alt="" style="width: 1.3rem;">&nbsp; <a class="" href="offers.html">Offers</a></li>
                            <li><img src="img/ham/supportlight.svg" alt="">&nbsp; <a class="" href="support.html">Support</a></li>
                            <li><img src="img/ham/faqlight.svg" alt="">&nbsp; <a class="" href="faqs.html">FAQs</a></li>
                            <li><img src="img/ham/cartlight.svg" alt="">&nbsp; <a class="" href="checkout.html">Cart</a></li>
                            <li><img src="img/ham/about_us.svg" alt="">&nbsp; <a class="" href="about.html">About Us</a></li>
                            <li><img src="img/ham/supportlight.svg" alt="">&nbsp; <a class="" href="feedback.html">Feedback</a></li>
                            <li><img src="img/ham/rate_us.svg" alt="">&nbsp; <a class="" href="">Rate Us</a></li>
                            <hr>
                            <!-- <li> <a class="" href="#"><b>Products</b></a></li>
                            <hr>
                            <ul style="margin-left: 2rem;">
                              <li><a href="drive.html"><b>Drive</b> </a></li>
                              <li><a href="selfdrive.html"><b>Self Delivery</b> </a></li>
                              <li><a href="#"><b>Starter Kit</b> </a></li>
                            </ul> -->
                          </ul>
                          
                          <div class="aaqrbadges ">
                            <div class="row justify-content-around">
                                <div class="sidebarbadge ">
                                  <img class="googlebadge" src="img/gplayqr.png" alt="">
                                </div>
                                <div class="sidebarbadge text-center">
                                  <img class="iosbadge" src="img/astoreqr.png"  alt="">
                                </div>
                            </div>
                            
                          </div>
                      </div>
      
                  </div><!-- modal-content -->
              </div><!-- modal-dialog -->
          </div><!-- modal -->

      <a class="navbar-brand logo" href="index.php"><img src="img/creaseart_logo.png" alt=""></a>
      
      <div class="collapse navbar-collapse " id="navbarText">
        <ul class="navbar-nav m-auto ">
          <li class="nav-item ml-2 mr-2 ">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item ml-2 mr-2">
            <a class="nav-link" href="#"></a>
          </li>
       </ul>
      </div>
      <span class="navbar-text logsignbtns">
        

        <!-- Button Sign up trigger modal -->

              <button type="button" class="btn signbtn" data-toggle="modal" data-target="#modalsignup">
                  <a href="#" class="signbtn"><b>Sign Up</b> </a>
                </button>
                

                <!-- RIGHT SIDEBAR -->

                <div class="modal right fade" id="modalsignup" tabindex="-1" role="dialog" aria-labelledby="mysignupmodal">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sign up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                  
                          <div class="modal-body">
                            <form id="signupform" action="signup.php" method="POST">
                              <h3>Create Account</h3>
                              
                              <fieldset>
                                <input placeholder="Your Phone Number" type="tel" name="phone_number" pattern="^\d{10}$" required>
                              </fieldset>
                              <fieldset>
                                <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                              </fieldset>
                              <fieldset>
                                <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                              </fieldset>
                              <fieldset>
                                <input placeholder="Your Password" type="password" name="password" tabindex="4" required>
                              </fieldset>
                              <fieldset>
                                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                              </fieldset>
                              <p class="text-center"><b>or </b></p>
                              <div class="text-center">
                              <button class="loginBtn loginBtn--facebook">
                                Login with Facebook
                              </button>
                              
                              <button class="loginBtn loginBtn--google">
                                Login with Google
                              </button>
                              </div>
                              <p class="copyright">Already have and acoount ?<a href="#" target="_blank" data-dismiss="modal" data-toggle="modal" data-target="#modallogin" title="gotologin"> Login </a></p>
                            </form>
                          </div>
                  
                      </div>
                  </div>
                </div>




              




                <!-- Button Login trigger modal -->


                <button type="button" class="btn loginbtn" data-toggle="modal" data-target="#modallogin">
                  <a href="#" class="loginbtn"><b>Login</b> </a>
                </button>
                
                <!-- LOGIN Modal -->


                <div class="modal right fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myloginmodal">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                  
                          <div class="modal-body">
                            <form id="loginform" action="login.php" method="post">
                              <fieldset>
                                  <input placeholder="Enter Phone Number " type="tel" name="phone_number" tabindex="3" pattern="^\d{10}$" required>
                                </fieldset>
                                <fieldset>
                                  <input placeholder="Your Password" type="password" name="password" tabindex="4" required>
                                </fieldset>
                                <fieldset>
                                  <a href=""><button name="submit" type="submit" id="submit" data-submit="...Sending">Login</button>
                                </fieldset>
                                <p class="text-center"><b>or </b></p>
                                  <div class="text-center">
                                  <button class="loginBtn loginBtn--facebook">
                                    Login with Facebook
                                  </button>
                                  
                                  <button class="loginBtn loginBtn--google">
                                    Login with Google
                                  </button>
                                  </div>
                                <p class="copyright">New to creaseart ? <a href="#" target="_blank" data-dismiss="modal" data-toggle="modal" data-target="#modalsignup" title="gotologin">Create an account</a></p>
                              </form>
                          </div>
                  
                      </div>
                  </div>
                </div>


               
                

      </span>  
      <span class="cartmain">
        <div>
         <a href="checkout.html"><img src="img/shopping-cart.png" alt=""></a> 
        </div>
      </span>     
                  
                      
  </nav>
    
    <!-- hero section -->


    <div class="container herosec" >
    <div class="row justify-content-around align-items-center " >
        <div class="col-md-8 my-3 order-md-1 order-sm-2 order-2">
            <h1 style="color: #282C3F; font: Montserrat;">Laundry Solution For You</h1>
            <small><b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b> </small>
            <div class="inputlocation mt-4">
                <div class="searchlocation">
                  <input type=""  class="inputlocationfield" placeholder="Choose Your City "/>
                  <span><img style="margin-left: -1.7rem; margin-top: -3px;" src="img/location.svg"></span>
                  <span class="submitlocbtn"> <a href=""></a>
                    <!-- <i class="fas fa-compass" style="font-size: 18px; padding: 0 5px;"></i> -->
                    FIND LAUNDRY
                  </span>
                </div>
                
            </div>
            <div class="my-3"><h4 class="text-secondary">POPULAR CITIES IN INDIA</h4></div>
            <div class="cities container mt-3">
                
                <div class="row d-flex justify-content-around">
                  <div class="col-3"><a href="#"><small><b>Gurgoan</b> </small></a></div>
                  <div class="col-3"><a href="#"><small><b>Delhi</b></small></a></div>
                  <div class="col-3"><a href="#"><small><b>Hyderabad</b></small></a></div>
                  <div class="col-3"><a href="#"><small><b>Bangalore </b></small></a></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 order-md-2 order-sm-1 order-1 text-center ">
          <img class="rotatinghero" src="img/Ellipse 443.png" alt="">
        </div>
    </div>
    </div>
    
    
  </div>
  </div>

    <div class="workings container mt-5 ">
        <div class="workhead text-center">
            <h4><b>HOW IT WORKS ?</b></h4>
            <p style="font-weight: 500;">We have made laundry service easy and fast</p>
        </div>
        <div class="row justify-content-around pt-3">
            <div class="col-md-3 text-center">
                <img src="img/icon 1.png">
                <p>
                  Find the best laundry service near you and order.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <img src="img/icon 2.png" alt="">
                <p>
                    Find the best laundry service near you and order.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <img src="img/icon 3.svg" alt="">
                <p>
                    Find the best laundry service near you and order.
                </p>
            </div>
            
        </div>
    </div>



    <div class="container appsec  " style="border-top: 1px solid rgba(0, 0, 0, 0.247);" >

        <div class="row my-5 py-3 align-items-center text-center" >
            <div class="col-md-6">
                <h1>Laundry Just One Step Away</h1>
                <p class="text-secondary"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odio eaque, harum dignissimos nobis, consequuntur corrupti minima exercitationem libero fugit error excepturi veritatis magni blanditiis.</p>
                <div class="row ">
                    <div class="col-6">
                        <img class="googlebadge" src="img/gplayqr.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="iosbadge" src="img/astoreqr.png"  alt="">
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <img class="" src="img/App_Mockup.png" style="width: 500px; height: auto;" alt="">
            </div>
        </div>

    </div>


    <div class="partners container my-5 py-3 ">
      <div class="partnerhead">
          <h4><b>Lorem, ipsum ?</b></h4>
          <p style="font-weight: 500;">We have made laundry service easy and fast</p>
      </div>
      <div class="row justify-content-around partner pt-3">
          <div class="col-md-3 col-6 my-2 text-center">
              <img src="img/user.png" alt="">
              <div class="mt-3">
              <h5>
                  Users
              </h5>
              <small>Lorem ipsum dolor sit amet.</small>
              <div><small class="homesign"><span type="" data-toggle="modal" data-target="#modalsignup">
                <a href="javascript:;" class=""><b>Sign Up</b> </a>
              </span></small></div>
              
               </div>
          </div>

          <div class="col-md-3 col-6 my-2 text-center">
              <img src="img/vendor.png" alt="">
              <div class="mt-3">
              <h5>
                  Vendor
              </h5>
              <small>Lorem ipsum dolor sit amet.</small>
              <div><small><a class="homepartner" href="vendor.html"><b>Partner with us</b> </a></small></div>
              </div>
          </div>

          <div class="col-md-3 col-6 my-2 text-center">
              <img src="img/rider.png" alt="">
              <div class="mt-3">
              <h5>
                  Riders
              </h5>
              <small>Lorem ipsum dolor sit amet.</small>
              <div><small><a class="homerider" href="rider.html"><b>Join Us</b> </a></small></div>
              
              </div>
          </div>

          <div class="col-md-3 col-6 my-2 text-center">
            <img src="img/franchise.png" alt="">
            <div class="mt-3">
            <h5>
                Franchise
            </h5>
            <small>Lorem ipsum dolor sit amet.</small>
            <div><small><a class="homefranchise" href="javascript:;"><b>Coming Soon</b> </a></small></div>
            </div>
        </div>
          
      </div>
  </div>
    
  <div class="container mt-5 videosec">
    <div class="row">
      <div class="video col-12 text-center pt-3">
        <img src="img/video.png" alt="">
      </div>
      <div class="videocontent">
      <h3 class="text-white">See What Our Partners Have To Say</h3>
      <button style="border:none; background: #fff; padding: 10px 20px;"><i class="fa fa-play" aria-hidden="true"></i> Watch a 30 second video</button>
      </div>
    </div>
    
  </div>



  <div class="nearbysec container my-5 ">
    <div class="nearbyhead">
        <h4><b>Offers Near You</b></h4>
        
    </div>
    <div class="row d-flex justify-content-center nearby pt-3">
        <div class="col-md-3 col-6 nearbybox my-2">
            <div class="nearbyshops">
             <a href="shoppage.html"> <img src="img/nearby1.png" alt="">
            </div>
            <div class="offertag">
              <span>50% OFF</span>
            </div>
            <div class="d-flex justify-content-space-between shopdetails">
              <div class="shopdet">
              <h6 class="shopname">Super Fine Dry Cleaning</h6>
              <h6><a href=""></a>Sec 40, gurgoan</h6>
              </div>
              <div class="ml-3">
                <button class="distance m-1">400m</button><br>
                <button class="ratings m-1"><i class="fas fa-star "></i><span>4.5</span> </button>
              </div>
            </div></a>
             
        </div>

        <div class="col-md-3 col-6 nearbybox my-2">
          <div class="nearbyshops">
           <a href="shoppage.html"> <img src="img/nearby1.png" alt="">
          </div>
          <div class="offertag">
            <span>50% OFF</span>
          </div>
          <div class="d-flex justify-content-space-between shopdetails">
            <div class="shopdet">
            <h6 class="shopname">Super Fine Dry Cleaning</h6>
            <h6><a href=""></a>Sec 40, gurgoan</h6>
            </div>
            <div class="ml-3">
              <button class="distance m-1">400m</button><br>
              <button class="ratings m-1"><i class="fas fa-star "></i><span>4.5</span> </button>
            </div>
          </div></a>
           
      </div>

        <div class="col-md-3 col-6 nearbybox my-2">
          <a href="shoppage.html">
          <div class="nearbyshops">
            <img src="img/nearby2.png" alt="">
          </div>
          <div class="offertag">
            <span>50% OFF</span>
          </div>
          <div class="d-flex justify-content-around shopdetails">
            <div class="shopdet">
            <h6 class="shopname">Super Fine Dry Cleaning</h6>
            <h6><a href=""></a>Sec 40, gurgoan</h6>
            </div>
            <div class="ml-3">
              <button class="distance m-1">400m</button><br>
              <button class="ratings m-1"><i class="fas fa-star "></i><span>4.5</span></button>
            </div>
          
          </div>
          </a>
      </div>

      <div class="col-md-3 col-6 nearbybox my-2">
        <div class="nearbyshops">
          <img src="img/nearby3.png" alt="">
        </div>
        <div class="offertag">
          <span>50% OFF</span>
        </div>
        <div class="d-flex justify-content-space-between shopdetails">
          <div class="shopdet">
          <h6 class="shopname">Super Fine Dry Cleaning</h6>
          <h6><a href=""></a>Sec 40, gurgoan</h6>
          </div>
          <div class="ml-3">
            <button class="distance m-1">400m</button><br>
            <button class="ratings m-1"><i class="fas fa-star "></i><span>4.5</span></button>
          </div>
        </div>
         
    </div>

       
        
    </div>
</div>


    <!-- footer section -->

    <div class="">
      <script>
        $.get("footer.html", function(data){
            $("#footerjs").replaceWith(data);
        });
        </script>
        <div class="container-fluid " id="footerjs" ></div>
    </div>
      


<!-- MODAL pincode pop up -->


<!-- Modal -->
<div class="modal fade in" id="enterpin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div>
          <img src="img/creaseart_logo-1.png" alt="">
        </div>
        <div class="my-4">
          <p style="color: #B52421;"><b>Enter your Location to find vendors near you.</b> </p>
        </div>
        <div>
          <div class="my-2">
            <input type="pincode" placeholder="Location/Pincode/City">
          </div>
          <div class="my-2">
            <button class="pinsubmitbtn" onclick="location.href = 'shops.html';" type="submit">Submit</button>
          </div>
          <style>
            input[type="pincode"] {
               padding: .5rem 3rem;
               text-align: center;
               border: none;
               width: 60%;
               box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 1px -18px inset;
            }
            .pinsubmitbtn{
              padding: .5rem 3rem;
              width: 60%;
              box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            }
          </style>
          
        </div>
        
      </div>
    </div>
  </div>
</div>






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>