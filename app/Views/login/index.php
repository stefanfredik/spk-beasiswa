<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= WEB_TITLE; ?> - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/sb/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="mt-4 p-2 row justify-content-center">
            <h3 class="text-white"><?= WEB_TITLE; ?></h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-14 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="my-4 px-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>
                                    <form class="user" onsubmit="login(event)">
                                        <div class="form-group">
                                            <input id="username" type="text" class="form-control form-control-user" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <input id="pass" type="password" class="form-control form-control-user" placeholder="Masukan Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/sb/vendor/jquery/jquery.min.js"></script>
    <script src="/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/sb/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/sb/js/sb-admin-2.min.js"></script>
    <script src="/assets/sweetalert2/dist/sweetalert2.all.js"></script>
    <script>
        function login(target) {
            target.preventDefault();

            const username = $("#username").val();
            const pass = $("#pass").val();



            $.ajax({
                url: '/login',
                method: 'POST',
                data: {
                    username,
                    pass
                },

                success: (res) => {
                    console.log(res);
                    if (res.status == 'error') {
                        return Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            text: res.msg,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    }

                    return window.location.href = '/home';
                },
                error: (err) => {
                    console.log(err);
                }
            });
        }
    </script>

</body>

</html>