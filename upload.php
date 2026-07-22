<?php
$allowedTypes = array(
    'image/jpeg',
    'image/png',
    'image/gif',
    'image/bmp',
    'image/tiff',
    'image/webp'
);

if ($_FILES['photo']) {
    if (in_array($_FILES['photo']['type'], $allowedTypes) !== false && $_FILES['photo']['size'] <= 5 * 1024 * 1024 ) {
        move_uploaded_file($_FILES['photo']['tmp_name'], "file/" . $_FILES['photo']['name']);
    }
}

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
                <h2> Upload file</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla reiciendis quam maiores sapiente mollitia sit voluptatum asperiores in, facilis, aperiam consequatur. Ratione accusamus vel obcaecati hic nam, adipisci excepturi distinctio provident quia minima culpa numquam qui autem corporis itaque atque animi molestias eius expedita similique inventore! Iste qui similique magnam?</p>

                <pre>
                    <p>
                        <?php
                        print_r($_POST);
                        print_r($_FILES);
                        ?>
                    </p>
                </pre>

            </div>
        </div>
        <div class="row">
            <div class="column culumn-offset-20">
                <form method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo"><br>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>