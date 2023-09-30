@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Titre views</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                        class="rounded-circle mt-5" width="150px"
                                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                                        class="font-weight-bold">{{ Auth::user()->name }}</span><span
                                        class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Information Personnelle</h4>
                                    </div>
                                    <form method="POST" action="">
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="first name"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                                    class="form-control" value="" placeholder="surname"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Adresse Email</label><input
                                                    type="text" class="form-control" placeholder="Email"
                                                    value="{{ Auth::user()->email }}"></div>
                                            <div class="col-md-12"><label class="labels">Mobile Number</label><input
                                                    type="text" class="form-control" placeholder="enter phone number"
                                                    value=""></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                        <div class="mt-8 text-center">
                            <button class="btn btn-primary profile-button " type="button">Save Profile</button>
                        </div>

                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
