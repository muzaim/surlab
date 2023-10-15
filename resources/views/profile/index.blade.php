@extends('layout.master')

@section('konten')
    <div class="min-h-100">
        <div class="container rounded-100 bg-white mt-5">
            <form class="user" method="post" action="{{ url('/profile/edit') }}">
                @csrf
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90">
                            <input type="file" class="form-control mt-3" name="image">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i
                                        class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                    <h6>Back to home</h6>
                                </div>
                                <h6 class="text-right">Edit Profile</h6>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="email">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ $dataProfile->name }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="{{ $dataProfile->email }}">
                                </div>
                            </div>

                            <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save
                                    Profile</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
