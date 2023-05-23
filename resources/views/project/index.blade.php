@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Portfolio</h2>
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
                                        Portfolio
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
        <div class="container">
            <h1>My Project <a href="{{ route('project.create') }}" class="btn btn-primary float-end ">Add </a></h1>
            <br>
            <hr>
            @include('common.flash-message')


            <table class="table striped-table">
                <thead>
                    <tr>
                        <th>
                            <h6>sn</h6>
                        </th>
                        <th>
                            <h6>Title</h6>
                        </th>
                        <th>
                            <h6>image</h6>
                        </th>
                        <th>
                            <h6>link</h6>
                        </th>
                        <th>
                            <h6>status</h6>
                        </th>
                        <th>
                            <h6>Actions</h6>
                        </th>
                    </tr>
                    <!-- end table row-->
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $project->title }}</td>
                            <th><img src="{{ asset('uploads/project/' . $project->image) }}" height="60px;" width="60px;" alt="Image"></th>
                            <td>{{ $project->link }}</td>
                            <td>
                                @if ($project->is_active)
                                    <span class="status-btn active-btn">Active</span>
                                @else
                                    <span class="status-btn close-btn">In Active</span>
                                @endif
                            </td>
                            <td class="d-flex gap-3 action">
                                <a href="{{ route('project.edit', $project->id) }}" class="text-success">
                                    <i class="lni lni-pencil-alt"></i>
                                </a>
                                <form action="{{ route('project.destroy', $project->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-danger"><i class="lni lni-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>NO DATA</tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
