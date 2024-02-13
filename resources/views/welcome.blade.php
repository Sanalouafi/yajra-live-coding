<!DOCTYPE html>
<html>

<head>
    <title>test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-success mt-5 mb-5"><b>Yajra live coding</b></h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-9"><b>User Data</b></div>

                </div>
            </div>
            <div class="card-body">
                <table id="user_table" class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>


    </div>
    <script>
        $(document).ready(function() {
            $('#user_table').DataTable({
                "processing": true,
                "serverSide": false,
                "ajax": "{{ route('getUser') }}",
                "columns": [{
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "created_at"
                    }
                ]
            })
        })
    </script>

</body>

</html>
