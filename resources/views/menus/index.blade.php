@extends('adminlte::page')

@section('title', 'Menu')

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <div class="dropdown">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item active" href="#"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-jp me-1"></span> <span>Japan</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cn me-1"></span> <span>China</span></a>
                    </li>
                </ul>
            
                <a href="menus/create" type="button" class="btn btn-sm btn-primary" style="" data-toggle="tooltip" title="create menus" >
                    <i class="fas fa-plus" ></i>
                </a>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Upload File" onclick="openFileUploader()">
                        <i class="fas fa-upload"></i>
                    </button>
                    <input type="file" id="fileUploader" style="display: none;">
                </div>
                <button type="button" class="btn btn-sm btn-danger" style="" data-toggle="tooltip" title="Export PDF" onclick="exportData('pdf')">
                    <i class="fas fa-file-pdf" ></i>
                </button>
                <button type="button" class="btn btn-sm btn-warning"  data-toggle="tooltip" title="Export Excel" onclick="exportData('excel')">
                    <i class="fas fa-file-excel" style="color:white;"></i>
                </button>
                <button type="button" class="btn btn-sm btn-info text-white" data-toggle="tooltip" title="Export CSV" onclick="exportData('csv')">
                    <i class="fas fa-file-csv"></i>
                </button>

            </div>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
