<!doctype html>
<html lang="en">
<head>
  <title>Welcome to your profile</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">
  <script src="//code.jquery.com/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="js-datepick/dp-light.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #F6F6F6;">

  <!-- navbar section -->
  <div class="container-fluid nav2">
    
    <script>
      $.get("nav.html", function(data){
          $("#navholder").replaceWith(data);
      });
      </script>
      <div class="" id="navholder"></div>
  </div>


  </div>



    <div class="container mt-4 mb-4" id="acdetails">

        <div class="row ">
            <!-- <div class="col-md-3 pb-3 pt-3 edittabs">
                <div class="text-center">
                    <img src="img/profile picture.png" alt="">
                    <h6 class="username">Vivek</h6>
                    <p class="location">Gurgugram,Haryana</p>
                </div>
                <div class="nav  flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-editpfp-tab" data-toggle="pill" href="#v-pills-editpfp" role="tab" aria-controls="v-pills-editpfp" aria-selected="true">Edit Profile</a>
                  <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">My Orders</a>
                  <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false">Manage Address</a>
                  <a class="nav-link" id="v-pills-coupons-tab" data-toggle="pill" href="#v-pills-coupons" role="tab" aria-controls="v-pills-coupons" aria-selected="false">Coupons & Offers</a>
                </div>
                    
                    
    
            </div> -->
            <div class="col-md-3">
              <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" name="profile_image" style="background-image: url('img/profile\ picture.png');">
                    </div>
                </div>
                <div class="text-center my-2">
                  <h6 class="username" name="name"><b>Vivek Rawat</b> </h6>
                  <small class="location" address="address">Gurgugram , Haryana</small>
              </div>
            </div>
            <script>
                   function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                            $('#imagePreview').hide();
                            $('#imagePreview').fadeIn(650);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imageUpload").change(function() {
                    readURL(this);
                });
            </script>
            </div>

            <div class="col-md-9 tabcon">
              
                  <div class="nav justify-content-around justify-content-xs-center flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-editpfp-tab" data-toggle="pill" href="#v-pills-editpfp" role="tab" aria-controls="v-pills-editpfp" aria-selected="true"><span>Edit Profile</span> </a>
                    <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">My Orders</a>
                    <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false">Manage Address</a>
                    <!-- <a class="nav-link" id="v-pills-coupons-tab" data-toggle="pill" href="#v-pills-coupons" role="tab" aria-controls="v-pills-coupons" aria-selected="false">Coupons & Offers</a> -->
                  </div>
  
              

                <div class="tab-content my-5 px-3" id="v-pills-tabContent" style="background: #fff; border-radius: 1rem; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                  <div class="tab-pane fade show active p-3" id="v-pills-editpfp" role="tabpanel" aria-labelledby="v-pills-editpfp-tab">
                    <div class="tab1title ">
                        <h4>Edit Profile</h4>
                    </div>
                    
                    <form action="profile_update.php">
                        <fieldset>
                            <label> <h6>Phone Number</h6> </label> <br>
                                <input placeholder="+91 9999000011" type="phone" tabindex="3" name="phone_number" required> <span><b></b></span>
                        </fieldset>

                        <fieldset>
                            <label> <h6>Email Id</h6> </label> <br>
                                <input placeholder="xyz@gmail.com" name="email" type="email" tabindex="3" required> <span><b></b></span>
                        </fieldset>

                        <fieldset>
                            <label> <h6>Password</h6> </label> <br>
                                <input placeholder="*********" type="password" name="password" tabindex="3" required ></span>
                                <!-- <i class="fa fa-eye-slash" style="margin-left: -30px;" id="togglepassword" aria-hidden="true"></i> &nbsp;<span><b></b> -->
                        </fieldset>
                    </form>
                    <button class="savechangesbtn" type="submit" name="submit" style="margin:0 auto;">Submit</button>
                      
                  </div>
                  <div class="tab-pane fade p-3" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">

                    <div class="tab2title mb-5 ">
                      <h4> Your Orders</h4>
                    </div>
                    <div class="container my-3 orderdeats ">
                        <div class="row justify-content-between ">
                            <div class="orderinfo col-md-9 m-1 ">
                              
                              <div class="shopename ">
                                <h6><b>Super Fine Dry Cleaners</b></h6>
                                <small>Sector 23, Gurgoan</small>
                              </div>
                              <div>
                                  <div class="ordereditems container-fluid d-flex justify-content-between">
                                    <div><small class="text-secondary">Items</small></div>
                                    <div><small class="text-secondary"><span>2</span>x <span>Shirt</span> , <span>2</span>x <span>Shirt</span></small></div> 
                                  </div>
                                  <div class="ordereddate container-fluid d-flex justify-content-between">
                                    <div><small class="text-secondary">Date</small></div>
                                    <div><small class="text-secondary"><span>22</span><span> Feb</span> <span>2021</span> at <span>7:50pm</span></small></div> 
                                  </div>
                                  <div class="totalsum container-fluid d-flex justify-content-between">
                                    <div><small class="text-secondary">Total Order</small></div>
                                    <div><small class="text-secondary"><span>Rs250</span></small></div> 
                                  </div>
                              </div>
                              <div class="d-flex justify-content-between orderstat">
                                <div><small><img src="img/drycleanicon.svg" alt="" style="width: .8rem; margin: 0 .3rem;"><a href=""><b>Pick up Scheduled</b></a> </small></div>
                                <div><small><i class="fa fa-cart-plus "></i> <span type="" class="" data-toggle="modal" data-target="#vieworder">
                                  <a href="javascript:;" class=""><b>View Orders</b> </a>
                                </span></small></div>
                                <!-- <div class="success text-center text-secondary">Thank You. Your Order has been received <span type="" class="" data-toggle="modal" data-target="#vieworder">
        <a href="javascript:;" class=""><b>View Orders</b> </a>
      </span>
      </button></div> -->
                              </div>
                              
                            </div>
                            <!-- <div class="orderstatus col-md-2 d-flex justify-content-end">
                              <small><span>Delivered <i class="fa fa-check-circle" aria-hidden="true"></i></span></small>
                            </div> -->
                        </div>
                    </div>


                    <!-- <div class="container my-3 orderdeats ">
                      <div class="row justify-content-between ">
                          <div class="orderinfo col-8 m-1 ">
                            
                            <div class="shopename ">
                              <h6><b>Super Fine Dry Cleaners</b></h6>
                              <small>Sector 23, Gurgoan</small>
                            </div>
                            <div>
                                <div class="ordereditems container-fluid d-flex justify-content-between">
                                  <div><small class="text-secondary">Items</small></div>
                                  <div><small class="text-secondary"><span>2</span>x <span>Shirt</span> , <span>2</span>x <span>Shirt</span></small></div> 
                                </div>
                                <div class="ordereddate container-fluid d-flex justify-content-between">
                                  <div><small class="text-secondary">Date</small></div>
                                  <div><small class="text-secondary"><span>22</span><span> Feb</span> <span>2021</span> at <span>7:50pm</span></small></div> 
                                </div>
                                <div class="totalsum container-fluid d-flex justify-content-between">
                                  <div><small class="text-secondary">Total Order</small></div>
                                  <div><small class="text-secondary"><span>Rs250</span></small></div> 
                                </div>
                            </div>
                            
                            
                          </div>
                          <div class="orderstatus col-2 d-flex justify-content-end">
                            <p><span>Delivered <i class="fa fa-times-circle" aria-hidden="true"></i></span></p>
                          </div>
                      </div>
                    </div> -->

                        
                  </div>
                  <div class="tab-pane fade  p-3" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                        <div class="tab2title mb-5">
                          <h4>Manage Address</h4>
                        </div>
                        <div class="container">
                                <div class="row">
                                    <div class="col-md-5 m-3 adds p-3">
                                        <div class="row">
                                          <i style="padding:5px;" class="fas fa-home"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="addbody">
                                              <h6>Home</h6>
                                              <p>123, Lorem, ipsum dolor. <br> 34/4 lorem, Lorem ipsum dolor sit. <br>
                                              Gurgram, New Delhi 112203</p>
                                            </div>
                                            <div class="addcta">
                                                <span>Edit</span> <span>Delete</span>
                                            </div>
                                          
                                        </div>
                                        
                                    </div>   

                                    <div class="col-md-5 m-3 adds p-3">
                                        <div class="row">
                                          <i style="padding:5px;" class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="addbody">
                                              <h6>Work</h6>
                                              <p>123, Lorem, ipsum dolor. <br> 34/4 lorem, Lorem ipsum dolor sit. <br>
                                              Gurgram, New Delhi 112203</p>
                                            </div>
                                            <div class="addcta">
                                                <span>Edit</span> <span>Delete</span>
                                            </div>
                                          
                                        </div>
                                        
                                    </div>   
                                    
                                      
                                </div>   

                        </div>
                  </div>

                  
                </div>
                
            </div>
        
        </div>


        



    </div>

    <!-- footer section -->
    <!-- VIEW ORDER SIDEBAR -->
  
  <div class="modal right fade" id="vieworder" tabindex="-1" role="dialog" aria-labelledby="#vieworder">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
    
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Your Orders</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
    
            <div class="modal-body">
              <div class="ordersum my-3">
                <div >
                  <h5>Order Summary</h5>
                  <small><b>Super Fine Dry Cleaners</b></small><br>
                  <small>Sec-23, Gurgoan</small>
                </div>
                <div>
                  <small><b>Pickup Time</b></small><br>
                  <small>Tue, 5 April 12:00pm</small>
                </div>
                <div>
                  <small><b>Delivery Time</b></small><br>
                  <small>Wed, 6 April 12:00pm</small>
                </div>
              </div>

              <div class="orderstat my-3">
                <div>
                  <h5>Order Status</h5>
                </div>
                <div>
                  <div id="timeline-wrap">
                    <div id="ordertimeline"></div>
                    
                    <!-- This is the individual marker-->
                    <div class="marker mfirst timelineicon one">
                        <i class="fas fa-check    "></i>
                        <small>Confirm</small>
                    </div>
                    <!-- / marker -->
                  
                    <!-- This is the individual marker-->
                    <div class="marker m2 timelineicon">
                      <i class="fas fa-check    "></i>
                      <small>Pickup</small>
                    </div>
                    <!-- / marker -->
      
                    
                    <!-- This is the individual marker-->
                    <div class="marker m3 timelineicon">
                      <i class="fas fa-check    "></i>
                      <small>Laundry</small>
                    </div>
                    <!-- / marker -->
                  
                    
                    <!-- This is the individual marker-->
                    <div class="marker mlast timelineicon">
                      <i class="fas fa-check    "></i>
                      <small>Delivered</small>
                    </div>  
                    <!-- / marker -->
                  
                  
                   
                  </div>
                </div>
              </div>

              <div>
                <h5>Order Summary</h5>

                <div class="text-secondary servicecat"><small> Wash & Fold</small>
                <div class=" m-2 d-flex justify-content-between">
                  
                  <small class="text-secondary">2 x Tshirt</small>
                  <!-- <div class="quantitycat text-center">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" class="text-center" readonly value="1">
                    <button class="btn plus-btn" type="button">+</button>
                    </div> -->
                  <small><i class="fas fa-rupee-sign    "></i> 240 </small>
                </div>
                <div class=" m-2 d-flex justify-content-between">
                  <small class="text-secondary">2 x Jeans</small>
                  <small><i class="fas fa-rupee-sign    "></i>100</b> </small>
                </div>
                </div>

                <div class="text-secondary servicecat"><small>Dry Clean</small>
                <div class=" m-2 d-flex justify-content-between">
                  <small class="text-secondary">1 x Saree</small>
                  <small><i class="fas fa-rupee-sign    "></i>120</b> </small>
                </div>
                </div>

              </div>
              <div>
                

                <div class="text-secondary orderitemtotal">
                <div class=" mt-3 d-flex justify-content-between ">
                  
                  <h6 class="">Items Total</h6>
                  <!-- <div class="quantitycat text-center">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" class="text-center" readonly value="1">
                    <button class="btn plus-btn" type="button">+</button>
                    </div> -->
                  <h6><i class="fas fa-rupee-sign    "></i> 460 </h6>
                </div>
                <div class=" m-2 d-flex justify-content-between text-secondary">
                  <small class="text-secondary">Promo Discount %</small>
                  <small>- <i class="fas fa-rupee-sign    "></i>60</b> </small>
                </div>
                

                <div class=" m-2 d-flex justify-content-between ">
                  <small class="text-secondary">Delivery</small>
                  <small><b>FREE</b> </small>
                
                </div>
                <div class=" m-2 d-flex justify-content-between text-secondary">
                  <small class="text-secondary">Tax(GST)</small>
                  <small><i class="fas fa-rupee-sign    "></i>40</b> </small>
                </div>
                </div>
              </div>
              <div class=" mt-3 d-flex justify-content-between">
                <h6>Total</h6>
                <h6><i class="fas fa-rupee-sign"></i>440</h6>
              </div>

              <div class="orderdsumdetails my-3">
                <div >
                  <h5>Order Details</h5>
                  <small><b>Order Number</b></small><br>
                  <small>5577884</small>
                </div>
                <div>
                  <small><b>Payment Mode</b></small><br>
                  <small>Net Banking</small>
                </div>
                <div>
                  <small><b>Order Date</b></small><br>
                  <small>Mon, 4 April 12:00pm</small>
                </div>
              </div>

              <div class="checkoutbtn text-center">
                <a href="checkout.html"><h6><b>Make a Payment</b></h6></a>
              </div>

            </div>
            
        </div>
    </div>
  </div>


  <div class="">
    <script>
      $.get("footer.html", function(data){
          $("#footerjs").replaceWith(data);
      });
      </script>
      <div class="container-fluid " id="footerjs" ></div>
  </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
