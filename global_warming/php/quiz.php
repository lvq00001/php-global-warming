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

        <?php include '../templates/navbar.php' ?>
        <div class="d-flex justify-content-center p-2">
            <div class="container-sm border my-2 col-sm-8 quiz text-white">
                <div class="row">
                    <div class="my-2 fs-3 fw-bold text-center">Câu đố hiện tượng NÓNG LÊN TOÀN CẦU</div>
                </div>

                <?php 
        $id = $_GET['id'];
        if ($id < 1 || $id > 7) {
            header("Location: http://{$_SERVER["HTTP_HOST"]}/php/error_page.php");
        }
        $title = $arr_title[$id];
        $check = $arr_correct_answer[$title];
      ?>
                <div class="row">
                    <p class="fs-3 fw-bold">Câu số <?= $id ?>:</p>
                </div>
                <div class="row">
                    <p class="fs-4 fw-bold"><?= $title ?></p>
                </div>

                <div class="">
                    <form action="../includes/next_quiz_action.php">
                        <?php $arr = $arr_choice[$title]; foreach ($arr as $choice) { ?>
                        <div class="row px-2">
                            <label class="border border-light bg-light py-2 my-1 fs-6 choice-hover text-dark">
                                <input type="radio" id="<?= $_GET['id'] ?>" name="choice" value="<?= $choice ?>" />
                                <?= $choice ?>
                            </label>
                        </div>

                        <?php } ?>
                        <br />
                        <input type="radio" id="id" name="id" value="<?= $id ?>" checked="checked" hidden />
                        <input type="radio" id="title" name="title" value="<?= $title ?>" checked="checked" hidden />
                        <input type="radio" id="correct_answer" name="correct_answer" value="<?= $check ?>"
                            checked="checked" hidden />

                        <button id="submit-button" type="submit" class="hidden btn btn-primary btn-lg mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 20 20">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                            <?php 
                      $message = "KẾ TIẾP";
                      if ($id == 7) {
                        $message = "KẾT QUẢ";
                      }
                    ?>
                            <?= $message ?>
                        </button>

                    </form>
                </div>

            </div>
        </div>

        <?php include '../templates/footer.php';?>
    </body>
    <script>
    $("input[type=radio]").click(function() {
        if ($(this).is(":checked")) {
            $("#submit-button").prop("disabled", false).removeClass("hidden");
        }
    });
    </script>

</html>