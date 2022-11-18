<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstarp  -->
    <!-- <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/users/css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/users/css/style.css') }}">
    <title>{{ $title??"Online Shop" }}</title>
</head>
<body>

    <!-- top-nav -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 py-1" style="color:white; background-color:crimson">
                <span class="ms-5 ">Help-line: 01XXX-XXXXX</span> <span class="ms-5">Call Center Time: ( 24X7 ) 8.00am - 8.00pm</span>  <span class=" ms-5">mail@company.com</span>
            </div>
        </div>
    </div>

    <!-- top-nav -->
    <div class="container-fluid mt-2">
        <div class="row">

            <!-- header -nav  -->
<x-frontend.layouts.nav/>

            <!-- header -nav  -->

        </div>
    </div>

    <div class="container-fluid">
      <div class="row">


{{ $slot }}
              

              <!-- contact-end -->
              <!-- footer -->
              <section>

              
              <div class="col-md-12  footer-section">

                <div class="row mt-5">
                    <div class="col-md-3  ms-3">
                    <h5 class=" mt-3">Extra Links</h5>
                    <p>
                      <ul>
                        <li>About Company</li>
                        <li>Our Services</li>
                        <li>Recent Projects List</li>
                        <li>Latest News Blog</li>
                      </ul>
                    </p>
                  </div>
                  <div class="col-md-3  ms-3">
                    <h5 class=" mt-3">List Of Services</h5>
                    <p>
                      <ul>
                        <li>Fresh Collection</li>
                        <li>Home Delivery</li>
                        <li>Urgent Delevry</li>
                      </ul>
                    </p>
                  </div>
                  <div class="col-md-3  ms-3">
                    <h5 class=" mt-3">Support</h5>
                    <p>
                      <ul>
                        <li>Documentation</li>
                        <li>Privacy Policy</li>
                        <li>Terms Of Service</li>
                        <li>24/7 Support</li>
                      </ul>
                    </p>
                  </div>
                  
                  <div class="col-md-2 ms-3">
                    <h5 class=" mt-3">Our Address</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores illo qui quod, soluta itaque deleniti omnis recusandae eveniet aliquam pariatur?

                    </p>
                  </div>
                  <div class="col-md-4 mt-5 ms-5">
                    <h5 class=" mt-3">Paymet Methods</h5>
                    <p>
                      bKash Rocket Nogor visa card credit card

                    </p>
                    </div>
                  <div class="offset-md-3 col-md-4 mt-5  text-end">
                    <h5 class=" mt-3">Connect with us</h5>
                    <p>
                      facebook twitter google plus istragram linkidin

                    </p>
                  </div>

                
                </div>
                

                <div class="offset-md-2 col-md-8 border-top  mt-5 py-3 text-center">
                  <p class="mt-3">Copy right &copy Grocery Store.All rights reserved | Design by <strong> Hyperloop -2022</strong></p>
                </div>
                
              </div>
              </section>
              <!-- endfooter -->
        </div>
    </div>
    



    <script src="{{ asset('assets/users/') }}/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    
</body>
</html>