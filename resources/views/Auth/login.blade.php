<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mt-3 text-center">
      @if($errors->any())
      {{ implode('', $errors->all('<div>:message</div>')) }}
         @endif
    <h3>Login Form</h3>
        </div>
    <form action="" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
