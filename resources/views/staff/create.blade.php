<x-app-layout>


    <style>
        body {
            overflow-x: hidden;
        }

        h1 {
            text-align: center;
        }

        form {
            /* padding: 0 10% 10% 10% */
        }
    </style>

    <div class="container">
        <h1 class="p-5">Staff Form</h1>
        <form class="row g-3" action="{{ route('staff.store') }}">
            <div class="col-4">
                <label for="title" class="form-label"> Title</label>
                <select id="title" name="title" class="form-select">
                    <option selected>Mr.</option>
                    <option>Miss.</option>
                    <option>Mrs.</option>
                </select>
            </div>
            <div class="col-4">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="col-4">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-12">
                <label for="adress" class="form-label">Address</label>
                <input type="text" class="form-control" id="adress" placeholder="1234 Main St" name="adress">
            </div>
            <div class="col-6">
                <label for="phoneno" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="phoneno" name="phoneno">
            </div>
            <div class="col-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="col-12">
                <h3>Qualification</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <label for="degree">Degree</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" size="20" name="degree" id="degree">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <label for="institude">Institute</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" size="20" name="institude" id="institude">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <label for="year">Year</label>&nbsp;&nbsp;&nbsp;
                        <input type="number" name="year" id="year">&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div>
            <div class="col-4">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option>Doctor</option>
                    <option>Surgeon</option>
                    <option>Specialist</option>
                    <option>Nurse</option>
                    <option>Assistant Surgeon</option>
                    <option>Assistant Specialist</option>
                    <option>Ward Boy</option>
                    <option>security Boy</option>
                    <option>housekeeping</option>
                    <option>IT Manager</option>
                    <option>Health Information Manager</option>
                    <option>Cybersecurity Specialist</option>
                    <option>Accounts Receivable Clerk</option>
                    <option>Billing Specialist</option>
                    <option>Research Scientist</option>
                    <option>Laboratory Assistant</option>
                    <option>Laboratory Manager</option>
                </select>
            </div>
            <div class="col-4">
                <label for="deppartment" class="form-label">Department</label>
                <select id="deppartment" name="deppartment" class="form-select">
                    <option value="">Select a Department</option>
                </select>
            </div>
            <div class="col-4">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary pm-5" style="width: 15%;">Save</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/get-deppartment-breakdown',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data); // Debugging: Log the response data to the console

                    var departmentSelect = $('#deppartment');
                    data.forEach(function(department) {
                        departmentSelect.append('<option value="' + department.Departmentname +
                            '">' + department.Departmentname + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any error that occurs during the AJAX request
                }
            });
        });
    </script>
</x-app-layout>
