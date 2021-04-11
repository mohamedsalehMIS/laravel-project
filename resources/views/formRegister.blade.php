<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container col-lg-6 ps-5">
        <h2>Form Registeration</h2>
        <form action="{{url('storeRegister')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" class="form-control" value="{{old('age')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" value="{{old('phone')}}"  placeholder="Password">
            </div>
            <div class="form-group">
                <label>National ID</label>
                <input type="text" name="national-id" class="form-control" value="{{old('national-id')}}"  placeholder="Password">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="{{old('password')}}"  placeholder="Password">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{old('address')}}"  placeholder="Password">
            </div>
            <div class="form-group">
                <label>About me</label>
                <textarea name="about-me" class="form-control" value="{{old('about-me')}}" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @if ($errors->any())
            <ul class="list-group">
                @foreach ($errors->all() as $error )
                    <li class="list-group-item list-group-item-danger"> {{$error}} </li>
                @endforeach
            </ul>
            @endif
        </form>
    </div>

</body>

</html>
