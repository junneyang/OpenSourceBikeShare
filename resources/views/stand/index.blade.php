
@extends('layouts.app')

@section('html_header_title')
    Stands
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">All stands table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-condensed table-striped table-hover" id="stands-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>uuid</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Bikes count</th>
                            <th>place name</th>
                            <th>Is service</th>
                            <th>lat</th>
                            <th>lng</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stands as $stand)
                            <tr class="item{{ $stand->id }}">
                                <td>{{ $stand->id }}</td>
                                <td>{{ $stand->uuid }}</td>
                                <td>{{ $stand->name }}</td>
                                <td>{{ $stand->description }}</td>
                                <td>{{ $stand->bikes->count() }}</td>
                                <td>{{ $stand->place_name }}</td>
                                <td>{{ $stand->service_tag ? 'Yes' : 'No' }}</td>
                                <td>{{ $stand->latitude }}</td>
                                <td>{{ $stand->logitude }}</td>
                                <td>
                                    <a href="" class="edit-modal btn btn-info btn-sm btn-flat">
                                        <span class="fa fa-edit"></span> Edit
                                    </a>
                                    <a href="" class="delete-modal btn btn-danger btn-sm btn-flat">
                                        <span class="fa fa-trash"></span> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- ./box-body -->

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#stands-table').DataTable({
            pageLength: 50
        });
    });
</script>
@endpush


