
<!-- including login and register modals -->
@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="/css/clientportal/my-order.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- <div class="my-order overflow-controller">
<a class="btn btn-secondary" href="/admin/orders/latest">Latest</a>
<a class="btn btn-secondary" href="/admin/orders/oldest">Oldest</a>
<div class="grid-table overflow-holder">
<div class="data">
    <div class="text-bold">Description:</div>
    <div class="text-bold">Invoice:</div>
    <div class="text-bold">Status:</div>
    <div class="text-bold">Price:</div>
    <div class="text-bold">Payment:</div>
    <div class="text-bold">Order Date:</div>
    <div class="text-bold">Due Date:</div>
    <div class="text-bold">Details:</div>
</div> -->

<table class="table table-bordered data-table">
  <thead>
  <!-- <a class="btn btn-secondary" href="/admin/users/latest">Latest</a>
  <a class="btn btn-secondary" href="/admin/users/oldest">Oldest</a> -->

    <tr>
      <th scope="col">Description</th>
      <th scope="col">Invoice</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Payment</th>
      <th scope="col">Order Date</th>
      <!-- <th scope="col">Due Date</th> -->
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    


    </tbody>
</table>


</div>

<script type="text/javascript" src="/js/dt.js"></script>
<script type="text/javascript" src="/js/datatables.js"></script>
<script type="text/javascript">

  $(document).ready(function () {

    $('.data-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: "{{ route('orders.showorders') }}",

        columns: [

            {data: 'type', name: 'type'},
            {data: 'id', name: 'id'},
            {data: 'user_name', name: 'user_name'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'price', name: 'price'},
            {data: 'payment', name: 'payment'},
            {data: 'created_date', name: 'created_date'},
            {data: 'viewdetails', name: 'viewdetails', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            

        ]

    });
    

  });


  $(document).on('click','.btnClick', function() {
   var statusVal = $(this).parent().parent().find(".status")[0].value;
   var id = $(this).attr("id");
   console.log(statusVal);
   var _token = "{{csrf_token()}}";
   $.ajax({
            type: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8',
              'accept': 'application/json'
            },
            url:'/admin/orders/'+id+'/edit',
            data: JSON.stringify({_token: _token, status: statusVal})
        });
    });

  
</script>
@endsection

