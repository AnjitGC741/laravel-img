<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <img src="{{asset('/storage/images/iFkAAbjD1ZWDV2jBQga3Pe2ERI1Yaia3uqrLqyqT.png')}}" alt="">
    <form action="{{route('saveImg')}}" method="POST" enctype="multipart/form-data" class="border border-success p-4" style="width: 40%; margin:100px auto;">
    @csrf
    <h2>Insert a image</h2>
        <input type="file" class="form-control" name="uploadedImg">
        <button type="submit" class="btn btn-success mt-4">Add</button>
    </form>
</body>
</html>