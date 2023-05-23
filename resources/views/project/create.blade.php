{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>

        <div class="container py-12">
            <h1 class="mt-2">Create a Product <a href="{{ route('project.index') }}" class="btn btn-secondary float-end">Back</a></a></h1>
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="row">
                    <div class="col">
                        <label for="">Product Name</label><br>
                        <input type="text" class="form-control"  name="name" placeholder="">
                    </div>
                    <div class="col">
                        <label for="">Category</label><br>
                        <select class="form-control" name="category">
                            <option>Art</option>
                            <option>car</option>
                            <option>phone</option>
                        </select>
                    </div>
                </div><br>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Mini-Price</label><br>
                        <input type="number" class="form-control" name="min_price" placeholder="">
                    </div>
                    <div class="col">
                        <label for="">Max-price</label><br>
                        <input type="number" class="form-control" name="max_price" placeholder="">
                    </div>
                    <div class="col">
                        <label for="">End-time</label>
                        <input name="end_time" class="form-control" type="datetime-local" />
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="">Upload Image</label>
                    <input type="file" name="image" value="" required
                        class="course form-control">
                </div>
                <div class="mb-3 col d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Add</button>


                </div>

            </form>
        </div>

    </x-slot>
</x-app-layout>

 --}}

 @extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Banner</h2>
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
                                        Banner
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

                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <br>
                    <div class="container py-12">
                        <h1 class="mt-2">Create a Product <a href="{{ route('project.index') }}" class="btn btn-secondary float-end">Back</a></a></h1>
                        <br>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col">
                                    <label for="">Product Title</label><br>
                                    <input type="text" class="form-control"  name="title" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Product link</label><br>
                                    <input type="text" class="form-control"  name="link" placeholder="">
                                </div>
                            </div><br>
                            <br>
                            <div class="mb-3">
                                <label for="">Thumbnail</label>
                                <input type="file" name="image" value="" required
                                    class="course form-control">
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
                </form>
            </div>
        </div>
    </div>

@endsection
