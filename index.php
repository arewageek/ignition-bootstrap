<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="d-flex" style="align-items: center; justify-content: center; height: 100vh; width: 100vw">
    <div class="container">
        <div class="card shadow col-sm-12 col-md-6 col-lg-5 mx-auto">
            <div class="card-body w-100">
                <h4 class="text-center fw-bold mb-5">
                    User Registration
                </h4>

                <form action="process.php" class="w-100 row">
                    <div class="col-sm-12 col-md-6">
                        <label for="first-name" class="form-label">
                            First Name
                        </label>
                        <input type="text" name="first_name" class="form-control">
                    </div>

                     <div class="col-sm-12 col-md-6">
                        <label for="label-name" class="form-label">
                            Last Name
                        </label>
                        <input type="text" name="last_name" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-6 mt-4">
                        <label for="label-name" class="form-label">
                            Email
                        </label>
                        <input type="email" name="last_name" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-6 mt-4">
                        <label for="label-name" class="form-label">
                            Phone
                        </label>
                        <input type="tel" name="last_name" class="form-control">
                    </div>

                    <div class="col-sm-12 mt-4">
                        <label for="label-name" class="form-label">
                            Password
                        </label>
                        <input type="password" name="last-name" class="form-control">
                    </div>

                    <div class="col-sm-12 mt-4">
                        <label for="label-name" class="form-label">
                            Address
                        </label>
                        <textarea type="password" name="last-name" class="form-control">
                        </textarea>
                    </div>


                    <div class="col-sm-12 mt-4">
                        <button class="btn btn-success w-100">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>