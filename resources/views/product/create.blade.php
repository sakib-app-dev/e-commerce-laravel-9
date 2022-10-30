<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
<div style="margin:0px 150px 0px 150px;">

    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data" class="w-50 mx-auto">
            @csrf 
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input name="title" type="text" class="form-control" id="title" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input name="price" type="number" step="any" min="1" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image:</label>
                <input name="images[]" type="file" accept="image/*" class="form-control" id="image" multiple >
            </div>

            <button type="submit">Create</button>

    </form>
</div>
</x-admin.master>