<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
    <div style="margin:0px 150px 0px 150px;">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 mx-auto">Trashs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('product.index')}}">
                <button type="button" class="btn btn-sm btn-primary">
                    <span data-feather="plus"></span>
                   List
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
                    <td>
                    <form action="{{ route('product.restore', $product->id) }}" method="post">
                            @csrf
                            @method('patch')
                        <button class="btn btn-sm btn-warning">Restore</button> 
                        </form>  

                       |   <form action="{{ route('product.delete', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                        <button class="btn btn-sm btn-danger" href="">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>



</x-admin.master>