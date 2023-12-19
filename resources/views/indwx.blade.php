<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<table class="table mt-4" id="formDataTable">
    <thead>
        <tr>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Qualification</th>
            <th>Status</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody id="formDataBody">
    <tr>
            @foreach($staffList as $i)
           <a href="{{url('edit/'.$i->id)}}">edit</a>
           <a href="{{url('deletestaff/'.$i->id)}}">delete</a>
           <a href="{{url('/staff/detail/'.$i->id)}}">detail</a>
           <p>{{$i->name}}</p>
           @endforeach
        </tr>
    </tbody>
</table>

</body>
</html>