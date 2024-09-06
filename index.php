<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
<main class="container">
        <h1 class="d-flex justify-content-center my-4">Strong Password Generator</h1>
        <form action="" method="get">
            <div class="input-group my-4">
                <label for="lunghezza">Qui puoi specificare quanto lunga deve essere la tua password (da 5 a 30 caratteri):</label>
                <input type="number" name="length" min="5" max="30" class="form-control mx-2" id="lunghezza" placeholder="Lunghezza">
                <button class="btn btn-primary" type="button">Genera</button>
            </div>
            <div><?php echo " La tua password è:" ?></div>
        </form>
    </main>
</body>
</html>