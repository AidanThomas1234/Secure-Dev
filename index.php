<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search System</title>
</head>
<body>
    <h1>Searching System</h1>
    <div class="container-fluid">
        <form action="index.php" method = "post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Item" aria-label="Search Item"
                    aria-describedby="btnSearch" name="enteredItem">
                <button class="btn btn-outline-secondary" type="submit" id="btnSearch">Search Item</button>
            </div>
        </form>
    </div>
    <?php
    echo($_POST['enteredItem']);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>