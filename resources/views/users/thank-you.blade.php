<x-frontend.master>
  <x-slot:title>
    Thank You
  </x-slot>




<div class="offset-md-3 col-md-6">
            <h1 style="text-align:center;">Your Order Placement is Successful!</h1>
    <h3 style="text-align:center;">Thanks for Staying with Us </h3>
    <img class="tick" src="{{ asset('assets/users/') }}/images/tick.png">


  <a href="{{ route('users.invoice') }}" class="btn btn-success btn-lg mt-3 mx-auto d-grid mb-3">Download Invoice</a>
</div>
</x-frontend.master>

            
 