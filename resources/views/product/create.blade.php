<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
<div style="margin:0px 150px 0px 150px;">

    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data" class="w-50 mx-auto">
            @csrf 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title:</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description:</label>
                <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price:</label>
                <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <button type="submit">Create</button>

    </form>
</div>
</x-admin.master>