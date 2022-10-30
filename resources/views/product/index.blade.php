<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
    <div style="margin:0px 150px 0px 150px;">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h2 mx-auto">Products</h1>
            <div class="btn-toolbar mb-2 mb-md-0 text-right">
                <a href="{{route('product.create')}}">
                <button type="button" class="btn btn-primary">
                    <span data-feather="plus"></span>
                    Add New
                </button>
                </a>
                <a href="{{route('product.trash')}}">
                <button type="button" class="btn btn-danger">
                    <span data-feather="plus"></span>
                   Trash
                </button>
                </a>
                
            </div>
        </div>

        @if(session('message'))
        <p class="text-success">
            {{ session('message') }}
        </p>
        @endif

        <table class="table w-50 mx-auto">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Total Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->images->count() }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('product.show', $product->id) }}">Show</a>
                        | <a class="btn btn-sm btn-warning" href="{{route('product.edit',$product->id)}}">Edit</a>  |

                        <a class="btn btn-sm btn-danger" href="{{ route('product.destroy', $product->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>




    </div>

</x-admin.master>