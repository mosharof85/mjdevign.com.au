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
    <title>Messages</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8"><h2> <b>Messages:</b></h2></div>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#messageModal">Send Message</button>
        </div>
        <div class="list-group">
            @foreach ($messages as $message)
                <div href="#" class="list-group-item list-group-item-action mt-1">
                    <div class="d-flex w-100 justify-content-between mb-2">
                        <span class="badge badge-primary badge-pill align-self-center"> To: 
                                @foreach ($users as $user)
                                    @if($user->id == $message->u_id)
                                        {{$user->name}} ({{$user->email}})
                                    @else
                                        @continue
                                    @endif
                                @endforeach
                        </span>
                        <span class="badge badge-primary badge-pill align-self-center">{{$message->created_at->format('Y-m-d')}}</span>
                    </div>
                    <h3 class="mb-2">
                        {{$message->title}}
                    </h3>
                    <p class="mb-1"><i>"{{$message->body}}"<i></p>
                    <div class="d-flex w-100 justify-content-between mb-1">
                        <p></p>
                        <a class="btn btn-danger" title="Delete" data-toggle="tooltip" href="{{url('/admin/messages/remove/'.$message->id)}}"><i class="material-icons">&#xE872;</i></a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Modal -->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Send New Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/admin/messages/store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <select name="userId">
                                    <option value="" disabled hidden>Select User</option>
                                    <!-- <option hidden selected="true" value="none"></option> -->
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} ({{$user->email}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="body">Description</label>
                                <input type="text" class="form-control" id="body" name="body" placeholder="Enter Message">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@stop