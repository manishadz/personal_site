@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Update project</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/">Dashboard </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('project.index') }}">project </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        edit
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <br>
                    <div class="container py-12">
                        <h1 class="mt-2"><a href="{{ route('project.index') }}"
                        class="btn btn-secondary float-end">Back</a></a></h1>
                        <br>
                        <div class="row">
                            {{-- <div class="col">
                                <label for="">Tittle</label><br>
                                <input type="text" class="form-control" name="title" value="{{ $project->title }}"
                                    placeholder="">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> --}}
                            <div class="row">
                                <div class="col">
                                    <label for="">Product Title</label><br>
                                    <input type="text" class="form-control"  name="title" placeholder="" value="{{ $project->title }}">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                </div>
                                <div class="col">
                                    <label for="">Product link</label><br>
                                    <input type="text" class="form-control"  name="link" placeholder=""value="{{ $project->link }}">
                                </div>
                            </div><br>
                            <br>
                            <div class="mb-3">
                                <label for="">thumbnail</label>
                                <input type="file"  name="image"
                                    class="course form-control">
                                    <br>
                                    <img src="{{ asset('uploads/project/'.$project->image) }}" alt="" height="200px" width="200">
                            </div>
                            <div class="d-flex gap-2">
                                <div class="form-check radio-style mb-20">
                                    <input name="is_active" class="form-check-input" type="radio" value="1"
                                        id="active">
                                    <label class="form-check-label" for="active">
                                        Active</label>
                                </div>
                                <div class="form-check radio-style mb-20">
                                    <input name="is_active" class="form-check-input" type="radio" value="0"
                                        id="inactive" checked>
                                    <label class="form-check-label" for="inactive">
                                        In Active</label>
                                </div>
                            </div>
                            <div class="mb-3 col d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update</button>


                            </div>

                </form>
            </div>


            {{-- <button type="submit " class="btn btn-success">Save</button> --}}
            </form>
        </div>
    </div>
    </div>
@endsection
