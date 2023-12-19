<x-app-layout> 

    <style>
        .section {
            display: none;
            margin: 20px 0;
        }

        .section.active {
            display: block;
        }

        .is-invalid {
            border-color: red;
        }
    </style>



<div class="container">
    <form id="myForm" method="get" action="{{route('appoint.store')}}">
        @csrf
        <div class="section active" id="section1">
            <div class="row">
                <div class="col-lg-6 col-sm-12 gy-5 ">
                    <h3>What's your legal name?</h3>
                    <p>Enter your name as it appears on your legal ID.</p>
                </div>
                <div class="col-lg-6  col-sm-12 gy-5">
                    <label for="firstname">First Name</label><br>
                    <input type="text" id="firstname" name="firstname"><br>
                    <label for="lastname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname"><br>
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
                    <label for="dateofbirth">Date Of Birth</label><br>
                    <input type="date" required id="dateofbirth" name="dateofbirth"><br>
                    <label for="gender" class="form-label"> Gender</label><br>
                    <select id="gender" name="gender" class="form-select"><br>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
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
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="phonenumber">Phone No</label><br>
                    <input type="number" id="phonenumber" name="phonenumber"><br>
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
                    <label for="streetaddress">Street Address</label><br>
                    <input type="text" id="streetaddress" name="streetaddress"><br>
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city"><br>
                    <label for="state">State</label><br>
                    <input type="text" id="state" name="state"><br>
                    <label for="zipcode">ZipCode</label><br>
                    <input type="number" id="zipcode" name="zipcode"><br>
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
                    <textarea type="text" id="concern" name="concern" rows="10" cols="30"></textarea><br>
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
                    <label for="department" class="form-label">Department</label>
                    <select id="department" name="department" class="form-select">
                        {{-- @foreach($deppartmentBreakdown as $dep)
                        <option value="{{$dep->id}}">{{$dep->DepartmentName}}</option>
                        @endforeach --}}
                    </select>
                    <label for="doctor">Find Doctor</label><br>
                    <select id="doctor" name="doctor" class="form-select"><br>
                        <option value="">Select Doctor</option>
                    </select>

                </div>
            </div>
            <input type="button" style="margin-left: 43%" onclick="showNextSection(7)" id="next" value="Next">
        </div>

        <div class="section" id="section7">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Your Submitted Information</h3>
                </div> 

                    <p>Review the information before submitting.</p>
                    <p>
                        <strong>Name:</strong> <span id="submittedName"></span> 
                    <!-- <button type="button" onclick="editField('name')">Edit</button> -->
                </p>
                    <p>
                        <strong>Date of Birth:</strong> <span id="submittedDateOfBirth"></span> 
                        <!-- <button type="button" onclick="editField('dateofbirth')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Gender:</strong> <span id="submittedGender"></span> 
                        <!-- <button type="button" onclick="editField('gender')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Email:</strong> <span id="submittedEmail"></span> 
                        <!-- <button type="button" onclick="editField('email')">Edit</button> -->
                    </p> 
                    <p>
                        <strong>Phone No:</strong> <span id="submittedPhonenumber"></span> 
                        <!-- <button type="button" onclick="editField('phonenumber')">Edit</button> -->
                    </p>
                    <p>
                        <strong>City:</strong> <span id="submittedCity"></span> 
                        <!-- <button type="button" onclick="editField('city')">Edit</button> -->
                    </p>
                    <p>
                        <strong>State:</strong> <span id="submittedState"></span> 
                        <!-- <button type="button" onclick="editField('state')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Street Address:</strong> <span id="submittedStreetAddress"></span>
                         <!-- <button type="button" onclick="editField('streetaddress')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Zip Code:</strong> <span id="submittedZipCode"></span>
                         <!-- <button type="button" onclick="editField('zipcode')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Concern:</strong> <span id="submittedConcern"></span> 
                        <!-- <button type="button" onclick="editField('concern')">Edit</button> -->
                    </p>
                    <p>
                        <strong>Department:</strong>
                        <span id="submittedDepartment"></span> 
                        <!-- <button type="button" onclick="editField('department')">Edit</button> -->
                    </p>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit">
            </div>
        </div>

    </form>
</div>

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

</x-app-layout> 
