{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        D
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
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon purple">
              <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">Total Project</h6>
              <h3 class="text-bold mb-10">{{ $projects }}</h3>
              <p class="text-sm text-success">

              </p>
            </div>
          </div>
          <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon success">
              <i class="lni lni-dollar"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">Total Skill</h6>
              <h3 class="text-bold mb-10">{{ $skills }}</h3>
              <p class="text-sm text-success">

              </p>
            </div>
          </div>
          <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon primary">
              <i class="lni lni-credit-cards"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">Total Messages</h6>
              <h3 class="text-bold mb-10">{{ $contacts }}</h3>
              <p class="text-sm text-danger">

              </p>
            </div>
          </div>
          <!-- End Icon Cart -->
        </div>
        <!-- End Col -->

        <!-- End Col -->
      </div>
@endsection
