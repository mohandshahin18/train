@extends('controlPanle.master')
@section('title', 'Add new article')
@section('subTitle', 'Add new article')
@section('create-active', 'active')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add new article</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('articels.store') }}" method="POST">
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
                            <label>{{ __('admin.Title is in Arabic') }} <span style="color: red">*</span></label>
                            <input type="text" name="title[ar]"
                                class="form-control @error('title.ar') is-invalid @enderror" value="{{ old('title.ar') }}">
                            @error('title.ar')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Title is in English') }} -- ({{ __('admin.Optional') }})</label>
                            <input type="text" name="title[en]" class="form-control" value="{{ old('title.en') }}">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Description is in Arabic') }} <span style="color: red">*</span></label>
                            <textarea name="description[ar]" id="" class="form-control @error('description.ar') is-invalid @enderror"
                                cols="30" rows="10">{{ old('description.ar') }}</textarea>
                            @error('description.ar')
                                <small class="invalid-feedback"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('admin.Description is in English') }} -- ({{ __('admin.Optional') }})</label>
                            <textarea name="description[en]" id="" class="form-control" cols="30" rows="10">{{ old('description.en') }}</textarea>
                        </div>
                    </div>


                </div>


            </div>

            <!-- /.card-body -->

            <div class="card-footer ">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>

@stop
