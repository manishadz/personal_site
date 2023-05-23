@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Setting</h2>
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
                                        setting
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
                    <h1>My setting</h1>
                    <br>
                    <hr>

                    @include('common.flash-message')

                    <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" placeholder=" Facebook url" aria-label="facebook url"
                                    aria-describedby="basic-addon2" name="facebook" value={{ $settings["facebook"] ?? ""}}>
                                <span class="input-group-text" id="basic-addon2">facebook</span>
                            </div>
                            <!-- end input -->
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" placeholder=" Instagram url"
                                    aria-label="instagram url" aria-describedby="basic-addon2" name="instagram"  value={{$settings["instagram"] ?? ""}}>
                                <span class="input-group-text" id="basic-addon2">instagram</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" placeholder=" Twitter url" aria-label="twitter url"
                                    aria-describedby="basic-addon2" name="twitter"value={{ $settings["twitter"] ?? "" }}>
                                <span class="input-group-text" id="basic-addon2">twitter</span>
                            </div>
                            <!-- end input -->
                            <!-- end input -->
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" placeholder=" medium url" aria-label="med url"
                                    aria-describedby="basic-addon2" name="medium"value={{ $settings["medium"] ?? ""}}>
                                <span class="input-group-text" id="basic-addon2">medium</span>
                            </div>
                            <!-- end input -->

                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="+977....." aria-label="url"
                                    aria-describedby="basic-addon2" name="contact"value={{ $settings["contact"] ?? ""}}>
                                <span class="input-group-text" id="basic-addon2">contact</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="location" class="form-control" placeholder="location" aria-label="url"
                                    aria-describedby="basic-addon2" name="location"value={{ $settings["location"] ?? ""}}>
                                <span class="input-group-text" id="basic-addon2">location</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="email" aria-label="url"
                                    aria-describedby="basic-addon2" name="email"value={{ $settings["email"] ?? "" }}>
                                <span class="input-group-text" id="basic-addon2">email</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" placeholder="hackerone" aria-label="url"
                                    aria-describedby="basic-addon2" name="hackerone"value={{ $settings["hackerone"] ?? "" }}>
                                <span class="input-group-text" id="basic-addon2">Hackerone</span>
                            </div>
                            <div class="mb-3 col d-flex justify-content-between">
                                <button type="save" class="btn btn-primary">Save</button>


                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
