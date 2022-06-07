<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <br><br><br>
    <div class="container">
        @foreach($product as $value)
    <form action="{{ route('admin_add_update') }}" class="form-control" method="POST" enctype="multipart/form-data">
        @csrf
        <h5>Name</h5><br>
        <input type="text" name="name" value="{{ $value->name }}" class="form-control" id=""><br>
    
        <h5>Describtion</h5>
        <input type="text" name="dsb" value="{{ $value->dsb }}" class="form-control" id=""><br>

        <h5>Price</h5>
        <input type="number" name="price" class="form-control" value="{{ $value->price }}" id=""> <br>
        <input type="hidden" name="id" value="{{$value->id}}">
        <select name="category_id"  class="form-control">
            @foreach($data as $val)
            <option value="{{$val->id}}">{{$val->name}}</option>
            @endforeach
        </select>
    <br><br>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
    @endforeach
    <br><br> 
    </div>
</body>
</html>