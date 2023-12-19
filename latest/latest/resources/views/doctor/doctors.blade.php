<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <h1 class="fs-1 text-primary">Doctors</h1>

    <button id="adduser" type="button" class="btn btn-outline-primary my-1 " data-bs-toggle="modal"
        data-bs-target="#userModal">Add Doctor</button>

    <!-- Add user Modal -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-3 text-info">Add Doctor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('storedoctor') }}" action="get" enctype="multipart/form-data">
                        @csrf
                        <label class="form-group" for="image">Profile Photo:</label>
                        <input class="form-control" type="file" name="image">

                        <label class="form-group" for="DoctorName">Full Name</label>
                        <input class="form-control" type="text" name="DoctorName">

                        <div class="row">
                            <div class="col-6">
                                <label class="form-group" for="email">Email ID</label>
                                <input class="form-control" type="email" name="email" placeholder="abc@gmail.com">
                            </div>
                            <div class="col-6">

                                <label class="form-group" for="contact">Contact</label>
                                <input class="form-control" type="tel" name="contact">
                            </div>

                            <div class="col-6">

                                <label class="form-group" for="age">Age</label>
                                <input class="form-control" type="number" name="age">
                            </div>

                            <div class="col-6">
                                <label class="form-group" for="address">Address</label>
                                <input class="form-control" type="text" name="address">
                            </div>

                            <div class="col-6">
                                <label class="form-group" for="city">City</label>
                                <input class="form-control" type="text" name="city">
                            </div>

                            <div class="col-6">
                                <label class="form-group" for="speciality">Speciality</label>
                                <input class="form-control" type="text" name="speciality">
                            </div>

                            <div class="col-6">
                                <label class="form-group" for="pmdc">pmdc</label>
                                <input class="form-control" type="text" placeholder="1234-A" name="pmdc">
                            </div>

                            <!-- departments -->
                            <div class="col-4 ">
                                <label for="deppartments_id">Department</label>
                                <select name="deppartments_id" id="deppartments_id">
                                    @foreach ($departments as $dep)
                                        <option  name="deppartments_id"  value="{{$dep->id}}">
                                            {{ $dep->DepartmentName }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <h5 class="text-info fs-5 mt-2">Education:</h5>
                        <span type="button" class="btn btn-outline-primary btn-sm float-end  "
                            id="addEducation">Add</span>

                        <!-- Education -->
                        <div id="educations" class="mt-5">
                            <button hidden type="button"
                                class="btn btn-outline-danger border  rounded-cricle float-right"
                                id="cancelEducation"><i class=" fa-solid fa-xmark"></i></button>

                            <div class="education row">
                                <div class="col-6">
                                    <label class="form-group" for="educations[0][degtitle]">Degree Title:</label>
                                    <input class="form-control" type="text" name="educations[0][degTitle]"
                                        placeholder="MBBS/BS/MS">
                                </div>
                                <div class="col-6">
                                    <label class="form-group" for="educations[0][degName]">Degree Name:</label>
                                    <input class="form-control" type="text" name="educations[0][degName]">
                                </div>
                                <div class="col-6">
                                    <label class="form-group" for="educations[0][university]">University:</label>
                                    <input class="form-control" type="text" name="educations[0][university]">
                                </div>
                                <div class="col-6">
                                    <label class="form-group" for="educations[0][city]">City:</label>
                                    <input class="form-control" type="text" name="educations[0][city]">
                                </div>
                            </div>
                        </div>

                        <!-- Schedules -->
                        <h5 class="text-info fs-5 mt-2">Schedules:</h5>
                        <button type="button" class="btn btn-outline-primary btn-sm  float-end  "
                            id="addSchedule">Add</button>

                        <div id="schedules" class="mt-5">
                            <button hidden type="button"
                                class="btn btn-outline-danger border my-2 rounded-cricle float-right"
                                id="cancelSchedule"><i class=" fa-solid fa-xmark"></i></button>

                            <div class="schedule row">
                                <div class="col-6">
                                    <label class="form-group" for="schedules[0][date]">Date:</label>
                                    <input class="form-control" type="date" name="schedules[0][date]">
                                </div>
                                <div class="col-6">
                                    <label class="form-group" for="schedules[0][time]">Time:</label>
                                    <input class="form-control" type="time" name="schedules[0][time]">
                                </div>
                            </div>
                        </div>

                        <!-- Experience -->
                        <h5 class="text-info fs-5 mt-2">Experience:</h5>
                        <button type="button" class="btn btn-outline-primary btn-sm float-end   "
                            id="addExperience">Add</button>

                        <div id="experiences" class="mt-5">
                            <button hidden type="button"
                                class="btn btn-outline-danger border rounded-cricle float-right"
                                id="cancelExperience"><i class=" fa-solid fa-xmark"></i></button>

                            <div class="experience row">

                                <div class="col-6">
                                    <label class="form-group" for="experiences[0][jobTitle]">Job Title:</label>
                                    <input class="form-control" type="text" name="experiences[0][jobTitle]">
                                </div>

                                <div class="col-6">
                                    <label class="form-group" for="experiences[0][company]">Company:</label>
                                    <input class="form-control" type="text" name="experiences[0][company]">
                                </div>

                                <div class="col-6">
                                    <label class="form-group" for="experiences[0][Industry]">Industry:</label>
                                    <input class="form-control" type="text" name="experiences[0][Industry]">
                                </div>

                                <div class="col-6">
                                    <label class="form-group" for="experiences[0][Location]">Location:</label>
                                    <input class="form-control" type="text" name="experiences[0][Location]"
                                        placeholder="Ex. Lahore, Punjab">
                                </div>
                                {{-- <div class="col-6">
                                    <label class="form-group" for="experiences[0][years]">Years:</label>
                                    <input class="form-control" type="number" name="experiences[0][years]" >
                                </div> --}}


                            </div>
                        </div>

                        <!-- Clinical Interests -->
                        <h5 class="text-info fs-5 mt-2">Clinical Interest:</h5>
                        <button type="button" class="btn btn-outline-primary  float-end btn-sm  "
                            id="addInterest">Add</button>

                        <div id="interests" class="mt-5">
                            <button hidden type="button"
                                class="btn btn-outline-danger border rounded-cricle float-right"
                                id="cancelInterest"><i class=" fa-solid fa-xmark"></i></button>

                            <div class="interest">
                                <label class="form-group" for="interests[0][clinicalInterest]">Clinical
                                    Interest</label>
                                <input class="form-control" type="text" name="interests[0][clinicalInterest]">
                            </div>
                        </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- Doctor Table -->
    <h1>Doctors</h1>
    <table class="table">

        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Age</th>
                <th scope="col">Department</th>
                <th scope="col">Speciality</th>
                <th scope="col">PMDC</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($doctor as $d)
                <tr>
                    <th scope="row">{{ $d->id }}</th>
                    <td>{{ $d->DoctorName }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->contact }}</td>
                    <td>{{ $d->age }}</td>
                    <td>{{ $d->deppartments_id }}</td>
                    <td>{{ $d->speciality }}</td>
                    <td>{{ $d->pmdc }}</td>
                    <td>{{ $d->address }}</td>
                    <td>{{ $d->city }}</td>

                    <td> <a href="{{ 'DetailsCrud/' . $d->id }}"><i class="fa-solid fa-circle-info"></i></a></td>
                    <td>
                        <a href="{{ 'edit/' . $d->id }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="{{ 'DeleteDoctor/' . $d->id }}"><i class="fa-solid fa-trash text-danger"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        //Add Schedule
        document.getElementById('addSchedule').addEventListener('click', function() {
            const schedulesDiv = document.getElementById('schedules');
            const scheduleDiv = document.createElement('div');
            scheduleDiv.className = 'schedule';

            scheduleDiv.innerHTML = `
            <button type="button" class="btn btn-outline-danger btn-sm float-end border mt-2 rounded-cricle float-right" id="cancelSchedule"><i class=" fa-solid fa-xmark"></i></button>

                <div class= "row my-2 bg-light p-2">
                    <div class= "col-6">
                <label class="form-group">Date:</label>
                <input class="form-control" type="date" name="schedules[${schedulesDiv.childElementCount}][date]" >
                </div>

                <div class= "col-6">
                <label class="form-group">Time:</label>
                <input class="form-control" type="time" name="schedules[${schedulesDiv.childElementCount}][time]" >
                </div>
                </div>
            `;

            schedulesDiv.appendChild(scheduleDiv);

            //Remove a schedule
            const removeButtons = document.querySelectorAll('#cancelSchedule');
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.remove();
                });

            });
        });



        //ADD EDUCATION
        document.getElementById('addEducation').addEventListener('click', function() {
            const educationsDiv = document.getElementById('educations');
            const educationDiv = document.createElement('div');
            educationDiv.className = 'education';

            educationDiv.innerHTML = `
            <button type="button" class="  btn btn-outline-danger btn-sm float-end border mt-2 rounded-cricle " id="cancelEducation"><i class=" fa-solid fa-xmark"></i></button>

                <div class= "row my-2 bg-light p-2">
                    <div class= "col-6">
                <label class="form-group">Degree Title:</label>
                <input class="form-control" type="text" name="educations[${educationsDiv.childElementCount}][degreeTitle]" placeholder="MBBS/BS/MS" >
                </div>

                <div class= "col-6">
                <label class="form-group">Degree Name:</label>
                <input class="form-control" type="text" name="educations[${educationsDiv.childElementCount}][degreeName]" >
                </div>
                <div class="col-6">
                <label class="form-group">University:</label>
                <input class="form-control" type="text" name="educations[${educationsDiv.childElementCount}][university]" >
                </div>

                 <div class="col-6">
                <label class="form-group">City:</label>
                <input class="form-control" type="text" name="educations[${educationsDiv.childElementCount}][city]" >
                </div>

                </div>
            `;

            educationsDiv.appendChild(educationDiv);

            //Remove a schedule
            const removeEducation = document.querySelectorAll('#cancelEducation');
            removeEducation.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.remove();
                });

            });
        });

        //Add Experience
        document.getElementById('addExperience').addEventListener('click', function() {
            const experiencesDiv = document.getElementById('experiences');
            const experienceDiv = document.createElement('div');
            experienceDiv.className = 'experience';

            experienceDiv.innerHTML = `
            <button type="button" class="btn btn-outline-danger btn-sm float-end border mt-2 rounded-cricle float-right" id="cancelExperience"><i class=" fa-solid fa-xmark"></i></button>
                <h6 class="text-info mt-2">Another Experience</h6>
                <div class= "row my-2 bg-light p-2">
                    <div class= "col-6">
                         <label class="form-group">Job Title:</label>
                         <input class="form-control" type="text" name="experiences[${experiencesDiv.childElementCount}][date]" >
                    </div>

                    <div class= "col-6">
                        <label class="form-group">Company:</label>
                        <input class="form-control" type="text" name="experiences[${experiencesDiv.childElementCount}][time]" >
                    </div>

                    <div class="col-6">
                        <label class="form-group" for="experiences[0][Industry]">Industry:</label>
                        <input class="form-control" type="text" name="experiences[${experiencesDiv.childElementCount}][Industry]" >
                    </div>

                    <div class="col-6">
                        <label class="form-group" for="experiences[0][Location]">Location:</label>
                        <input class="form-control" type="text" name="experiences[${experiencesDiv.childElementCount}][Location]" placeholder="Ex. Lahore, Punjab" >
                    </div>

                    <div class="col-6">
                        <label class="form-group" for="experiences[0][start-date]">Start Date:</label>
                        <input class="form-control" type="date" name="experiences[${experiencesDiv.childElementCount}][start-date]" >
                    </div>

                    <div class="col-6">
                        <label class="form-group" for="experiences[0][end-date]">End Date:</label>
                        <input class="form-control" type="date" name="experiences[${experiencesDiv.childElementCount}][end-date]" >
                    </div>
                    <div class="col-6">
                        <label class="form-group" for="experiences[${experiencesDiv.childElementCount}][years]">Years:</label>
                        <input class="form-control" type="number" name="experiences[${experiencesDiv.childElementCount}][years]" >
                     </div>
                 </div>
            `;

            experiencesDiv.appendChild(experienceDiv);

            //Remove a schedule
            const removeExperience = document.querySelectorAll('#cancelExperience');
            removeExperience.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.remove();
                });

            });
        });

        //Add Clinical interests
        document.getElementById('addInterest').addEventListener('click', function() {
            const interestsDiv = document.getElementById('interests');
            const interestDiv = document.createElement('div');
            interestDiv.className = 'interest';

            interestDiv.innerHTML = `
            <button type="button" class="btn btn-outline-danger btn-sm float-end border mt-2 rounded-cricle float-right" id="cancelInterest"><i class=" fa-solid fa-xmark"></i></button>
                
            <label class="form-group" for="interests[0][clinicalInterest]">Clinical Interest</label>
            <input class="form-control" type="text" name="interests[${interestsDiv.childElementCount}][clinicalInterest]" >   
                        
            `;

            interestsDiv.appendChild(interestDiv);

            //Remove a Interest
            const removeInterest = document.querySelectorAll('#cancelInterest');
            removeInterest.forEach(button => {
                button.addEventListener('click', function() {
                    this.parentElement.remove();
                });

            });
        });
    </script>

    <script src="js_bootstrap.bundle.min.js"></script>




</x-app-layout>
