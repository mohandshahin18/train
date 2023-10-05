@extends('controlPanle.master')
@section('title',  __('admin.Add new project') )
@section('subTitle', __('admin.Add new project') )
@section('project-menu-open','menu-open')
@section('project-active','active')
@section('project-create-active','active')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            {{-- <h3 class="card-title">{{ __('admin.Add new project') }}</h3> --}}
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Title') }}</label>
                            <input type="text" name="title[ar]"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Deadline') }}</label>
                            <input type="date" name="deadline"
                                class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}">
                            @error('deadline')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="mb-2">{{ __('admin.Assigned User') }}</label>
                            <select name="user_id"  class="form-control @error('user_id') is-invalid @enderror" >
                                <option value=" ">{{ __('admin.Select User') }}</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Description') }}</label>
                            <textarea name="description[ar]" id="" class="form-control @error('description') is-invalid @enderror"
                                cols="30" rows="10">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>




                </div>


            </div>

            <!-- /.card-body -->

            <div class="card-footer" style="text-align: end">
                <button type="submit" class="btn btn-primary ">{{ __('admin.Add') }}</button>
            </div>
        </form>
    </div>

@stop
