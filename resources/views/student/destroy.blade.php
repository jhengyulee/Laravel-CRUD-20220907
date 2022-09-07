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
        <h2>新增資料</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th>Name</th>
              <th>Chinese</th>
              <th>English</th>
              <th>Math</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <form action="{{route('students.store')}}" method="post">
            @csrf 
            <tbody>
              <tr>
              <td><input type="text" name="name" id="name"></td>
              <td><input type="number" name="chinese" id="chinese"></td>
              <td><input type="number" name="english" id="english"></td>
              <td><input type="number" name="math" id="math"></td>
            </tr>

            <tr>
              <td colspan="4">
                <input type="submit" value="add submit">
              </td>

            </tr>

            </tbody>
        </form>
        </table>
      </div>
</body>
</html>