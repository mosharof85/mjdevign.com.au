
<!-- including login and register modals -->
@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="/css/clientportal/style.css">
<link rel="stylesheet" href="/css/clientportal/services.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      




<table class="table table-bordered data-table">
  <thead>
  <!-- <a class="btn btn-secondary" href="/admin/users/latest">Latest</a>
  <a class="btn btn-secondary" href="/admin/users/oldest">Oldest</a> -->

    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">Phonenumber</th>
    </tr>
    </thead>
    <tbody>

    


    </tbody>
</table>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
<script type="text/javascript" src="/js/dt.js"></script>
<script type="text/javascript" src="/js/datatables.js"></script>
<script type="text/javascript">

  $(document).ready(function () {

    $('.data-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: "{{ route('users.showusers') }}",

        columns: [

            {data: 'id', name: 'id'},

            {data: 'name', name: 'name'},

            {data: 'lastname', name: 'lastname'},

            {data: 'email', name: 'email'},

            {data: 'country', name: 'country'},

            {data: 'city', name: 'email'},
            {data: 'phonenumber', name: 'phonenumber'},




        ]

    });

  });

</script>

@endsection