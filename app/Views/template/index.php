<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= WEB_NAME . " - " . @$title   ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="/sb/css/sb-admin-2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        :root {
            --bg-primary: #0097a7;
            --bg-hijau-tua: #008e76;
            --text-kuning: #fbc02d;
            --text-biru-tua: #0064b7;
        }


        .bg-primary {
            background-color: var(--bg-primary) !important;
        }

        .bg-hijau-tua {
            background-color: var(--bg-hijau-tua);
        }

        .bg-biru-tua {
            background-color: var(--bg-biru-tua);
        }

        .text-primary {
            color: var(--text-kuning) !important;
        }

        .sidebar .nav-item.active .nav-link {
            background-color: var(--text-kuning);
            color: white;
        }

        .btn-primary {
            background-color: var(--text-kuning) !important;
            border: none;
        }

        /* .sidebar .nav-item .nav-link {
            border: 1px solid black;
            margin: 1px 0;
            border-radius: 5px;
        } */
    </style>


</head>

<body id="page-top">
    <div id="wrapper">
        <?= (in_groups('Admin')) ?  $this->include("/template/parsial/sidebar") : $this->include("/template/parsial/sidebarKepalasekolah"); ?>
        <div id="content-wrapper" class="d-flex flex-column bg-primary">
            <div id="content ">
                <?= $this->include("template/parsial/navbar"); ?>
                <div class="container-fluid">
                    <?= $this->include("template/parsial/breadcrumb"); ?>
                    <?= $this->renderSection("content"); ?>

                </div>

            </div>
            <?= $this->include("template/parsial/footer"); ?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih Logout untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include("template/parsial/js") ?>

    <?= $this->renderSection("script"); ?>
</body>

</html>