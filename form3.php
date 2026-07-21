<?php
include_once "form3-function.php";
$fruits = ['mango', 'orange', 'banana', 'lemon', 'pineapple', 'watermelon'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Section</title>

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
            width: 700px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column culumn-offset-20">
                <h2> Select Dropdowns</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla reiciendis quam maiores sapiente mollitia sit voluptatum asperiores in, facilis, aperiam consequatur. Ratione accusamus vel obcaecati hic nam, adipisci excepturi distinctio provident quia minima culpa numquam qui autem corporis itaque atque animi molestias eius expedita similique inventore! Iste qui similique magnam?</p>

                <p>
                    <?php
                    if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
                        printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS),);
                    }
                    ?>
                </p>

            </div>
        </div>
        <div class="row">
            <div class="column culumn-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select name="fruits" id="fruits">
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php displayOption($fruits); ?>
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>