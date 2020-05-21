@extends("layout.app")
@section("content")

<div class="container">
    <div class="raw">
<form action="{{route('storeproduct')}}" method ="POST" >
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="name" class="form-control"  placeholder=" name of your product">   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text"  name="price" class="form-control"  placeholder="Enter price ">   
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
@endsection