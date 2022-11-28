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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

</head>

<body class="">
    <section class="text-center">
        <div class="p-5 bg-image" style="
        /* background-image: url('/assets/img/bg.jpg'); */
        background-color: #004d40;
        height: 300px;
        "></div>


        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                        margin-top: -100px;
                        background: hsla(0, 0%, 100%, 0.4);
                        backdrop-filter: blur(20px);
                    ">
                    <div class="card-body p-5 px-md-5">

                        <div class="row d-flex justify-content-center">

                            <div class="rounded col-lg-4 p-3 border rounded" style="         background: hsla(0, 0%, 100%, 0.4);
                        backdrop-filter: blur(20px);">
                                <div class="text-start">
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                                <img style="height: 100px;" class="img-fluid" src="/assets/img/logo.png" alt="">
                                <h2 class="fw-bold mb-5">Silahkan Login</h2>
                                <form role="form" action="<?= url_to('login') ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="form-outline mb-4">
                                        <input value="<?= old('login'); ?>" name="login" type="text" id="username" class="py-3 form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" />
                                        <label class="form-label" for="username"><?= lang('Auth.emailOrUsername') ?></label>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input name="password" type="password" id="password" class="py-3 form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" />
                                        <label class="form-label" for="password">Password</label>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4 py-3">
                                        <?= lang('Auth.loginAction') ?>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap core JavaScript-->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="/sb/vendor/jquery/jquery.min.js"></script>
    <script src="/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/sb/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/sb/js/sb-admin-2.min.js"></script>
</body>

</html>