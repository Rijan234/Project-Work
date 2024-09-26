<x-layout/>

<h1>This is home page</h1>

<a href="{{ route('student.create') }}">
<button type="button" class="btn btn-primary">Create</button>
</a>


<table class="table">
  <thead>
    <tr>
    <td>S.n</td>
      <th scope="col">name</th>
      <th scope="col">Address</th>
      <th scope="col">PHone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($students as $student)
  <tr>
      <th scope="row">1</th>
      
      <td>{{ $student->student_name }}</td>
      <td>{{ $student->student_address }}</td>
      <td>{{ $student->student_phone }}</td>
      <td>
        <a href="{{ route('student.edit', $student->id ) }}">
          edit
        </a>
            <form action="{{ route('student.destroy', $student->id) }}" method="post">
          @csrf
          @method('delete')
        <button  type="submit" class="btn btn-sm btn-primary">Delete</button>
        </form>
       
      </td>
    </tr>
  @endforeach
  
  </tbody>
</table>
