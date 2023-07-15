@extends('adminlte::page')

@section('title', 'Menu')

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <div class="btn-group">
                <button type="button" class="btn btn-lg btn-secondary" data-toggle="tooltip" title="Upload File" onclick="openFileUploader()">
                    <i class="fas fa-upload"></i>
                </button>
                <input type="file" id="fileUploader" style="display: none;">
            </div>
            <button type="button" class="btn btn-lg btn-danger" style="" data-toggle="tooltip" title="Export PDF" onclick="exportData('pdf')">
                <i class="fas fa-file-pdf" ></i>
            </button>
            <button type="button" class="btn btn-lg btn-warning"  data-toggle="tooltip" title="Export Excel" onclick="exportData('excel')">
                <i class="fas fa-file-excel" style="color:white;"></i>
            </button>
            <button type="button" class="btn btn-lg btn-info" data-toggle="tooltip" title="Export CSV" onclick="exportData('csv')">
                <i class="fas fa-file-csv"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('menus') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'category_name', name: 'category_name'},
                {data: 'image', name: 'image'},
                {data: 'price', name: 'price'},
                {data: 'description', name: 'description'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    });
</script>
@stop
