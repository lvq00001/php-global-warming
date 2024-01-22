<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

        <?php
          
          $correct = $_SESSION['count'];
          $toast = ""; 
          if ($correct == 7) {
            $toast = "Cấp độ nhà khoa học!";
          } elseif ($correct > 4) {
            $toast = "Cấp độ công dân có trách nhiệm!";
          } else $toast = "Cấp độ học sinh!";
        ?>
        <?php include '../templates/navbar.php' ?>
        <div class="container-fluid my-5 congratulations text-light">
            <p class="fs-3 m-2 fw-bold text-center">Chúc mừng!</p>
            <p class="text-center">Bạn trả lời đúng <?= $correct ?> trên 7 câu. <?= $toast ?></p>

            <div class="d-grid gap-2 col-sm mx-auto mt-5 d-flex align-items-center justify-content-center">
                <a href="/php/start_quiz.php" class="mb-2">
                    <button type="button" class="btn btn-primary">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
                            <path
                                d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
                        </svg>
                        Thử lại
                    </button>
                </a>
                <a href="/php/answer.php" class="mb-2">
                    <button type="button" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-eyeglasses" viewBox="0 0 16 16">
                            <path
                                d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                        </svg>
                        Đáp án
                    </button>
                </a>

            </div>
        </div>
        <?php
          
        ?>
        <?php include '../templates/footer.php';?>
    </body>

</html>