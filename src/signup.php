<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://kit.fontawesome.com/65dbf19ac7.js" crossorigin="anonymous"></script>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <form class="card card-login text-white" method="post" action="addNewUser.php">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Signup</h2>
                                <p class="text-white-50 mb-5">Please fill up your informations!</p>
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="username" name="username" class="form-control
                                        form-control-lg" required />
                                    <label class="form-label" for="username">Username</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="email" name="email" class="form-control
                                        form-control-lg" required />
                                    <label class="form-label" for="email">Email</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" required />
                                    <label class="form-label" for="password">Password</label>
                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>

                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="login.php"
                                        class="text-white-50 fw-bold">Login</a>
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>