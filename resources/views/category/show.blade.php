<x-admin.master>
    <x-admin.partials.top-nav />

    <br>
<div style="margin:0px 150px 0px 150px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-auto">Category Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
            <a href="{{ route('category.index') }}">
                <button type="button" class="btn btn-sm btn-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <h1 style="margin-left:10% ;">Title: {{ $category->title }}</h1>
</div>

</x-admin.master>