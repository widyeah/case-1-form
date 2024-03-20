<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #F5F2F8;">
    <?php include 'header.php'; ?>
    <div class="container mt-5">
    <h2 class="text-center mb-4">Profil Anda</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $education = $_POST['education'];
            $image = $_FILES['image']['name'];
            $temp_image = $_FILES['image']['tmp_name'];
            move_uploaded_file($temp_image, "uploads/$image");
            ?>
            <div class="text-center">
                <img src="uploads/<?php echo $image; ?>" class="img-fluid mb-3" alt="Uploaded Image" style="max-width: 50%;">
            </div>
            <div>
                <h5 class="mb-1">Nama:</h5>
                <p><?php echo $name; ?></p>
                <h5 class="mb-1">Email:</h5>
                <p><?php echo $email; ?></p>
                <h5 class="mb-1">Pendidikan:</h5>
                <p><?php echo $education; ?></p>
            </div>
        </div>
    </div>
</div>


    <?php include 'footer.php'; ?>
</body>


</html>
