<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-sm" style="padding: 15px;">
        <div class="card-header">
            <h4 class="mb-0">Edit Post</h4>
        </div>

        <div class="card-body" style="padding: 20px;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                </div>

                <div class="mb-4">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body" id="body" rows="8" class="form-control" required>{{ $post->body }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script></body>
</html>
