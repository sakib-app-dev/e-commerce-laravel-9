
<x-frontend.master>
  <x-slot:title>
    Home
  </x-slot>

            <!-- Banner -->
              <section class=" banner-section">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="250px" src="{{ asset('assets/users/') }}/images/banner1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-start mb-5  ">
                          <p class="text-start fs-3 fw-bold ">70% Off For Friday</p>
                                            <a href="product-list.html" target="_blank"  class="text-white fw-bold btn btn-lg btn-warning p-2">Shop Now</a>
                        </div>
                      </div>
                      <div class="carousel-item ">
                        <img height="250px" src="{{ asset('assets/users/') }}/images/banner2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-start mb-5">
                          <p class="text-start fs-3 fw-bold text-white  ">70% Off For Friday</p>
                                            <a href="product-list.html" target="_blank"  class="text-dark fw-bold btn btn-lg btn-warning p-2">Shop Now</a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img height="250px" src="{{ asset('assets/users/') }}/images/banner3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-start mb-5">
                          <p class="text-start fs-3 fw-bold  text-white">70% Off For Friday</p>
                                            <a href="product-list.html" target="_blank"  class="text-dark fw-bold btn btn-lg btn-warning p-2">Shop Now</a>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  
              </section>
              <!-- banner-end -->

              <!-- offer -->
              <section>
                <div class="container mt-5">
                  <h1 class="text-center">Offers</h1>
                  <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
                    <div class="row " id="special" >
                        <div class="col-md-12" style=""></div>
                        <div class="col-md-4">
                            <div class="card" style="width: 20rem;">
                                <img height="400px" width="350px"  src="https://img.freepik.com/premium-psd/gift-mockup_37789-282.jpg?w=360" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="product-detail.html" class="btn btn-primary">BUY NOW</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 20rem;height: 25 rem;">
                                <img  height="400px" width="350px" src="https://img.freepik.com/free-psd/medium-shot-woman-holding-bags_23-2148961771.jpg?w=740&t=st=1660036414~exp=1660037014~hmac=58ebb180d7e518cb438e0266e8d37f82cd9efc8a476cc4bd14fc16acf13f5614" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">BUY NOW</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 20rem;">
                                <img  height="400px" width="350px" src="https://img.freepik.com/free-psd/paper-bag-concept-with-mock-up_23-2148807267.jpg?w=740&t=st=1660048295~exp=1660048895~hmac=7f480669fa1c5ebbf2edf31fca0c55da9377243721500c16d3f20e438f7a0d28" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">BUY NOW</a>
                                </div>
                              </div>
                        </div>
                        
                    </div>
                </div>
              </section>

            <!-- offer-end -->


              <!-- products -->

              <section>
                  <div class="container mt-5">
                      <h1 style="text-align: center">Feature Products</h1>
                      <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
                      <div class="row">
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p1.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="product-detail.html" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p2.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p3.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p4.jpg" class="card-img-top" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p5.jpg" class="card-img-top img-fluid" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p6 .jpg" class="card-img-top img-fluid" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p7.jpg" class="card-img-top img-fluid" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">T-Shirt</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-3 py-1">
                              <div class="card" style="width: 17rem;">
                                  <img src="{{ asset('assets/users/') }}/images/p8.jpg" class="card-img-top img-fluid" alt="...">
                                  <div class="card-body text-center">
                                    <h5 class="card-title">50$</h5>
                                    <p class="card-text">Pant</p>
                                    <p>
                                      <span>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      </span>
                                    </p>
                                    <a href="#" class="btn btn-primary">BUY NOW</a>
                                  </div>
                                </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- products-end -->


              <!-- Testimonial -->

              <section class="mt-5">
                <h1 style="text-align: center">Testimonial</h1>
                <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
                <div id="carouselExamplelight" class="carousel carousel-light slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner"  >
                    

                    <div class="carousel-item active  my-5" data-bs-interval="5000" >
                      <div class="row py-5" style="margin:0px 80px 0px 80px;background-color: orange" >
                        <div class="offset-md-1 col-md-4 pe-0">
                          <div class="img-area d-block w-100 text-end">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width:280px;" class=" img-fluid text-end" alt="...">
                          </div>
                        </div>
                        <div class="col-md-5 " style="color:white ;background-color: cadetblue;">
                          <div class=" py-5">
                            <h5 >Name</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cum totam nam ab unde quis! Repellendus ullam natus dolore rerum!</p>
                            <span>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                    
                    </div>

                    <div class="carousel-item my-5" data-bs-interval="2000" >
                      <div class="row py-5" style="margin:0px 80px 0px 80px;background-color: orange" >
                        <div class="offset-md-1 col-md-4 pe-0">
                          <div class="img-area d-block w-100 text-end">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGVyc29uYXxlbnwwfHwwfHw%3D&w=1000&q=80" style="width:280px;" class=" img-fluid text-end" alt="...">
                          </div>
                        </div>
                        <div class="col-md-5 " style="color:white ;background-color: cadetblue;">
                          <div class=" py-5">
                            <h5 >Name</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cum totam nam ab unde quis! Repellendus ullam natus dolore rerum!</p>
                            <span>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item my-5" data-bs-interval="2000" >
                      <div class="row py-5" style="margin:0px 80px 0px 80px;background-color: orange" >
                        <div class="offset-md-1 col-md-4 pe-0">
                          <div class="img-area d-block w-100 text-end">
                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHBlcnNvbnxlbnwwfHwwfHw%3D&w=1000&q=80" style="width:280px;" class=" img-fluid text-end" alt="...">
                          </div>
                        </div>
                        <div class="col-md-5 " style="color:white ;background-color: cadetblue;">
                          <div class=" py-5">
                            <h5 >Name</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cum totam nam ab unde quis! Repellendus ullam natus dolore rerum!</p>
                            <span>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                              <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>


                    
                    
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplelight" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExamplelight" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </section>

              <!-- contact -->
              <section>
                  <div class="container" id="contact">
                    <div class="row mt-5">
                        <div class=" col-md-12" style="justify-content: center;">
                            
                            <div class="bg-white border rounded mt-5 border border-danger" >
                                <h1 class="py-2 " style="font-weight: 600; text-align: center; margin: 15px;" >Contact Us</h1>
                                <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
                                <div class="w-100 p-4 d-flex justify-content-center pb-4 ">
            
                                    <form style="width: 75%;">
                                      <div class="row">

                                        <div class="col-md-6 mt-3">
                                          <div class="form-group form-outline">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name....">
                                          </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                          <div class="form-group form-outline">
                                            <label for="phone">Phone:</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Enter phone no....">
                                          </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                          <div class="form-group form-outline">
                                            <label for="email">Email address:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email....">
                                          </div>
                                        </div>

                                        <div class="col-md-6 mt-3">

                                          <div class="form-group form-outline">
                                            <label for="subject">Subject:</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Email Subject....">
                                          </div>
                                        </div>

                                        <div class="form-group form-outline mt-3">
                                          <label for="massage">Message:</label>
                                          <textarea class="form-control" name="massage" id="massage"  rows="3" ></textarea>
                                        </div>
                                        <div class="form-group form-outline">
                                        
                                        <div class="d-grid gap-2 mt-3 mb-3">
                                            <button class="btn btn-lg" style="background-color: orangered; color:white; font-weight: 500;" type="button">Send Email</button>
                                        </div>

                                      </div>

                                        
                                        
                                      </form>
                                    </div>
                                    
                            </div>
                        </div>
            
                        
                    </div>
                </div>
              </section>
              

              <!-- contact-end -->
 




            </x-frontend.master>