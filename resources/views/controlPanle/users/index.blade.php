@extends('controlPanle.master')
@section('user-menu-open', 'menu-open')
@section('user-active', 'active')
@section('user-index-active', 'active')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        table {
            width: 100% !important;
        }

        .sorting {
            text-align: start !important
        }
    </style>
@stop
@section('title', __('admin.Articles'))
@section('subTitle', __('admin.All Articles'))
@section('index-active', 'active')

@section('content')
    <table class="table  table-striped  table-hover " id="table">
        <thead class="bg-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified</th>
                <th>Actions</th>
            </tr>

        </thead>



    </table>
@stop

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(function() {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                // pagingType: 'full_numbers',
                ajax: '{{ route('users.getDataTableData') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },

                    {
                        data: 'email_verified_at',
                        name: 'email_verified_at',
                        render: function(data, type, row) {
                            if (data === null) {
                                return "Email not verified yet";
                            } else {
                                var formattedDate = new Date(data).toLocaleString('en-US', {
                                    year: 'numeric',
                                    month: '2-digit',
                                    day: '2-digit',
                                    hour: '2-digit',
                                    minute: '2-digit',
                                    second: '2-digit'
                                });
                                return formattedDate;
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            console.log(data);
                            var deleteRoute = "{{ route('users.destroy', '') }}/" + data.id;

                            return `<form action="${deleteRoute}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm delete-btn" data-id="${data.id}">Delete</button>
                            </form>`;
                        }
                    },
                ],
                language: {
                    emptyTable: "No data available in the table",
                },
                rowCallback: function(row, data) {
                    $(row).attr('id', 'row_' + data.id);
                }
            });
        });
    </script>


@stop
