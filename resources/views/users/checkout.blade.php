<x-frontend.master>
  <x-slot:title>
    CheckOut Page
  </x-slot>

    <!-- section-checkout -->

    <div class="container">
        <div class=" text-center">
            <div><img src="assets/images/logo1.png" alt="" height="180px"></div>
            <h2>Checkout form</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, recusandae!</p>
        </div>
        <div class="row">

            <div class="col-md-6 bg-light">
                <h4 class="text-center mt-3 border-success">Billing Address</h4>

                <form action="">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" maxlength="11">
                    <label for="">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="email" class="form-control">
                        <span class="input-group-text">@example.com</span>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                        <label for="">Country</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">city</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">ZIP</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Location</label>
                        <textarea class="form-control" name="" id=""></textarea>
                    </div>
                    
                </div>
                <hr>
                <input type="checkbox" name="" id="">
                <label for="">Shipping address is the same as my billing address</label><br>
                <input type="checkbox" name="" id="">
                <label for="">Save this information for next time</label>
                    
                    
                </form>
                </div>
            <div class="offset-1 col-md-4 bg-light">

                <h4 class="text-center my-3 ">Cart</h4>
                <table class="table table-striped">
                    <tr>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Shirt</td>
                        <td>1</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Shirt</td>
                        <td>1</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Shirt</td>
                        <td>1</td>
                        <td>500</td>
                    </tr>
                    
                    <tr>
                        
                        <th colspan="2">Total (Taka)</th>
                        <th>1500</th>
                    </tr>
                </table>
                <div class="d-grid gap-2">

                    <a href="{{ route('users.thank-you') }}" class="btn btn-success btn-lg">Pay Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- section-checkout -->

  </x-frontend.master>