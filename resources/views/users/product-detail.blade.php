
<x-frontend.master>
  <x-slot:title>
    Product Details
  </x-slot>


            <h1 style="text-align:center;">Product Details</h1>
            <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <img class="capimg" src="{{ asset('assets/users/') }}/images/cap.jpg" alt="cap">
            </div>
            <div class="offset-md-2 col-md-6">
             <h4>Cap for man</h4>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, illum earum ratione ad, corporis sit assumenda, quos voluptate cupiditate veniam iste? Iure perspiciatis quas iste corporis unde nemo repellendus. Labore.</p>
             <h2 class="mt-5" style="color:orange ;">56 BDT</h2>
             <form action="">
                <div class="quantity"><p class="mt-5">Quantity: </p>
                    <div class="button">   <button class="pm">-</button> <input type="number" style="width:60px;height:48px;text-align: center;" step="1" min="1" value="1" name="" id="" col="4"> <button class="pm">+</button></div> </div>
                   <div class="last mt-5">
                       
                       <a href="{{ route('users.checkout') }}" class="btn btn-primary btn-lg">Buy Now</a>
                       <a href="checkout.html" class="btn btn-primary btn-lg">Add to Cart</a>
                       
                   </div>

             </form>
             

            </div>
        </div>
        <div class="row mt-5">
            <h3>Related Products:</h3>
        </div>
        <div class="row mt-3 mx-auto">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/users/') }}/images/cap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/users/') }}/images/cap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/users/') }}/images/cap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/users/') }}/images/cap.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>



  </x-frontend.master>

            
   