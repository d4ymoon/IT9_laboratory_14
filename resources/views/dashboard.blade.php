<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="card-lg shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-0">Welcome, {{ auth()->user()->name }}!</h4>
                <small class="text-muted">Logged in as {{ auth()->user()->email }}</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a class="btn btn-primary" href="{{ route('posts.create') }}">+ Create New Post</a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>

        <div class="card-body" style="max-height: 500px; overflow-y: auto;">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <h5>Your Posts</h5>
            <ul class="list-group mt-3">
                @forelse($posts as $post)
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
                @empty
                <li class="list-group-item">No posts available.</li>
                @endforelse
            </ul>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script></body>
</body>
</html>
