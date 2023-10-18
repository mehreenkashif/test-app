<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create-new-student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"	/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <div class="container">
        <br/>
        <form action="{{route('store')}}" method="POST">
            @csrf
            @method('post')
            <h1> ADD Student</h1>
            <br/>

            <div class="form-group">
                <label for="exampleInputEmail1">Student Name</label>
                <input type="username" name="name" class="form-control" id="exampleInputuser1"  placeholder="Enter studentname">
              </div>
              <br/>
             
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email"  name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter studentemail">
             
            </div>
                  
          <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</body>
</html>