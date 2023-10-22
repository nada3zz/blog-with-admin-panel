@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Text Editors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Text Editors</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Titles</h3>
                    </div>
                    @include('includes.errorMsg')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('tag.update', $tag->id)}}" method="POST" >
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="row"> <!-- Add this row to clearly wrap your columns -->
                            <div class="card-body col-lg-6">
                                <div class="form-group">
                                    <label for="tagTitle">Tag title</label>
                                    <input type="text" class="form-control" id="tagTitle" name="name" placeholder="Tag Title" value="{{ $tag->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Tag Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $tag->slug }}">
                                </div>
                            </div>
                            <!-- /.col-->
                        </div> <!-- Close your row -->

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>

</div>

@endsection
