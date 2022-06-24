<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action='' method="post" style ="width: 600px; margin-left: 500px;">
        @csrf
        <div class="form-group">
        <label>Name </label>
        <input type="text" class="form-control"  placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
        <label>Age </label>
        <input type="text" class="form-control"  placeholder="Enter age" name="age">
        </div>
        <div class="form-group">
        <label for="date">Date </label>
        <input type="text" class="form-control"  placeholder="Enter Date" name="date">
        </div>
        <div class="form-group">
        <label for="pwd">Phone </label>
        <input type="text" class="form-control"  placeholder="Enter phone" name="phone">
        </div>
        <div class="form-group">
        <label for="email">Web </label>
        <input type="text" class="form-control"  placeholder="Enter web" name="web">
        </div>
        <div class="form-group">
        <label for="pwd">Address</label>
        <input type="text" class="form-control"  placeholder="Enter address" name="address">
        </div>
        <div> 
            @include('error')
        </div>
        <button type="submit" class="btn btn-default" >ok</button>
        <div class="display-infor"> 
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
        
    </form>

    </div>
    
</body>
</html>