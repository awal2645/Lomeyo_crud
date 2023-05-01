<table class="table table-striped table-sm text-center align-middle">
    @if ($employe->count() > 0)
    <thead>
      <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Post</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        

            @foreach ($employe as $key=>$emp)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="storage/images/{{$emp->avatar}} " width="50" class="img-thumbnail rounded-circle"></td>
                    <td> {{$emp->first_name }} {{$emp->last_name }}</td>
                    <td>{{$emp->email}} </td>
                    <td> {{$emp->post}} </td>
                    <td> {{$emp->phone}} </td>
                    <td>
                    <a href="#"  id="{{$emp->id}}" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>
    
                    <a href="#" id="{{$emp->id }}" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                </tr>
            @endforeach 
            
    </tbody>
    @else
    <h1 class="text-center text-secondary my-5">No record present in the database!</h1>
        @endif
</table>