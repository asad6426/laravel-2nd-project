<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>post</title>
</head>

<body>
    <div class="container p-5">
        <div class="col-lg-4"></div>
        <div class="container col-lg-8 ">
            <a href="{{ route('add.category') }}" class="btn btn-danger">Add Category</a>
            <a href="{{ route('all.category') }}" class="btn btn-info">All Category</a>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Category Nmae</th>
                        <th>Slug Name</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    @foreach($category as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="{{ URL::to('edit/category/'.$row->id) }}"
                                    class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ URL::to('delete/category/'.$row->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                                <a href="" class="btn btn-sm btn-success">View</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
