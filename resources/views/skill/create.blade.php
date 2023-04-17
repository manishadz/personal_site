@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Skill</h2>
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
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Skill
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

                <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <br>
                    <div class="container py-12">
                        <h1 class="mt-2">Create a skill <a href="{{ route('skill.index') }}"
                                class="btn btn-secondary float-end">Back</a></a></h1>
                        <br>
                        <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="">Tittle</label><br>
                                    <input type="text" class="form-control" name="title" placeholder="">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                </div>
                            </div><br>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                    @error('description')
<p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <input type="number" class="form-control" name="level" placeholder="">
                                    @error('level')
                                    <p class="text-danger">{{ $message }}</p>
                                                                        @enderror

                                </div>
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
                                <button type="submit" class="btn btn-primary">Add</button>


                            </div>

                        </form>
                    </div>


                    {{-- <button type="submit " class="btn btn-success">Save</button> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
