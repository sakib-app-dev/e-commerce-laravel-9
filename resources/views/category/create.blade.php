<x-admin.master>

<x-admin.partials.top-nav />

<br>
<div style="margin:0px 150px 0px 150px;">
    <form method="post" action="{{route('category.store')}}" class="w-50 mx-auto" enctype="multipart/form-data">
        @csrf 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title:</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
            <button type="submit">Submit</button>
        
        </div>
    </form>
</div>

  

</x-admin.master>    