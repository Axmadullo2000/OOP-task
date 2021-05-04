<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/add_style.css">
    <title>Document</title>
</head>
<body>
    <div id="create_tags">
          <h2 class="text-dark text-center mt-4 mb-3">Add Context</h2>
          <form method="post" id="context_form">
                <input type="text" name="context_post" id="context_post" placeholder="Post Context" class="form-control">
                <button class="btn btn-success form-control" id="save_post">Save</button>
          </form>
          <div id="message"></div>
          <a href="../templates/form.php" class="form-control btn btn-danger back mt-4">Назад</a>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="../templates/tags.js"></script>
</body>
</html>