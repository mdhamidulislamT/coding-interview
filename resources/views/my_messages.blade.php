<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admins</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('navbar')
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <h3> My Message List </h3>
            </div>
            <div class="col-md-9 text-end">
                <h4> Name: {{ $employee->name }} , Email: {{ $employee->email }}</h4>
            </div>

            <p class="text-danger text-center">this is without authentication when we will use authentication,  This page can be accessed by only authenticated Employee & ONLY assigned issues will be loaded  </p>

            <table class="table table-hover mt-1">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Message_Category</th>
                        <th scope="col">Customer_Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($messages as  $key => $row)
                        <tr>
                            <th scope="row">

                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $key + 1 }}
                                    </label>
                                    @if ($row->status == 'new')
                                        <input class="form-check-input" name="msg_id[]" type="checkbox"
                                            value="{{ $row->id }}" id="flexCheckDefault">
                                    @endif

                                </div>
                            </th>
                            <td>{{ $row->message_category->name }}</td>
                            <td>{{ $row->customer->name }}</td>
                            <td>
                                @if ($row->status == 'new')
                                    <span class="badge bg-primary">{{ $row->status }}</span>
                                @elseif($row->status == 'solved')
                                    <span class="badge bg-success">{{ $row->status }}</span>
                                @else
                                    <span class="badge bg-info">{{ $row->status }}</span>
                                @endif
                            </td>
                            <td>
                                @if ($row->status == 'solved')
                                    <button type="button" class="btn btn-success">Closed</button>
                                @else
                                    <form method="POST" action="{{ route('message.update', ['id' => $row->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-primary">Complete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="">No records</th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="d-flex justify-content-start">
                {!! $messages->links() !!}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
