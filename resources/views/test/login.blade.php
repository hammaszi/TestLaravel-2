<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .login-box {
        border: solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }
</style>
<body>

    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
    @if (Session::has('status'))
     <div class="alert alert-danger" role="alert">
        {{Session::get('message')}}
     </div>
    @endif
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>  
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" name="password" id="password" class="form-control" required> 
                </div>  
                <div class="mb-3">
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </div>
            </form>
           
        </div>
    </div>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>