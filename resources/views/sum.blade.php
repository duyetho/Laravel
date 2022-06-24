<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
  <h2>Tính tổng hai số</h2>
  <form method="post">
      @csrf
    <div class="form-group">
      <label for="email">Nhập số A: </label>
      <input type="number" class="form-control"  placeholder="Nhập số a" name="soA">
    </div>
    <div class="form-group">
      <label for="pwd">Nhập số B: </label>
      <input type="number" class="form-control"  placeholder="Nhập số b" name="soB">
    </div>
    <button type="submit" class="btn btn-default" >Submit</button>
    <div class="form-group">
      <input type="number" class="form-control" value="<?php if(isset($sum)) echo $sum ?>">
    </div>
  </form>
</div>
</body>
</html>