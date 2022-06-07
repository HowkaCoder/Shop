<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <br><br>
    <div class="container  ">
        <h3>Add Product</h3> <a href="{{ route('admin_category') }}">Add category</a><br><br> 
    <form action="{{ route('add_product') }}" class="form-control" method="POST" enctype="multipart/form-data">
        @csrf
        <h5>Name</h5><br>
        <input type="text" name="name" class="form-control" id=""><br>
    
        <h5>Describtion</h5>
        <textarea name="dsb" class="form-control" cols="30" rows="10"></textarea><br>

        <h5>Image</h5>
        <input type="file" name="file" class="form-control" ><br>
        
        <h5>Price</h5>
        <input type="number" name="price" class="form-control" id=""> <br>
        
        <select name="category_id"  class="form-control">
            @foreach($data as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
    <br><br>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
    <br><br> 

    
    @if(  isset($products))
    <table class="table"> 
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">category_id</th>
      <th scope="col">Describtion</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product-> category_id}}</td>
      <td>{{ $product-> dsb}}</td>
      <td>{{ $product-> price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
    </div> 
</body>
</html>