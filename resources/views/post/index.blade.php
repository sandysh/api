@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered" id="posts-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
            </table>    </div>
</div>
@endsection

@push('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    $('#posts-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.posts') !!}',
        columns: [
            // { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'body', name: 'body' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
