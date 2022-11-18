
  
              <!-- header -nav  -->

<x-frontend.master>
  <x-slot:title>
    Product List
  </x-slot>

            <h1 style="text-align:center;">Products</h1>
            <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
              <div class="container">
                  <div class="row">
                    @foreach ($products as $product)
                        
                    
                      <div class="col-md-3 my-3">
                          <div class="card" style="width: 18rem;">
                            
                            @foreach($product->images as $image)
                                <img src="{{ asset('storage/images/'.$image?->image) }}" class="card-img-top" height="250px" alt="...">
                              @endforeach  
                            {{-- <img src="{{ asset('storage/images/2022-10-28-product-image-16669328426.jpg') }}" class="card-img-top" alt="..."> --}}
                              <div class="card-body text-center">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text fs-4 fw-bold">{{$product->price}}BDT</p>
                                <p>
                                  <span>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                  </span>
                                </p>
                                <a href="{{ route('users.product.detail',$product->id) }}" class="btn btn-primary">Buy Now</a>
                              </div>
                            </div>
                      </div>
                      @endforeach

                      {{ $products->links() }}
                      
                  </div>
              </div>

            
</x-frontend.master>