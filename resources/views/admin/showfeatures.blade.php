@extends('adminlte::page')

@section('content')
<!-- 


██████╗░███████╗██╗░░░██╗███████╗██╗░░░░░░█████╗░██████╗░███████╗██████╗░  ██████╗░██╗░░░██╗
██╔══██╗██╔════╝██║░░░██║██╔════╝██║░░░░░██╔══██╗██╔══██╗██╔════╝██╔══██╗  ██╔══██╗╚██╗░██╔╝
██║░░██║█████╗░░╚██╗░██╔╝█████╗░░██║░░░░░██║░░██║██████╔╝█████╗░░██║░░██║  ██████╦╝░╚████╔╝░
██║░░██║██╔══╝░░░╚████╔╝░██╔══╝░░██║░░░░░██║░░██║██╔═══╝░██╔══╝░░██║░░██║  ██╔══██╗░░╚██╔╝░░
██████╔╝███████╗░░╚██╔╝░░███████╗███████╗╚█████╔╝██║░░░░░███████╗██████╔╝  ██████╦╝░░░██║░░░
╚═════╝░╚══════╝░░░╚═╝░░░╚══════╝╚══════╝░╚════╝░╚═╝░░░░░╚══════╝╚═════╝░  ╚═════╝░░░░╚═╝░░░

░██████╗░░█████╗░██████╗░  ████████╗███████╗░█████╗░███╗░░░███╗
██╔════╝░██╔══██╗██╔══██╗  ╚══██╔══╝██╔════╝██╔══██╗████╗░████║
██║░░██╗░██║░░██║██████╔╝  ░░░██║░░░█████╗░░███████║██╔████╔██║
██║░░╚██╗██║░░██║██╔══██╗  ░░░██║░░░██╔══╝░░██╔══██║██║╚██╔╝██║
╚██████╔╝╚█████╔╝██║░░██║  ░░░██║░░░███████╗██║░░██║██║░╚═╝░██║
░╚═════╝░░╚════╝░╚═╝░░╚═╝  ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚═╝░░░░░╚═╝



 -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Form Pages</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Dropshipping</b></h2></div>
                    
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Add</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Feature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/pages/feature')}}" enctype="multipart/form-data">
				        @csrf
                            <div class="form-group">
                                <label for="featurename">Name</label>
                                <input type="text" class="form-control" id="featurename" name="featurename" placeholder="Enter feature.">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price.">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description.">
                            </div>
                            <div class="form-group row">
                                <label for="info" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" id="image" name="image" files=true type="file" accept="image/*">
                                    </div>  
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>FeatureName</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($features as $feature)
                    <tr>
                        <td>{{$feature->featurename}}</td>
                        <td>{{$feature->price}}</td>
                        
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="delete" title="Delete" href="{{url('/admin/pages/feature/delete/'.$feature->id)}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> 
                @endforeach
                         
                </tbody>
            </table>
        </div>
    </div>
</div>     


<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Landing page</b></h2></div>
                    
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#include">Add</button>

                <!-- Modal -->
                <div class="modal fade" id="include" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Includes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/pages/include')}}" enctype="multipart/form-data">
				        @csrf
                            <div class="form-group">
                                <label for="includeonpages">Name</label>
                                <input type="text" class="form-control" id="includeonpages" name="includeonpages" placeholder="Enter include on page.">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price.">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="includesDescription" name="includesDescription" placeholder="Enter description.">
                            </div>
                            <div class="form-group row">
                                <label for="info" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" id="image" name="image" files=true type="file" accept="image/*">
                                    </div>  
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>FeatureName</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($includes as $include)
                    <tr>
                        <td>{{$include->includeonpages}}</td>
                        <td>{{$include->price}}</td>
                        
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="delete" title="Delete" href="{{url('/admin/pages/include/delete/'.$include->id)}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> 
                @endforeach
                         
                </tbody>
            </table>
        </div>
    </div>
</div>     



<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Website</b></h2></div>
                    
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#types">Add</button>

                <!-- Modal -->
                <div class="modal fade" id="types" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Types</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/pages/pagetype')}}" enctype="multipart/form-data">
				        @csrf
                            <div class="form-group">
                                <label for="pagetypes">Name</label>
                                <input type="text" class="form-control" id="pagetypes" name="pagetypes" placeholder="Enter pagetype.">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price.">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description.">
                            </div><!-- 
                            <div class="form-group row">
                                <label for="info" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" id="image" name="image" files=true type="file" accept="image/*">
                                    </div>  
                                </div>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pagetype</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pagetypes as $pagetype)
                    <tr>
                        <td>{{$pagetype->pagetypes}}</td>
                        <td>{{$pagetype->price}}</td>
                        
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="delete" title="Delete" href="{{url('/admin/pages/pagetype/delete/'.$pagetype->id)}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> 
                @endforeach
                         
                </tbody>
            </table>
        </div>
    </div>
</div>     




<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Addons</b></h2></div>
                    
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addons">Add</button>

                <!-- Modal -->
                <div class="modal fade" id="addons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Addons</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/pages/addon')}}" enctype="multipart/form-data">
				        @csrf
                            <div class="form-group">
                                <label for="addons">Name</label>
                                <input type="text" class="form-control" id="addons" name="addons" placeholder="Enter addons.">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price.">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description.">
                            </div>
                            <div class="form-group row">
                                <label for="info" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" id="image" name="image" files=true type="file" accept="image/*">
                                    </div>  
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Addons</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($addons as $addon)
                    <tr>
                        <td>{{$addon->addonsname}}</td>
                        <td>{{$addon->price}}</td>
                        
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="delete" title="Delete" href="{{url('/admin/pages/addon/delete/'.$addon->id)}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> 
                @endforeach
                         
                </tbody>
            </table>
        </div>
    </div>
</div>    



<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Promo Code</b></h2></div>
                    
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Promo">Add</button>

                <!-- Modal -->
                <div class="modal fade" id="Promo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Promo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/pages/promocode')}}" enctype="multipart/form-data">
				        @csrf
                            <div class="form-group">
                                <label for="promocode">Name</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter promocode.">
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="number" class="form-control" id="discount" name="discount" placeholder="Enter discount.">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Promocode</th>
                        <th>Discount</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($promocode as $addon)
                    <tr>
                        <td>{{$addon->code}}</td>
                        <td>{{$addon->discount}}</td>
                        
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="delete" title="Delete" href="{{url('/admin/pages/promocode/delete/'.$addon->id)}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> 
                @endforeach
                         
                </tbody>
            </table>
        </div>
    </div>
</div>    
</body>
</html>
@stop
