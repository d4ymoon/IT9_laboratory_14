<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center vh-100">
        <div class="card mt-5 mb-4" style="width: 400px;" >
            
            <div class="card-header ">
                <h3 class="text-center mb-0">Blogs</h3>   
            </div>

            <div class="card-body" style=" overflow-y: auto;">       
            
                @if(session('success'))
                <div class="ms-1">{{ session('success') }}</div>
                @endif
                <ul class="list-group">
                    @foreach($posts as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                        <div class="d-flex">
                            <a class="btn btn-sm btn-warning me-2" href="{{ route('posts.edit', $post->id) }}">Edit</a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="card-footer text-body-secondary">
                <div class="row justify-content-center align-items-center ms-2 me-2">
                    <a class="btn btn-primary" href="{{ route('posts.create') }}">+ Create New Post</a>
                </div>
            </div>   
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>