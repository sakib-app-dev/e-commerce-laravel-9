<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
    <div style="margin:0px 150px 0px 150px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-auto">Product Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-success">Export PDF</button>
            </div>
            <a href="{{ route('product.index') }}">
                <button type="button" class="btn btn-sm btn-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        @foreach($product->images as $image)
            <img src="{{ asset('public/storage/images/'.$image?->image) }}" class="card-img-top" height="250px" alt="...">
        @endforeach
    </div>
    <div class="col-md-6">
         <h1 style="margin-left:10%">Title: {{ $product->title }}</h1>
        <p style="margin-left:10%">Description:{{$product->description}}</p>
        <p style="margin-left:10%">Price:{{$product->price}}</p>
    </div>
   
    </div>

</x-admin.master>