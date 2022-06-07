<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <a href="{{ route('admin_product') }}">Add Product</a><br><br>
    <a href="{{ route('admin_category') }}">Add Category</a><br><br>
    <a href="{{ route('admin_brend') }}">Add Brend</a><br><br>
    <hr>
    <div class="container  ">
    @if(  isset($products))
    <h3>Products</h3>
    <table class="table"> 
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">category_id</th>
      <th scope="col">Price</th>
      <th scope="col">Delete</th>
      <th scope="col"> Update</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product-> category_id}}</td>
      <td>{{ $product-> price}}</td>
      <td><a href="/admin/delete/{{ $product->id }}"> Delete </a></td>
      <td><a href="/admin/update/{{ $product->id }}"> Update </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
    </div>
</body>
</html>