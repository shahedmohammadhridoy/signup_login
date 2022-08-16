<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <form class="shadow w-450 p-3" action="php/signup.php" method="post" enctype="multipart/form-data">
                <h4 class="display-4  fs-1">Create Account</h4><br>
                <div class="mb-3">
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control">
                </div>
<input type="submit" class="btn btn-primary">
</form>
</div>
</body>
</html>