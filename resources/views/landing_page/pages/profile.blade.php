@extends('landing_page.layouts.master')
@section('content')

      <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Profile</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        <!-- profile Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 justify-content-center align-items-center">
                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                                <div class="mb-3">
                                    <label>Name</label>
                                    <h1>{{$user->name}}</h1>
                                </div>
                
                                <div class="mb-3">
                                    <label>Email</label>
                                    <h3>{{$user->email}}</h3>
                                </div>
                
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <h3>{{$user->phone? $user->phone:'--'}}</h3>
                                </div>
                
                                <a href='edit-profile'><button class="btn btn-primary">Change Info & pfp</button></a>
                                <a href='edit-password'><button class="btn btn-primary">Edit Password</button></a>
                        </div>
                    </div>
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
    <div class="position-relative overflow-hidden">
        <img src="{{ $user->image? $user->image : 'https://avatar.iran.liara.run/public/boy?username=Ash' }}" class="rounded mx-auto d-block w-100 h-auto" alt="Profile Picture">
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



@stop