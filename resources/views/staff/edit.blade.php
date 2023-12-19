<x-app-layout> 

    <style>
    body{
      overflow-x: hidden;
    }
    h1 {
      text-align: center;
    }

    form {
      padding: 0 10% 10% 10%
    }
  </style>
</head>
<body>
  <div class="container">
<h1 class="p-5">Staff Form</h1>
<form class="row g-3" action="{{route('updatestaff')}}">
<input type="number" class="form-control" id="id" name="id" value="{{$staffdata->id}}" hidden >
    <div class="col-4">
    <label for="title" class="form-label">  Title</label>
    <select id="title" name="title"  class="form-select">
        <option value="Mr." @if($staffdata && $staffdata->title == 'Mr.') selected @endif>Mr.</option>
        <option value="Miss." @if($staffdata && $staffdata->title == 'Miss.') selected @endif>Miss.</option>
        <option value="Mrs." @if($staffdata && $staffdata->title == 'Mrs.') selected @endif>Mrs.</option>
    </select>
  </div>
    <div class="col-4">
    <label for="firstname" class="form-label">FirstName</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="{{$staffdata->firstname}}">
  </div>
  <div class="col-4">
    <label for="lastname" class="form-label">LastName</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="{{$staffdata->lastname}}">
  </div>
  <div class="col-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$staffdata->email}}">
  </div>
  <div class="col-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{$staffdata->password}}">
  </div>
  <div class="col-12">
    <label for="adress" class="form-label">Address</label>
    <input type="text" class="form-control" id="adress" placeholder="1234 Main St" name="adress" value="{{$staffdata->adress}}">
  </div>
  <div class="col-6">
    <label for="phoneno" class="form-label">Phone No</label>
    <input type="number" class="form-control" id="phoneno" name="phoneno" value="{{$staffdata->phoneno}}">
  </div>
  <div class="col-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" value="{{$staffdata->city}}">
  </div>
  <div class="col-12">
    <h3>Qualification</h3>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 p-2">
          <label for="degree">Degree</label>&nbsp;&nbsp;&nbsp;
          <input type="text" size="20" name="degree" id="degree" value="{{ $staffdata->degree}}">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-2">
          <label for="institude">Institute</label>&nbsp;&nbsp;&nbsp;
          <input type="text" size="20" name="institude" id="institude" value="{{$staffdata->institude }}">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-2">
          <label for="year">Year</label>&nbsp;&nbsp;&nbsp;
          <input type="number"  name="year" id="year" value="{{  $staffdata->year }}">&nbsp;&nbsp;&nbsp;
        </div>
      </div>
    </div>
    <div class="col-4">
    <label for="status" class="form-label">Status</label>
    <select id="status" name="status" class="form-select">
      <option value="Doctor" @if($staffdata && $staffdata->status == 'Doctor') selected @endif>Doctor</option>
      <option value="Surgeon" @if($staffdata && $staffdata->status == 'Sergeon') selected @endif>Surgeon</option>
      <option value="Specilist" @if($staffdata && $staffdata->status == 'Specilist') selected @endif>Specialist</option>
      <option value="Nurse" @if($staffdata && $staffdata->status == 'Nurse') selected @endif>Nurse</option>
      <option value="Assistant Surgeon" @if($staffdata && $staffdata->status == 'Assistant Surgeon') selected @endif>Assistant Surgeon</option>
      <option value="Assistant Specialist" @if($staffdata && $staffdata->status == 'Assistant Specialist') selected @endif>Assistant Specialist</option>
      <option value="Ward Boy" @if($staffdata && $staffdata->status == 'Ward Boy') selected @endif>Ward Boy</option>
      <option value="Security Boy" @if($staffdata && $staffdata->status == 'Security Boy') selected @endif>security Boy</option>
      <option value="housekeeping" @if($staffdata && $staffdata->status == 'housekeeping') selected @endif>housekeeping</option>
      <option value="IT Manager" @if($staffdata && $staffdata->status == 'IT Manager') selected @endif>IT Manager</option>
      <option value="Health Information Manager" @if($staffdata && $staffdata->status == 'Health Information Manager') selected @endif>Health Information Manager</option>
      <option value="Cybersecurity Specialist" @if($staffdata && $staffdata->status == 'Cybaersecurity') selected @endif>Cybersecurity Specialist</option>
      <option value="Accounts Receivable Clerk" @if($staffdata && $staffdata->status == 'Accounts Receivable Clerk') selected @endif>Accounts Receivable Clerk</option>
      <option value="Billing Specialist" @if($staffdata && $staffdata->status == 'Billing Speacialist') selected @endif>Billing Specialist</option>
      <option value="Research Scientist" @if($staffdata && $staffdata->status == 'Research Scientist') selected @endif>Research Scientist</option>
      <option value="Laboratory Assistant" @if($staffdata && $staffdata->status == 'Laboratory Assistant') selected @endif>Laboratory Assistant</option>
      <option value="Laboratory Manager" @if($staffdata && $staffdata->status == 'Laboratory Manager') selected @endif>Laboratory Manager</option>
    </select>
  </div>
  <div class="col-4">
      <label for="deppartment" class="form-label">Department</label>
      <select id="deppartment" name="deppartment" class="form-select">
        <option value="$staffdata->deppartment">Select a Department</option>
      </select>
    </div>
  <div class="col-4">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" class="form-control" id="salary" name="salary" value="{{$staffdata->salary}}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary pm-5" style="width: 15%;">Save</button>
  </div>
</form>
  </div>
<script>

$(document).ready(function () {
  $.ajax({
    url: '/get-deppartment-breakdown',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      console.log(data); // Debugging: Log the response data to the console

      var departmentSelect = $('#deppartment');
      data.forEach(function (department) {
        departmentSelect.append('<option value="' + department.Departmentname + '">' + department.Departmentname + '</option>');
      });
    },
    error: function (xhr, status, error) {
      console.error(error); // Log any error that occurs during the AJAX request
    }
  });
});

</script>
</x-app-layout> 
