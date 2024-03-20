<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body style="background-color: #F5F2F8;">
    <?php include 'header.php'; ?>

    <div class="container mt-5">
        <h2>Masuk </h2>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="name" class="mb-2">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="mb-2">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="education" class="mb-2">Tingkat Pendidikan:</label>
                <select class="form-select" id="education" name="education" required>
                    <option value="">Pilih salah satu tingkat Pendidikan</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="image" class="mb-2">Foto:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept=".png, .jpg, .jpeg" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #7D5CAB;">Kirim</button>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
