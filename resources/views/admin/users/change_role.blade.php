<x-admin.master>
    {{-- <x-slot:title>
        Change Role
    </x-slot> --}}
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-6" style="margin-left: 250px">


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Change Role</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="{{ route('admin.users_list') }}">
                        <button type="button" class="btn btn-sm btn-primary text-right">
                            <span data-feather="list"></span>
                            User List
                        </button>
                    </a>
                </div>
            </div>
        
            <x-forms.errors />
        
            <form action="{{ route('update_role', $user->id) }}" method="post">

                @csrf
                @method('patch')
        
                <x-forms.select name="role_id" label="User Roles" :options="$roles" :selected="old('role_id', $user->role_id)" required/>
                    <br>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        

        </div>
    </div>
</div>

</x-admin.master>