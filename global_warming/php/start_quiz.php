<?php  
    session_start();
    $_SESSION['answered'] = [];
    $_SESSION['count'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/styles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </head>

    <body>

        <?php include '../templates/navbar.php'; ?>

        <div class="container">
            <div class="quiz-start p-5 mb-4 rounded-3 ">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Đố Vui</h1>
                    <p class="col-md-8 fs-5">Hãy kiểm tra kiến thức của bạn về Nóng Lên Toàn Cầu!</p>
                    <p class="lead">
                        <a class="btn btn-light btn-lg" href="/php/quiz.php?id=1" role="button">BẮT ĐẦU</a>
                    </p>
                </div>
            </div>
        </div>

        <?php include '../templates/footer.php';?>
    </body>

</html>