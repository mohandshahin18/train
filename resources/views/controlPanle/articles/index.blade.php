@extends('controlPanle.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        table {
            width: 100% !important;
        }
    </style>
@stop
@section('title', __('admin.Articles'))
@section('subTitle', __('admin.All Articles'))
@section('article-menu-open','menu-open')
@section('article-active','active')
@section('article-index-active','active')
@section('content')
    <table class="table  table-striped  table-hover " id="table">
        <thead class="bg-dark">
            <tr>
                <th>#</th>
                <th>{{ __('admin.Title is in Arabic') }}</th>
                <th>{{ __('admin.Title is in English') }}</th>
                <th>{{ __('admin.Description is in Arabic') }}</th>
                <th>{{ __('admin.Description is in English') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($articles as $article)
                @php
                    $description = json_decode($article->description, true);
                    $title = json_decode($article->title, true);
                @endphp
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $title['ar'] ?? 'No Data' }}</td>
                    <td>{{ $title['en'] ?? 'No Data' }}</td>
                    <td>{{ $description['ar'] ?? 'No Data' }}</td>
                    <td>{{ $description['en'] ?? 'No Data' }}</td>




                </tr>
            @endforeach
        </tbody>

    </table>
@stop

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        // $(function() {
        //       $('#table').DataTable({
        //       processing: true,
        //       serverSide: true,
        //         // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        //     //   pagingType: 'full_numbers',
        //       ajax: '{{ route('articels.getDataTableData') }}',
        //       columns: [
        //                 { data: 'id', name: 'id' },
        //                 { data: 'name', name: 'name' },
        //                 { data: 'description[en]', name: 'description' },
        //             ]
        //     });
        // });
    </script>


@stop
