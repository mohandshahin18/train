@extends('controlPanle.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        table {
            width: 100% !important;
        }
    </style>
@stop
@section('title', __('admin.Projects'))
@section('subTitle', __('admin.All Projects'))
@section('project-menu-open','menu-open')
@section('project-active','active')
@section('project-index-active','active')
@section('content')
    <table class="table  table-striped  table-hover " id="table">
        <thead class="bg-dark">
            <tr>
                <th>#</th>
                <th>{{ __('admin.Title') }}</th>
                <th>{{ __('admin.Description') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $project->$title }}</td>
                    <td>{{ $project->$description }}</td>
                    <td>{{ $project->$status }} </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@stop


