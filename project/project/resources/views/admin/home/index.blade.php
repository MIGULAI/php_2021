@extends('header')

@section('head_add')
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
@endsection

@section('title' )
    Admin page
@section('main_content')



    <!-- Main content -->
    <section class="contents">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info smbox">
                        <div class="inner">
                            <h3>{{$orders_count}}</h3>

                            <p>Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success smbox">
                        <div class="inner">
                            <h3>{{$ru_count}}</h3>

                            <p>Registered Users</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning smbox">
                        <div class="inner">
                            <h3>{{$clients_count}}</h3>

                            <p>Clients</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger smbox">
                        <div class="inner">
                            <h3>{{$an_count}}</h3>

                            <p>Admins number</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('footer')
