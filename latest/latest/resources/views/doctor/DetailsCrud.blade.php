@extends('layouts._layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __( 'Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="container info">
    <a href="{{route('doctorcrud')}}" class="text-decoration-none text-dark fs-5 mt-2"><i class="fa-solid fa-arrow-left"></i> Back</a>

        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col-lg-3">
                <img src="{{asset('images/'. $doctor->image)}}" alt="" height="">
            </div>
            <div class="col-lg-9 pt-5 mt-5">
                <div class="text-danger fs-5" style="letter-spacing: 2px;">{{$doctor->speciality}}</div>
                <div class="h1 font-weight-bold">{{$doctor->DoctorName}}</div>
            </div>
        </div>

        <div class="container my-5">
        <div class="row ">

            <div class="col-lg-4 col-sm-12">
                <h3> Schedules</h3>
                @foreach($schedules as $s)
                <ul>
                    <li>{{$s->date}} at {{$s->time}}</li>

                </ul>
                @endforeach

                <div>
                    <h3>Clinical Interests</h3>
                    @foreach($clinicalinterests as $cs)
                    <ul>
                        <li>{{$cs->clinicalInterest}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-8 col-sm-8 border-start border-2">
                <!-- Education -->
                <h3>Education</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Degree Title</th>
                            <th scope="col">Degree Name</th>
                            <th scope="col">University</th>
                            <th scope="col">City</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($education as $edu)
                        <tr>
                            <td>{{$edu->degTitle}}</td>
                            <td>{{$edu->degName}}</td>
                            <td>{{$edu->university}}</td>
                            <td>{{$edu->city}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>

                <!-- Experience -->
                <div class="mt-5">
                    <h3>Experience</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Job Title</th>
                                <th scope="col">Company</th>
                                <th scope="col">Industry</th>
                                <th scope="col">Location</th>
                                <th scope="col">Years</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($experience as $exp)
                            <tr>
                                <td>{{$exp->jobTitle}}</td>
                                <td>{{$exp->company}}</td>
                                <td>{{$exp->Industry}}</td>
                                <td>{{$exp->Location}}</td>
                                <td>{{$exp->years}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <h3></h3>
    </div>
</x-app-layout>
@endsection