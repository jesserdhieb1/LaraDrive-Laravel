<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-light ">
<div class="bg-dark text-light text-center">
<h1 class="display-1 my-5">Laradrive</h1>
<a href="/" class="btn btn-secondary "><-- Home page</a>
<h3>You can Upload your file here </h3>
    <div class="container ">
        <form action="/uploadfile" method="POST" enctype="multipart/form-data">
        @csrf
            <label for="name" class="my-3">File Name</label><br>
            <input type="text" name="name"class="my-3"><br>
            <label for="description"class="my-3">Description of The File</label><br>
            <textarea name="description" class="my-3" cols="40" rows="5"></textarea><br>
            <label for="file"class="my-3">Upload Your File Down Here</label><br>
            <input type="file" name="file"class="my-3"><br>
            <input type="submit" class="btn btn-success my-3">
        </form>
    </div>
    </div>
    <h4 class="text-center text-light">Copyright@Laradrive 2021-2022</h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>