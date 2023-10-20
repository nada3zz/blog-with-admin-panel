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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="row"> <!-- Add this row to clearly wrap your columns -->
                                <div class="card-body col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="subTitle">Post SubTitle</label>
                                        <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="Sub Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="tag">Post Tag</label>
                                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag">
                                    </div>
                                </div>

                                <div class="card-body col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="status">
                                        <label class="form-check-label" for="status" name="status">Publish</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Summernote
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote" name="body" class ="textarea" placeholder="Place some text here">

                                            </textarea>
                                        </div>
                                        <div class="card-footer">

                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div> <!-- Close your row -->

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </section>

    </div>
@endsection
