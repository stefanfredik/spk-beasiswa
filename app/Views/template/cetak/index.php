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
            margin-left: 600px;
        }

        .title {
            margin-top: 20px;
            margin-bottom: 70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h3 class="head"><?= $title; ?></h3>
        </div>
        <hr>
        <?= $this->renderSection("table"); ?>

        <div class="footer">
            <div class="title">
                Kepala Desa
            </div>

            <div>
                ( ______________________ )
            </div>
        </div>
    </div>
</body>

</html>