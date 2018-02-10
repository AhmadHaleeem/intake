
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
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Admin Page</a></li>
                <li class="active">Ontwerps</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ontwerps</h3>

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
                                    <th>apperance</th>
                                    <th>corporateIdentity</th>
                                    <th>website1</th>
                                    <th>website2</th>
                                    <th>website3</th>
                                    <th>mooiWebsite1</th>
                                    <th>mooiWebsite2</th>
                                    <th>mooiWebsite3</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ontwerps as $ontwerp)

                                    @php

                                        if ( $ontwerp->website1 == NULL) {
                                            $ontwerp->website1 = 'NULL';
                                       }

                                       if ( $ontwerp->website2 == NULL) {
                                            $ontwerp->website2 = 'NULL';
                                       }

                                       if ( $ontwerp->website3 == NULL) {
                                            $ontwerp->website3 = 'NULL';
                                       }
                                       if ( $ontwerp->mooiWebsite1 == NULL) {
                                            $ontwerp->mooiWebsite1 = 'NULL';
                                       }

                                       if ( $ontwerp->mooiWebsite2 == NULL) {
                                            $ontwerp->mooiWebsite2 = 'NULL';
                                       }

                                       if ( $ontwerp->mooiWebsite3 == NULL) {
                                            $ontwerp->mooiWebsite3 = 'NULL';
                                       }
                                    @endphp
                                    <tr>
                                        <td>{{ $ontwerp->user_name }}</td>
                                        <td>{{ $ontwerp->apperance }}</td>
                                        <td>{{ $ontwerp->corporateIdentity }}</td>
                                        <td> {{ $ontwerp->website1  }}</td>

                                        <td>{{ $ontwerp->website2 }}</td>
                                        <td>{{ $ontwerp->website3 }}</td>
                                        <td> {{ $ontwerp->mooiWebsite1 }}</td>

                                        <td>{{ $ontwerp->mooiWebsite2 }}</td>
                                        <td>{{ $ontwerp->mooiWebsite3  }}</td>
                                        <td>{{ $ontwerp->created_at->diffForHumans()  }}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <th>UserName</th>
                                <th>apperance</th>
                                <th>corporateIdentity</th>
                                <th>website1</th>
                                <th>website2</th>
                                <th>website3</th>
                                <th>mooiWebsite1</th>
                                <th>mooiWebsite2</th>
                                <th>mooiWebsite3</th>
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