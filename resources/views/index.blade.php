<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/> 

   
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-mb-12">
                    <table id="tabla" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>&nbsp;</th>
                           </tr>
                        </thead>
                       
                    </table>
                </div>
            </div>
        </div>        
    </body>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

        <script>
            // AJAX
            $(document).ready( function () {
                $('#tabla').DataTable({
                    "serverSide": true,
                    "ajax": "{{ url('api/users') }}",
                    "columns": [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'address'},
                        {data: 'phone'},
                        {data: 'btn'},
                    ],
                    "language": {}
                });
            });
    </script>
</html>
