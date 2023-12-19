<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Checkout</title>
    <style>
        .thanks-main-container{
            background-image: url("{{asset('/hospital-building.jpg')}}");
            background-size: cover;
            height: 100vh;
            background-repeat: no-repeat;
            opacity: 0.8;
        }
    </style>

</head>
<body>

    <div class="d-flex justify-content-center align-items-center flex-column thanks-main-container">
        <main class="px-5 pt-5 bg-white h-auto w-auto border rounded-5">
        <h1 class="text-success">Thanks for Requesting Appointment!</h1>
        <p>Your scheduled appointment details will be sent to you via email within a period of 1 to 2 days.</p>
        
    
        <p><b>Your Name:</b> {{$paymentData->name}}</p>
        <p><b>Requesting Email:</b> {{$paymentData->email}}</p>

        <center>
        <a class="btn btn-success mt-4" href="{{asset('/appoint')}}"><i class="fa-solid fa-arrow-left"></i>Back to Home</a>
        </center>
        <p class="text-center mt-4">&copy; Copyright to Medical Haven</p>
    </main>
    </div>
  
</body>
</html>