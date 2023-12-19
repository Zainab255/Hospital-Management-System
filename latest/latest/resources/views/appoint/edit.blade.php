<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Multi-Section Form</title>
    <style>
        .section {
            display: none;
            margin: 20px 0;
        }

        .section.active {
            display: block;
        }
    </style>
</head>

<body>
    <form id="myForm" action="{{route('appointupdate')}}" style="height: 40%; width: 50%; margin: 10% 5% 10% 25%; padding:5%;">
    <input type="number" class="form-control" id="id" name="id" value="{{$appointdata->id}}" >
        <div>
            <div class="section active" id="section">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>What's your legal name?</h3>
                        <p>Enter your name as it appears on your legal ID.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="{{$appointdata->firstname}}" >
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" value="{{$appointdata->lastname}}" >
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(2)" id="next" value="Next">
            </div>
            <div class="section" id="section2">
            <input type="button" style="margin-left: 43%" onclick="showPreviousSection(1)" id="next" value="Back">
                <div class="row">
                    <div class="col-6  gy-5">
                        <h2>What's your date of birth and legal sex?</h2>
                        <p>These should match your legal ID.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="dateofbirth">Date Of Birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth"  value="{{$appointdata->dateofbirth}}" >
                        <label for="gender" class="form-label"> Gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option value="Male" @if($appointdata && $appointdata->gender == 'Male') selected @endif>Male</option>
                            <option value="Female" @if($appointdata && $appointdata->gender == 'Female') selected @endif>Female</option>
                            <option value="Other" @if($appointdata && $appointdata->gender == 'Other') selected @endif>Other</option>
                        </select>
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(3)" id="next" value="Next">
            </div>
            <div class="section" id="section3">
            <input type="button" style="margin-left: 43%" onclick="showPreviousSection(2)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>How can we contact you?</h3>
                        <p>This is how we'll follow up on your request.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"  value="{{$appointdata->email}}" >
                        <label for="phonenumber">Phone No</label>
                        <input type="number" id="phonenumber" name="phonenumber" value="{{$appointdata->phonenumber}}" >
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(4)" id="next" value="Next">
            </div>
            <div class="section" id="section4">
            <input type="button" style="margin-left: 43%" onclick="showPreviousSection(3)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Finally, your home address.</h3>
                        <p>This is how we'll follow up on your request.</p>
                    </div>
                    <div class="col-6  gy-5">
                        <label for="streetaddress">Street Address</label>
                        <input type="text" id="streetaddress" name="streetaddress" value="{{$appointdata->streetaddress}}" >
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" value="{{$appointdata->city}}" >
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" value="{{$appointdata->state}}" >
                        <label for="zipcode">ZipCode</label>
                        <input type="number" id="zipcode" name="zipcode" value="{{$appointdata->zipcode}}" >
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(5)" id="next" value="Next">
            </div>
            <div class="section" id="section5">
            <input type="button" style="margin-left: 43%" onclick="showPreviousSection(4)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Please tell us about your primary medical concern.</h3>
                        <p>If this is a medical emergency, call 911 </p>
                        <p>If this is a mental health emergency, call or text 988 to talk to a counselor.
                            If you are located outside of the United States, please visit findahelpline.com</p>
                    </div>
                    <div class="col-6  gy-5">
                        <input type="text" id="concern" name="concern" rows="9" cols="30"  value="{{$appointdata->concern}}" >
                    </div>
                </div>
                <input type="button" style="margin-left: 43%" onclick="showNextSection(6)" id="next" value="Next">
            </div>
            <div class="section" id="section6">
            <input type="button" style="margin-left: 43%" onclick="showPreviousSection(5)" id="next" value="Back">
                <div class="row">
                    <div class="col-6 gy-5 ">
                        <h3>Do you have health insurance?</h3>
                    </div>
                    <div class="col-6  gy-5">
                    <label for="deppartment" class="form-label">Department</label>
                    <select id="deppartment" name="deppartment" class="form-select">
                    <option value="{{$appointdata->deppartment}}">Select a Department</option>
                    </select>
                    <label for="finddoctor">Find Doctor</label><br>
                    <select id="doctor" name="doctor" class="form-select"><br>
                        <option value="{{$appointdata->doctor}}">Select Doctor</option>
                    </select>
                    </div>
                </div>
                
            </div>
        </div>
    </form>

    <!-- Repeat the above pattern for additional sections -->

    <script>
        //fetch deppartment breakdown from staff
        $(document).ready(function () {
            $.ajax({
                url: '/get-deppartment-breakdown-staff',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data); // Debugging: Log the response data to the console

                    var departmentSelect = $('#department');
                    data.forEach(function (department) {
                        departmentSelect.append('<option value="' + department.deppartment + '">' + department.deppartment + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error); // Log any error that occurs during the AJAX request
                }
            });
        });
         //fetch doctor breakdown from doctordata
         $(document).ready(function () {
            $.ajax({
                url: '/get-doctor-breakdown',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data); // Debugging: Log the response data to the console

                    var doctorSelect = $('#doctor');
                    data.forEach(function (doctor) {
                        doctorSelect.append('<option value="' + doctor.DoctorName + '">' + doctor.DoctorName+ '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error); // Log any error that occurs during the AJAX request
                }
            });
        });
        // get name into payment form
        var firstname = document.getElementById('firstname').value;
        var paymentName = document.getElementById('name').value;
        paymentName = firstname;

        function showNextSection(nextSectionNumber) {
            // Validate the current section before proceeding
            const currentSection = document.querySelector('.section.active');
            const inputFields = currentSection.querySelectorAll('input, select, textarea');
            let isSectionValid = true;

            inputFields.forEach(input => {
                if (!input.value.trim()) {
                    isSectionValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isSectionValid) {
                return;
            }

            // Hide the current active section
            currentSection.classList.remove('active');

            // Show the next section
            const nextSection = document.getElementById('section' + nextSectionNumber);
            nextSection.classList.add('active');

            if (nextSectionNumber === 7) {
                displaySubmittedData(); // Display submitted data in section 7
            }
        }
        function showPreviousSection(previousSectionNumber) {
            // Hide the current active section
            const currentSection = document.querySelector('.section.active');
            currentSection.classList.remove('active');

            // Show the previous section
            const previousSection = document.getElementById('section' + previousSectionNumber);
            previousSection.classList.add('active');
        }
        
        //edit form data
        function editField(fieldName) {
           
            const submittedField = document.getElementById('submitted' + fieldName);
            const fieldValue = submittedField.textContent;

            submittedField.innerHTML = `<input type="text" id="edit${fieldName}" value="${fieldValue}"> <button type="button" onclick="saveEdit('${fieldName}')">Save Changes</button>`;
            return false;
        }

        function saveEdit(fieldName) {
            const editedValue = document.getElementById('edit' + fieldName).value;
            const submittedField = document.getElementById('submitted' + fieldName);
            submittedField.textContent = editedValue;
            return false;
        }
        //show data before submition

        function displaySubmittedData() {
            const submittedName = document.getElementById('firstname').value + ' ' + document.getElementById('lastname').value;
            const submittedDateOfBirth = document.getElementById('dateofbirth').value;
            
            const submittedDepartment = document.getElementById('department').value;
           
            const submittedConcern = document.getElementById('concern').value;
            
            const submittedZipCode = document.getElementById('zipcode').value;
            const submittedStreetAdress = document.getElementById('streetaddress').value;
            const submittedState = document.getElementById('state').value;
            const submittedCity = document.getElementById('city').value;
            const submittedPhonenumber = document.getElementById('phonenumber').value;
            const submittedEmail = document.getElementById('email').value;
            const submittedGender = document.getElementById('gender').value;
            

            // Display the gathered data in section 7
            document.getElementById('submittedName').textContent = submittedName;
            document.getElementById('submittedDateOfBirth').textContent = submittedDateOfBirth;
            document.getElementById('submittedGender').textContent = submittedGender;
            document.getElementById('submittedEmail').textContent = submittedEmail;
            document.getElementById('submittedPhonenumber').textContent = submittedPhonenumber;
            document.getElementById('submittedCity').textContent = submittedCity;
            document.getElementById('submittedState').textContent = submittedState;
            document.getElementById('submittedStreetAdddress').textContent = submittedStreetAdddress;
            document.getElementById('submittedZipCode').textContent = submittedZipCode;
            document.getElementById('submittedConcern').textContent = submittedConcern;
            document.getElementById('submittedDepartment').textContent = submittedDepartment;
            // ... (update other fields) ...
        }
    </script>

</body>

</html>