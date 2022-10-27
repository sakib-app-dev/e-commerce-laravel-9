<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
    <div style="margin:0px 150px 0px 150px;">

    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 mx-auto">Categories</h1>
            <div class="btn-toolbar mb-2 mb-md-0 text-right" style="margin-right: 20px">
                <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-primary">
                    <span data-feather="plus"></span>
                    Add New
                </button>
                </a>
                <a href="{{route('category.trash')}}">
                <button type="button" class="btn  btn-danger">
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('category.show', $category->id) }}">Show</a>
                        | <a class="btn btn-sm btn-warning" href="{{route('category.edit',$category->id)}}">Edit</a>  |

                        <a class="btn btn-sm btn-danger" href="{{ route('category.destroy', $category->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>


</x-admin.master>