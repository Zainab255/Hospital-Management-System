<x-app-layout> 

<a href="{{route('appoint.create')}}" class="btn btn-outline-primary">Create Appointment</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DateOfBrith</th>
            <th>Gender</th>
            <th>email</th>
            <th>zipcode</th>
            <th>Phone Number</th>
            <th>Street Address</th>
            <th>State</th>
            <th>City</th>
            <th>Concern</th>
            <th>deppartment</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($appointList as $appoint)
    <tr>
        <td>{{$appoint->firstname}}</td>
        <td>{{$appoint->lastname}}</td>
       <td>{{$appoint->dateofbirth}}</td>
       <td>{{$appoint->gender}}</td>
       <td>{{$appoint->email}}</td>
       <td>{{$appoint->zipcode}}</td>
       <td>{{$appoint->phonenumber}}</td>
       <td>{{$appoint->streetaddress}}</td>
       <td>{{$appoint->state}}</td>
       <td>{{$appoint->city}}</td>
       <td>{{$appoint->concern}}</td>
       <td>{{$appoint->department}}</td>
       <td>
       <a href="{{url('appointedit/'.$appoint->id)}}">edit</a>
       <a href="{{url('deleteappoint/'.$appoint->id)}}">delete</a>
       </td>
        
    </tr>
    @endforeach
    </tbody>
</table>


</x-app-layout> 
