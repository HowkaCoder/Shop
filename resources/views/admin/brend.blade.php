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
        <h3>Add Brend</h3> <a href="{{ route('admin_product') }}">Add product</a><br><br> 
    <form action="{{ route('add_brend') }}" class="form-control" method="POST">
        @csrf
        <h5>Name</h5><br>
        <input type="text" name="name" class="form-control" id=""><br>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category-> name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
    <br><br>
    </div>
</body>
</html>