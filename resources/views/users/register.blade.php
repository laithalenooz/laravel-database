<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container-fluid">
        <div class="navbar-brand">Task</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/table">Tables</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 w-50">
<form action="/store" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Full Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Full Name" value="{{old('name')}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Username:</label>
        <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Enter Username" value="{{old('username')}}">
        @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address:</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{old('email')}}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Password:</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{old('password')}}">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputMobile">Mobile:</label>
        <input type="text" name="mobile" class="form-control" id="exampleInputMobile" placeholder="Mobile" value="{{old('mobile')}}">
        @error('mobile')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-2">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>
</div>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
