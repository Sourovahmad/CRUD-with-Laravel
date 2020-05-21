@extends("layout.app")
@section("content")

<div class="container">
    <div class="raw">
<form action="{{route('store')}}" method ="POST" >
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="firstname" class="form-control"  placeholder="Enter firstname">   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="lastname" class="form-control"  placeholder="Enter last name ">   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="email" class="form-control"  placeholder="Enter E-mail">   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
@endsection