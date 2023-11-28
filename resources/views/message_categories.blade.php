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
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3> Customer List </h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($message_categories as  $key => $row)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $row->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="">No records</th>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $message_categories->links() !!}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
