<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        thead {
            background-color: gray;
        }

        .head {
            text-align: center;
            ;
        }

        .footer {
            /* display: flex;
            flex-direction: row;
            justify-content: center; */
            text-align: center;
            margin-left: 490px;
        }

        .title {
            margin-top: 20px;
            margin-bottom: 70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="margin-bottom: 100px; text-align: center; ">
            <?php
            $srcLogo = APPPATH . '../public/assets/img/logo.png';
            $srcNtt = APPPATH . '../public/assets/img/ntt.png';

            $imageDataLogo  = base64_encode(file_get_contents($srcLogo));
            $imageDataNtt   = base64_encode(file_get_contents($srcNtt));

            $renderLogo     = 'data:' . mime_content_type($srcLogo) . ';base64,' . $imageDataLogo;
            $imageDataNtt   = 'data:' . mime_content_type($srcNtt) . ';base64,' . $imageDataNtt;
            ?>



            <div style="display: inline-block;">
                <img width="70px" src="<?= $renderLogo; ?>" alt="">
            </div>

            <div style="display: inline-block; text-align: center; margin: 0 100px;">
                <p style="margin: 0; font-weight: bold;">Pemerintah Provinsi Nusa Tenggara Timur</p>
                <p style="margin: 0; font-weight: bold;">Dinas Pendidikan dan Kebudayaan</p>
                <p style="margin: 0; font-weight: bold;">SMA Negeri 2 Komodo</p>
                <p style="margin: 0; font-size: small;">Jalan Lintas Selatan Desa Nggorang</p>
            </div>

            <div style="display: inline-block;">
                <img width="70px" src="<?= $imageDataNtt; ?>" alt="">
            </div>


            <h3 class="head"><?= $title; ?></h3>
        </div>

        <hr>
        <?= $this->renderSection("table"); ?>
        <div class="footer">
            <div class="title">
                Kepala SMAN 2 Komodo
            </div>

            <div>
                <p style="font-weight: bold;">(Agustinus Bayuwarta, S. Pd)</p>
                <p style="margin: 0;">Pembina TK I/IV B</p>
                <p>NIP 19700823 199802 1 0002</p>
            </div>
        </div>
    </div>
</body>

</html>