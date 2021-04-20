@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


<h1>Dashboard</h1>

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
@stop

@section('content')
    
<div class="container-fluid">                                      
<!-- Main content -->
    <section class="content">
    
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$webformorders}}</h3>
                    <p>Webform Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/admin/orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$landingformorders}}</h3>

                    <p>Landing Form Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/admin/orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$dropshippingorders}}</h3>

                    <p>Dropshipping Form Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/admin/orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$usercount}}</h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="/admin/users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
        
            <div class="col-4 list-group">
                <h2>Messages</h2>

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
                    </div>
                @endforeach

                <a href="/admin/messages" class="small-box-footer float-right">View More <i class="fas fa-arrow-circle-right"></i></a>

            </div>
        </div>
    </section>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop