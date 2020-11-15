<?php
    
    if(isset($_POST['title'])){
        $job = new Job();
        $job->title = $_POST['title'];
        $job->description = $_POST['description'];
        $job->save();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <div for="title" class="label">title</div>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <div for="description" class="label">description</div>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <input type="submit" value="Save" class="bn-btn-primary">
        </form>
    </div>
</body>
</html>