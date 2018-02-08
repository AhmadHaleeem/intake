




@extends('admin/layouts/app')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection
@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin Page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin Page</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Bedrijf</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bedrijf</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>UserName</th>
                                    <th>Products</th>
                                    <th>Goal</th>
                                    <th>Competitors</th>
                                    <th>MakeCompanyBeter</th>
                                    <th>goalsOfTheWebsite</th>
                                    <th>Anders</th>
                                    <th>ReasonMakeWebsite</th>
                                    <th>OldBadWebsites</th>
                                    <th>Visitor</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evaluations as $evaluation)

                                    @php

                                        if ( $evaluation->goalsOfTheWebsite == NULL) {
                                             $evaluation->goalsOfTheWebsite = 'NULL';
                                        }

                                     if ( $evaluation->anders == NULL) {
                                             $evaluation->anders = 'NULL';
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $evaluation->user_name }}</td>
                                        <td>{{ $evaluation->products }}</td>
                                        <td>{{ $evaluation->goal }}</td>
                                        <td> {{ $evaluation->competitors  }}</td>

                                        <td>{{ $evaluation->makeCompanyBeter }}</td>
                                        <td> {{ $evaluation->goalsOfTheWebsite }}</td>
                                        <td> {{ $evaluation->anders }}</td>
                                        <td> {{ $evaluation->reasonMakeWebsite }}</td>

                                        <td>{{ $evaluation->oldBadWebsites }}</td>
                                        <td>{{ $evaluation->visitor }}</td>
                                        <td>{{ $evaluation->created_at->diffForHumans() }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <th>UserName</th>
                                    <th>Products</th>
                                    <th>Goal</th>
                                    <th>Competitors</th>
                                    <th>MakeCompanyBeter</th>
                                    <th>goalsOfTheWebsite</th>
                                    <th>Anders</th>
                                    <th>ReasonMakeWebsite</th>
                                    <th>OldBadWebsites</th>
                                    <th>Visitor</th>
                                    <th>Date</th>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footerSection')
    <script src="{{ asset("admin/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection