<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Start Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Start Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <title>Teacher</title>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><a href="{{ route('teachers.index') }}" style="text-decoration: none; color:#333">All Teacher</a> </h1>
            <a class="btn btn-success" href="{{ route('teachers.create') }}">Add New Teacher</a>
        </div>

        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('msg') }}
            </div>
        @endif

        <div class="table-responsive">
            <form action="{{ route('teachers.index') }}" method="GET">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request()->keyword }}" placeholder="search..."
                        name="keyword">
                    <button class="btn btn-success" type="submit" id="button-addon2">search</button>
                </div>
            </form>
            <table class="table table-bordered table-hover table-striped">
                <tr class="table-dark ">
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Actions</th>
                </tr>



                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->created_at->format('d/m/Y ') }}</td>
                        <td>{{ $teacher->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                            <form class="d-inline" action="{{ route('teachers.destroy', $teacher->id) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure deleted?!')" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></button>

                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $teachers->links() }}
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        setTimeout(() => {
            $('.alert').slideUp(700);
        }, 1000);
    </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        @if (session('msg'))
            Toast.fire({
            icon: 'success',
            title: '{{ session('msg') }}'
            })
        @endif
    </script>
</body>

</html>
