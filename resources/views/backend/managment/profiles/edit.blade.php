@extends('backend.layout.app')
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-10">
                <h1 class="app-page-title"> <span> <i class="fas fa-id-badge"></i> </span> Edit Profile</h1>
            </div>
        </div>
        @if(session()->has('success'))
        @include('backend.includes.success')
        @endif
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="col-12 col-md-8">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        <div class="app-card-body">
                            @include('backend.managment.profiles.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection