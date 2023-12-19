<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <title>Checkout</title>

</head>
<body>
    <!-- payment section -->
    <div class=" d-flex justify-content-center align-items-center flex-column">
            <div class="row">
                <div class="col-6 gy-5 ">
                    <h3 class="fs-3">One Last Step, Pay Appointment fee</h3>
                    <p>Thanks for requesting an appointment </p>
                    <p>Pay Fixed Appointment fee of $25 to proceed</p>
                </div>
                <div class="col-6 gy-5">
                    <form action="{{route('session')}}" method="get">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <label for="name">Name</label><br>
                    <input type="text" name="name" placeholder="Enter Your Name"><br><br>

                    <label for="name">Email</label><br>
                    <input type="text" name="email" placeholder="abc@gmail.com"><br><br>

                    <label for="amount" class="text-danger">Total Amount</label><br>
                    <input class="p-3" type="number" value="25" readonly  name="total_amount"> Dollars<br>
                    <input type="submit" class="btn btn-primary mt-5" value="Checkout">
                    </form>
                </div>
            </div>
    </div>
  
</body>
</html>