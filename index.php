<?php
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Method</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f5f6;
        }

        .container {
            background: #ffffff;
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati saepe alias, necessitatibus repudiandae quibusdam id culpa, dignissimos libero iste facere voluptatem consectetur repellat animi ipsa error sint! Ipsa, quae repellat?</p>
                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    $checked = '';
                    if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        // $fname = htmlspecialchars($_REQUEST['fname'])
                        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }

                    if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        // $fname = htmlspecialchars($_REQUEST['lname'])
                        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }

                    if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                        $checked = 'checked';
                    }

                    ?>
                </p>
            </div>

        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?> ">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <div>
                        <label class="label">Select Some Fruits</label>

                        <input type="checkbox" name="fruits[]" value="Orange" <?php isChecked('fruits', 'orange'); ?>>
                        <label class="label-inline">Orange</label><br>

                        <input type="checkbox" name="fruits[]" value="Mango" <?php isChecked('fruits', 'Mango'); ?>>
                        <label class="label-inline">Mango</label><br>

                        <input type="checkbox" name="fruits[]" value="Banana" <?php isChecked('fruits', 'Banana'); ?>>
                        <label class="label-inline">Banana</label><br>

                        <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon'); ?>>
                        <label class="label-inline">Lemon</label><br>
                    </div>


                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>