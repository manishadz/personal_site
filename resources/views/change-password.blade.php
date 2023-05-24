@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Change Password</h2>
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
                                        Change Password
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
                <div class="container">
                    {{-- <h1>Change Password</h1> --}}
                    <br>
                    <hr>

                    @include('common.flash-message')
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('update-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-style-3">
                            <label for="" class="default mb-2">Current Password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="currentPassword"
                            name="current_password" placeholder="Enter current password">

                        @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                            <!-- end envelope -->
                            <div class="input-style-3">
                                <label for="" class="default mb-2">New Password <span
                                    class="text-danger">*</span></label>
                            <input type="password" class="form-control light" name="password"
                                placeholder="New Password" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- end input -->
                            <div class="input-style-3">
                                <label for="" class="default mb-2">Confirm Password <span
                                    class="text-danger">*</span></label>
                            <input type="password" class="form-control light" name="password_confirmation"
                                placeholder="Confirm Password" />
                              </div>
                          </div>
                          <button class="main-btn primary-btn btn-hover">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
