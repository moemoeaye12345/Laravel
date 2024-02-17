<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
     <div class="container">
        <form method="get" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="pic" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="name" accept="image/png, image/jpeg, image/webp">
            </div>
            <button type="submit" class="btn btn-primary">Create category</button>
        </form>
     </div>
</body>
</html>