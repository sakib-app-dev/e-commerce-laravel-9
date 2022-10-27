<x-admin.master>
  <x-admin.partials.top-nav />

  <br>
  <div style="margin:0px 150px 0px 150px;">
        <h1 style="margin-left: 10%;">Edit page</h1>

    <form method="post" action="{{route('product.update',$product->id)}}" class="w-50 mx-auto">
      @csrf 
      @method('put')
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name:</label>
          <input name="title" value="{{$product->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name:</label>
          <input name="description" value="{{$product->description}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name:</label>
          <input name="price" value="{{$product->price}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
        </div>

        <button type="submit">Update</button>
    </form>
  </div>
</x-admin.master>