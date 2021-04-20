@extends('adminlte::page')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Custom Orders</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{url('/js/auto-complete.js')}}"></script>

    <style>
        
        /*Autocomplete*/
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            max-height: 250px;
            overflow-y: scroll;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }
        
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
        
        /*AUtocomplete*/
    </style>
</head>
<body>

<form method="POST" id="customorder" action="{{url('/admin/custom-order/store')}}" enctype="multipart/form-data">
@csrf
    <div class="container">
        <div class="row">
            <div class="col-sm col-lg-3">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><b>Select Option</b></h5>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-user" aria-selected="true">Current User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-newuser-tab" data-toggle="pill" href="#pills-newuser" role="tab" aria-controls="pills-newuser" aria-selected="false">New User</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Choose User:</b></h5>
                                <input type="text" class="form-control" id="name" data="{{$users}}" placeholder="Enter User's name" oninput="autoComplete.show(this)">
                                <input type="hidden" name="userId">
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-newuser" role="tabpanel" aria-labelledby="pills-newuser-tab">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Create New User:</b></h5>
                                <input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>Provide Details for Order</b></h5>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                        </div>
                        <input type="text" required class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="form-group">
                        
                        <select class="form-control" name="type">
                            <option value="Website Package" selected>Website Package</option>
                            <option value="Landing Page Package">Landing Page Package</option>
                            <option value="Dropshipping Package">Dropshipping Package</option>
                        </select>
                    </div> 

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                        </div>
                        <input type="number" required class="form-control"  name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" required name="description" aria-label="With textarea"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">    
    document.getElementById('pills-user-tab').addEventListener('click', clearInputs);
    document.getElementById('pills-newuser-tab').addEventListener('click', clearInputs);

    function clearInputs(){
        document.getElementsByName('userId')[0].value = null;
        document.getElementById('name').value = null;
        document.getElementsByName('email')[0].value = null;
    }

</script>
</body>
</html>
<script src="/js/validate.js"></script>
<script>
    var customorder = document.getElementById('customorder');
    customorder.addEventListener('submit',  (ev) => _submitorder(ev, customorder));

    function _submitorder(event, form){
        event.preventDefault();

        if(validation.validate(form)){
            form.submit();
        }

    }
</script>
@stop