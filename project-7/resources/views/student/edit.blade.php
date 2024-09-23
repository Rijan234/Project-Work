<x-layout/>
<h1>this is create page</h1>


<form action="{{ route('student.update', $student->id ) }}" method="post">
    @method('put')
  @csrf
  <div class="mb-3">
    <label for="exampleInputname1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ $student->student_name }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address"  class="form-control" id="address" value="{{ $student->student_address }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PHone</label>
    <input type="text" name="phone"  class="form-control" id="phone" value="{{ $student->student_phone }}">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>