<x-admin.master>
  <x-admin.partials.top-nav />

  <br>

  <div style="margin:0px 150px 0px 150px;">
      <form method="post" action="{{route('category.update',$category->id)}}" class="w-50 mx-auto">
        @csrf 
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            <input name="title" value="{{$category->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      <h1 style="margin-left:10%">Edit page</h1>
  </div>


</x-admin.master>