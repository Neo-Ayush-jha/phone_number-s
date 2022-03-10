<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="container mt-5">
       <div class="row">
           <div class="col mx-auto">
               
               <div class="card">
                   <a href="/" class="btn btn-success">Phone</a>
                   <div class="card-body">
                       <h1 class="h2 card-title">Student Number</h1>
                       <table class="table">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Number</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($students as $item)
                         <tr>
                           <td>{{$item->id}}</th>
                           <td>{{$item->name}}</td>
                           <td>{{$item->number}}</td>
                           <td>{{$item->email}}</td>
                           <td><a href="" class="btn btn-danger">X</a></td>
                         </tr>
                            
                        @endforeach
                      </table>
                      <div class="container">
                        <div class="row">
                          <div class="col-8 mx-auto">
                            {{$students -> links()}}
                          </div>
                        </div>
                      </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
</body>
</html>