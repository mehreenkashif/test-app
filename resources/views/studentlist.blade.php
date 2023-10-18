<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"	/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<style>

  .container{
    width: 90%;
  }

 .heading{
    text-align: center;
    margin:30px;
    font-weight: 700;
    color: darkslateblue
 }

.table{
    text-align: center;
    margin: 20px;
 }

 .btn-custom{
 
 margin-left: 65rem;

 }

</style>

</head>
<body>

    <div class="container">

    <h1 class="heading">Students List</h1>
   
    <a href=" {{route('create')}}"  type="button" class="btn btn-primary btn-custom">ADD STUDENT</a>

     <table class="table">
        <thead>
          <tr>
            <th scope="col"> STUDENT#ID</th>
            <th scope="col"> STUDENT_NAME</th>
            <th scope="col"> STUDENT_EMAIL</th>
            <th scope="col">DELETE</th>
      
          </tr>
        </thead>

         @foreach ($students as $student)

          <tbody>
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            {{-- <td>{{$student->city}}</td> --}}

            <td>
              <form action="{{route('delete',[ 'student' => $student])}}" method="POST">
              @csrf
              @method('delete')
              <button  value="DELETE" type="submit" class="btn btn-danger">DELETE</button>
              
              </form>
            </td>
          </tr>
         </tbody>

        @endforeach

     </table>
   </div>

</body>
</html>