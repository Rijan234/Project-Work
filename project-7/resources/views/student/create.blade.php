<x-layout/>
<h1>this is create page</h1>


<form action="{{ route('student.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputname1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address"  class="form-control" id="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PHone</label>
    <input type="text" name="phone"  class="form-control" id="phone">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>