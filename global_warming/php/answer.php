<?php ob_start(); ?>
<?php include '../includes/retrive_quiz.php';?>
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
        <?php  include '../includes/error.php' ?>
        <?php include '../templates/navbar.php' ?>

        <div class="container border">
            <div class="row">
                <div class="my-2 fs-4 fw-bold text-center">Đáp án câu đố</div>
            </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php 
                $your_answers = $_SESSION['statistic'];
                for ($i = 1; $i < 8; $i++) {
                    $id = $i;
                    $title = $arr_title[$id];
                    $check = $arr_correct_answer[$title];
            ?>
                    <hr />
                    <div class="row">
                        <p class="fs-4">Câu số <?= $id ?>:</p>
                    </div>
                    <div class="row">
                        <p class="fs-5"><?= $title ?></p>
                    </div>

                    <?php 
                        $arr = $arr_choice[$title]; 
                        foreach ($arr as $choice) { 
                            $answer = $your_answers[$title];
                            if ($answer != $check && $choice == $answer) {
                    ?>
                    <div class="incorrect row my-1 py-2 mx-1">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-x-lg"
                                viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>
                            <?= $choice ?>
                        </div>
                    </div>
                    <?php } elseif ($choice == $check) { ?>
                    <div class="correct row my-1 py-2 mx-1">

                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <?= $choice ?>
                        </div>
                    </div>
                    <?php } else {?>
                    <div class="result row bg-light my-1 py-2 mx-1">
                        <div class=""><?= $choice ?></div>
                    </div>
                    <?php 
                            }
                        }
                    ?>
                    <div class="pt-2">

                        <button class="btn btn-success" type="button" data-bs-toggle="collapse"
                            data-bs-target="<?= '#button'.$id ?>" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                            Giải thích
                        </button>
                        <div class="collapse" id="button<?= $id ?>">
                            <div class="card card-body">
                                <?= $arr_explanation[$id] ?>
                            </div>
                        </div>
                    </div>
                    <br />
                    <?php } ?>

                </div>
                <div class="col-1"></div>
            </div>

            <?php include '../templates/footer.php';?>
    </body>


</html>