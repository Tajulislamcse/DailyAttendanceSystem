<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
 <form action="/products" method="post">
 	@csrf
 	<input type="text" name="name">
 	<input type="text" name="price">
 	<input type="checkbox" name="something" value="1">
 	<button type="submit">submit</button>
 	
 </form>
</body>
</html>