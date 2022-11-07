<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<!--   <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>  -->           
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Student Name</th>
        <th>is_present</th>
      </tr>
    </thead>
    <tbody>
    <form method="post" action="attendance">
      @csrf
    

      @foreach($students as $student)
      <tr>
        <td>{{$student->student_id}} <input type="hidden" name="student_id[]" value="{{$student->student_id}}"></td>
        <td>{{$student->student_name}}<input type="hidden" name="student_name[]" value="{{$student->student_name}}"></td>
        <td><input type="checkbox" name="is_present[]" value="{{$student->student_id}}" {{$student->is_present=='1' ? 'checked':''}}></td>
      </tr>
      @endforeach
      <button type="submit">Save</button>
    </form>


    </tbody>
  </table>
</div>

</body>
</html>