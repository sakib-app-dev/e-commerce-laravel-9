
<x-frontend.master>
  <x-slot:title>
    Product Details
  </x-slot>


            <h1 style="text-align:center;">Product Details</h1>
            <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
              @foreach($product->images as $image)
              <img src="{{ asset('storage/images/'.$image?->image) }}" class="card-img-top" height="250px" alt="...">
              @endforeach
            </div>
            <div class="offset-md-2 col-md-6">
             <h4>{{$product->title}}</h4>
             <p>{{$product->description}}</p>
             <h2 class="mt-5" style="color:orange ;">{{$product->price}} BDT</h2>
             <x-forms.message />
              <form action="{{ route('users.add-to-cart',$product->id) }}" method="POST">  
                <div class="quantity d-flex">
                  <p class="mt-5">Quantity: </p>
                    <div class="" style="margin:40px 30px">
                      
                        @csrf
                        <input type="number" name="qty" style="width:60px;height:48px;text-align: center;" step="1" min="1" value="1" name="" id="" col="4">
                      
                    </div> 
                </div>
                @auth
                <div class="last mt-5">
                    
                  <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
                  <a href="{{ route('users.checkout') }}" class="btn btn-primary btn-lg">Buy Now</a>
                  
                </div>
                @endauth
              </form>

             
             

            </div>
            <div class="offset-md-1 col-md-10">
              <h1>Comments:</h1>
              <p>
                <form action="{{ route('users.products.comment.store',$product->id) }}" method="POST">
                  @csrf
                  <x-forms.textarea name="comment" />
                  <button type="submit" class="btn btn-primary">Comment</button>
                </form>
              </p>
            </div>
            <div class="offset-md-1 col-md-10">
              @foreach ($product->comments as $comment)
                <div class="bg-light border border-primary rounded" >
                  <h6>{{ $comment->commentedBy->name.' ' }}<sub><small><mark>{{ $comment->created_at->diffForHumans() }}</mark></small></sub></h6><hr>
                  <p class="">{{ $comment->comment }}</p>
                </div>
                  
              @endforeach
              <h5></h5>
            </div>
        </div>
        
        
    </div>



  </x-frontend.master>

            
   