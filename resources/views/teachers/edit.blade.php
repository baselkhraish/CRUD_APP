<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Start Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Start Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <title>Edit Teacher</title>
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 >Update Teacher</h1>
            <a onclick="history.back()" class="btn btn-outline-dark">Return back</a>
        </div>
        <form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid
                @enderror" value="{{ old('name',$teacher->name) }}"/>
                @error('name')
                    <small class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid
                @enderror" value="{{ old('email',$teacher->email) }}"/>
                @error('email')
                    <small class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid
                @enderror" value="{{ old('phone',$teacher->phone) }}"/>
                @error('phone')
                    <small class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <button class="btn btn-success w-25">Update</button>
        </form>
    </div>

</body>
</html>
