<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="mx-4 px-4 py-2">
    <form action="recursiveSorts.php" method="post">
        <div class="mb-3">
            <label for="expression"  class="form-label">Numbers to be sorted</label>
            <input type="text" name="expression" class="form-control" id="expression" aria-describedby="expressionHelp" <?php if (isset($_GET['input'])) { echo 'value="'.$_GET['input'].'"'; } ?>>
            <div id="expressionHelp" class="form-text">CSV only</div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sorttype" id="heap" value="Heap Sort" checked>
            <label class="form-check-label" for="heap">
                Heap Sort
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sorttype" id="quick" value="Quick Sort">
            <label class="form-check-label" for="quick">
                Quick Sort
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <div class="bg-light p-5 rounded-lg m-3">
        <h1 class="display-4">
            <?php if (isset($_GET['submitted'])) { echo $_GET['sortType'] . '<br />' . $_GET['submitted']; } ?>
        </h1>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>