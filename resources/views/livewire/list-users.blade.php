<div>
      <table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody id="userTableBody">
        @foreach ($users as $user )
      <tr>
        <td>1</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->status}}</td>
        <td class="text-center">
          <button class="btn btn-sm btn-warning me-1" >
            <i class="fa fa-edit"></i>
          </button>
          <button onclick="deleteUser({{$user->id}})" class="btn btn-sm btn-danger" >
            <i class="fa fa-trash"></i>
          </button>
        </td>
      </tr>      
        @endforeach
    </tbody>
</table>
{{$users->links()}}
</div>