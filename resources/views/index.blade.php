<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<a href="/products/create">Add</a>
	<table border="2">
		<th>Name</th>
		<th>Price</th>
		<th>Action</th>
  @foreach($productObjects as $productObject)
  <tr>
  	<td>{{$productObject->getName()}}</td>
  	<td>{{$productObject->getPrice()}}</td>
  	<td>
  		<form action="/products/{{$productObject->getId()}}" method="POST">
           @csrf
           @method('Delete')
  		   <button type="submit">Delete</button>
  			
  		</form>
  	</td>
  	  	<td>
  		<form action="/products/{{$productObject->getId()}}/edit" method="GET">

  		   <button type="submit">Edit</button>
  			
  		</form>
  	</td>

  	
  </tr>
@endforeach
	</table>

</body>
</html>