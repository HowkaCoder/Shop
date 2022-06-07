<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>
<body><br><br><br><br><br>
        <div class="container">
            <h3>Sign Up</h3>
            <br>
            <a href="{{ route('admin_signin') }}">Sign in</a>
            <form action="{{ route('signup_check') }}" class="form-control" method="post">@csrf
                <div class="mb-3">
                    <label for="login" class="form-label"> Login </label>
                    <input type="text" name="name" id="login" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">  Email  </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pass">  Password  </label>
                    <input type="password" name="password" id="pass" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary"> Enter </button>
            </form>
        </div>
</body>
</html>