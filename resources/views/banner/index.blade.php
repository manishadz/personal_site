{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banner') }}
        </h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <br>
                        <div class="form-outline mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="image">Choose Image</label>
                                <input type="file" name="image" class="form-control" id="image" />
                                <br>
                                <img src="{{ asset('uploads/banner/'.@$banner->image) }}" alt="" height="200px" width="200">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button type="submit " class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout> --}}



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

                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <br>
                    <div class="form-outline mb-4">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="image">Choose Image</label>
                            <input type="file" name="image" class="form-control" id="image" />
                            <br>
                            <img src="{{ asset('uploads/banner/'.@$banner->image) }}" alt="" height="200px" width="200">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit " class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection
