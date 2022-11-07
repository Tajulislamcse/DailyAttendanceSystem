<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="/products/{{$productObject->getId()}}" method="POST">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{$productObject->getName()}}">
		<input type="text" name="price" value="{{$productObject->getPrice()}}">

		<button type="submit">submit</button>
	</form>

</body>
</html>