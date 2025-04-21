<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

<div class="container py-3"> 

    <div class="card shadow-sm" style="padding: 15px;">
        <div class="card-header">
            <h4 class="mb-0">{{ $post->title }}</h4>
        </div>

        <div class="card-body py-2 px-3"> 
          
            <div class="mb-3">
                <textarea class="form-control" rows="10" disabled>{{ $post->body }}</textarea>
            </div>

         
            <div class="d-flex justify-content-between">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script></body>

</body>
</html>
