

<!doctype html>
@extends('layout.app')

@section('content')

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}" >
+
    <title>crud project</title>
  </head>
  <body>

  @if (session('successMsg'))
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Well done!</strong> {{ session('successMsg') }}
	</div>
	@endif 

    <div class="container">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first</th>
      <th scope="col">last</th>
      <th scope="col">email</th>
      <th scope="col" class="text-center">action </th>
      
    </tr>
  </thead>
  <tbody>
      
    @foreach($data as $all)
    <tr>
      <th scope="row">{{$all->id}}</th>
      <td>{{$all->firstname}}</td>
      <td>{{$all->lastname}}</td>
      <td>{{$all->email}}</td>
    
     	<td class="text-center"> <a href="{{ route('edit',   $all->id )}} " class="btn btn-primary btn-raised btn-sm">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			</a>
      
			<form method="POST"  action ="{{ route('destroy',  $all->id )}} "  id="delete-form-{{  $all->id }}"   style="display:none; " >
				{{csrf_field() }}
				{{ method_field("delete") }}
			</form>



			<button   onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{  $all->id }}').submit();

			}
			else{
				event.preventDefault();

			}

			" class="btn btn-danger btn-sm btn-raised" >
				<i class="fa fa-trash" aria-hidden="true">
				
				</i>
      </button>
    
		</td>
	</tr>
 
      @endforeach
 
   
  </tbody>
</table>
{{$data->links()}}
        </div>
    </div> 

  
@endsection
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

