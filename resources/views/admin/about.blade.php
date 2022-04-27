@extends('admin.layout.master')

@section('main-body')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->


    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">About me Section</h4>
                        <p class="sub-header">
                            You can contrlole <code> Personal Info </code> & <code> Services </code>
                        </p>
                        @foreach ($about as $item)
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/about/{{ $item->id }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" class="form-control" value="{{ $item->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" id="phone" class="form-control"
                                                value="{{ $item->phone }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" id="email" class="form-control"
                                                value="{{ $item->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" id="nationality" class="form-control"
                                                value="{{ $item->nationality }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="languages" class="form-label">Lannguages</label>
                                            <input type="text" id="languages" class="form-control"
                                                value="{{ $item->languages }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea type="text" id="address" class="form-control" value="">{{ $item->addrss }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="brief" class="form-label">Sumery</label>
                                            <textarea type="text" id="brief" class="form-control" value="">{{ $item->brief }}</textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">Update</button>
                                    </form>
                                </div> <!-- end col -->
                            </div>
                        @endforeach
                        <!-- end row-->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
    </div>

    <!-- container-fluid -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
