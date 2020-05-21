@extends("layout.app")
@section("content")

<div class="container">
    <div class="raw">
<form action="{{route('update',$all->id)}}" method ="POST" >
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="firstname" class="form-control"  value="{{$all->firstname}}">   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="lastname" class="form-control"  value="{{$all->lastname}}">   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="Email"  name="email" class="form-control"  value="{{$all->email}}">   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
@endsection