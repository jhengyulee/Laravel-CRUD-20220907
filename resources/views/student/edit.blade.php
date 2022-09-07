<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- blade語法 --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
    
</head>
<body>


    <div class="container">
        <h2>修改資料</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <a class="btn btn-success mb-3" href="{{route('students.create')}}">Add</a>            
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Chinese</th>
              <th>English</th>
              <th>Math</th>
            </tr>
          </thead>
          <form action="{{route('students.update',['student'=>$data->id])}}" method="post">
            @csrf 
            @method('PUT')
            <tbody>
              <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              {{-- <td><input type="number" name="chinese" id="chinese" value="{{$data->chinese}}"></td> --}}
              <td><input type="number" name="chinese" id="chinese" value="{{$data->chinese}}"></td>
              <td><input type="number" name="english" id="english" value="{{$data->english}}"></td>
              <td><input type="number" name="math" id="math" value="{{$data->math}}"></td>
            </tr>

            <tr>
              <td colspan="4">
                <input type="submit" value="submit">
              </td>

            </tr>

            </tbody>
        </form>
        </table>
      </div>
</body>
</html>