<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

    <h1 class="display-2 text-center">Your File</h1>
    <a href="/viewfiles" class="btn btn-secondary ms-5 my-5"><-- view files</a>
     <div class="container my-5">
        
        <h3>File name : &emsp; {{$filename}}</h3>
        <h3>File description : &emsp; {{$file->description}}</h3>
        <h3>uploded at : &emsp; {{$file->created_at}}</h3>
        <h3>view of the file  : </h3> <br>
        <div class="embed-responsive embed-responsive-1by1 ">
            <iframe class="embed-responsive-item " src="/files/{{$file->file}} " height="600" width="1000"></iframe>
        </div>

     </div>

    






    <h4 class="text-center text-light mt-5">Copyright@Laradrive 2021-2022</h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>