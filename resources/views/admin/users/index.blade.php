<x-admin.master>
<div class="border" style="margin-left: 50px">


    <table class="table ms-5">
        <thead>
          <tr>
            <th scope="col">#SL</th>
            <th scope="col">Users Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                
                <td>
                    <a href="" class="btn btn-info btn-sm">Show</a>
                    <a href="{{route('change_role',$user->id)}}" class="btn btn-danger btn-sm">Change Role</a>
                </td>
                
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>
</x-admin.master>