@extends('layouts._layout')

@section('content')

<a href="{{route('finddoctor')}}" class="text-decoration-none text-dark fs-5  m-5"><i class="fa-solid fa-arrow-left"></i> Back</a>

<div class="container info">
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col-lg-4">
            <img src="{{ asset('/images/'.$doctor->image) }}" alt="" class="border rounded-circle my-2" height="250px">
        </div>
        <div class="col-lg-8 pt-5 mt-5">
            <div class="text-danger fs-5" style="letter-spacing: 2px;">{{$doctor->speciality}}</div>
            <div class="h1 font-weight-bold">{{$doctor->DoctorName}}</div>

        </div>
    </div><br><br><br>
    <!--//////////////////////contact info///////////////////////-->
    <section>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col-lg-4 pt-5">
                <div class="text-danger h4 ps-2">Contact Info</div>


                <div class="h6 ps-5">{{$doctor->contact}}</div>
                <div class="h6 ps-5">{{$doctor->email}}</div>
            </div>
            <div class="col-lg-8 pt-5 ">
                <div class="text-danger h2" style="letter-spacing: 2px;">

                    Education</div>
                <div style="font-size: 17px;" class="pt-3">
                @foreach($education as $edu)
                    <ul>
                        <li>{{$edu->degTitle}} from {{$edu->university}}</li>
                    </ul>
                @endforeach
                </div>
            </div>
        </div>
        <!---///////////////////////////specailist/////////////////////-->
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col-lg-4">
                <div class="text-danger h4 ps-4">Speciality</div>
                <div>
                    <span class="h6 ps-5 ">{{$doctor->speciality}}</span>
                </div>
                <div class="text-danger h4 ps-4 pt-5 ">PMDC</div>
                <div>
                    <span class="h6 ps-5">{{$doctor->pmdc}}-P</span>
                </div>
                <hr>
                <div class="text-danger h4 font-weight-bold">Doctor Schedule</div>
                @foreach($schedules as $sch)
                <div>{{$sch->date}}  <span class="text-danger font-weight-bold ms-5 ps-4"> {{$sch->time}}</span></div>
                @endforeach

            </div>
            <div class="col-lg-8 pt-5 ">
                
                <div class="text-danger h2" style="letter-spacing: 2px;">Service</div>
                <div style="font-size: 17px;" class="pt-3">
                @foreach($experience as $exp)
                    <ul>
                        <li>{{$exp->jobTitle}}, {{$exp->company}}, {{$exp->Location}}</li>

                    </ul>
                    @endforeach
                </div>

                <div class="text-danger h2">Clinical Interest</div>
                <div>
                    <ul>
                        @foreach($clinicalinterests as $c)
                        <li>{{$c->clinicalInterest}} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection