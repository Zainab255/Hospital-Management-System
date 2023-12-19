 @extends('layouts._layout')

@section('content')


<style>
    /* Top banner (MEET THE DOCTOR) */
    .bg-heading {
        background-image: linear-gradient(rgba(32, 60, 83, 0.7), rgba(40, 89, 129, 0.7)), url('image/backkimge.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    /* Additional custom styles for content */
    .bg-heading h1 {
        font-size: 55px;
        margin: 0;
    }


    .sidebar {
        /* Set height and styling for the sidebar */
        background-color: white;
        padding: 10px;
        color: #ff4701;

    }

    .bar {
        color: black;
    }


    .content {
        /* Set styling for the content area */
        padding: 10px;
    }

    /* ---------------- looking--------------------*/
    .bi-heading {
        background-image: linear-gradient(hsl(187, 100%, 40%, 0.1), hsl(187, 100%, 40%, 0.6)), url('./images/istockphoto-1413600764-612x612.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .bi-heading h1 {
        font-size: 40px;
    }

    .bi-heading p {
        font-size: 20px;
    }

    /* Button Link Styles */
    .button-link {
        display: inline-block;
        background-color: #ff4701;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        height: 45px;
        font-weight: bold;
    }

    /* Button Link hover effect */
    .button-link:hover {
        background-color: #00B4CC;
    }

    /* -------------Card styles------------- */
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        margin: 1px;
        padding: 0px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    .card-img-top {
        max-width: 100%;
        height: auto;
    }

    .card-title {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .card-body {
        padding: 10px;
    }

    .card-body a {
        color: #ff4701;
        text-decoration: none;
        font-weight: bold;
    }


    /* Responsive styles for smaller screens */
    @media (max-width: 768px) {
        .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }


    /* Responsive adjustments */
    @media (max-width: 576px) {
        .col-4 {
            text-align: center;
        }

        .col-8.pt-5 {
            text-align: center;
            padding-top: 1.5rem;
        }
    }
</style>

<div class="bg-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Meet Our Doctors</h1>
            </div>
        </div>
    </div>
</div>


<!-------------------side bar-------------->
<div class="bar mt-5">

    <div class="container">

        <div class="row">

            <div class="col-sm-4">
                <h1>Filter By</h1>
                <ul class="nav flex-column">
                    <!-- Sidebar navigation items -->
                    @foreach($departments as $dep)
                 
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('showDepartments' , $dep->id)}}">{{$dep->DepartmentName}}</a>
                    </li>
                    @endforeach
                </ul>

            </div>

            <!----------------cards------------------->
            <div class="col-lg-8">
                <div class="container">
                    <div class="row">
                        @foreach($doctor as $doc)
                        <div class="col-lg-6">


                            <div class="card my-2" style="width: 18rem;">
                                <a href="{'doctor/' . $doc->id}}"><img class="card-img-top"
                                        src="{{ asset('images/'.$doc->image) }}" alt="Card image cap"></a>

                                <div class="card-body">
                                    <h5 class="card-title">{{$doc->speciality}}</h5>
                                    <a href="{{'doctor/' . $doc->id}}">{{$doc->DoctorName}}</a>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>

            </div>


    <div class="container-fluid">


        <div class="bi-heading">
            
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Looking for Pediatric Care?</h1>
                        <p>The Pediatric Center at Doctors Hospital & Medical Center is among best in the
                            country</p>

                        <a href="{{route('lab-attendend')}}" class="button-link">Find doctor</a>


                    </div>
                </div>
        </div>


    </div>


 @endsection