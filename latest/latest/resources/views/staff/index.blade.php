<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <a href="{{ route('staff.create') }}" class="btn btn-outline-primary ">Add Staff Member</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Qualification</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffList as $staff)
                    <tr>
                        <td>{{ $staff->title }}</td>
                        <td>{{ $staff->firstname }}</td>
                        <td>{{ $staff->lastname }}</td>
                        <td>{{ $staff->password }}</td>
                        <td>{{ $staff->adress }}</td>
                        <td>{{ $staff->phoneno }}</td>
                        <td>{{ $staff->city }}</td>
                        <td>{{ $staff->status }}</td>
                        <td>{{ $staff->deppartment }}</td>
                        <td>{{ $staff->salary }}</td>
                        <td>{{ $staff->degree }} {{ $staff->institude }} {{ $staff->year }} </td>
                        <td>{{ $staff->email }} </td>
                        <td>
                            <a href="{{ url('staffedit/' . $staff->id) }}">edit</a>
                            <a href="{{ url('deletestaff/' . $staff->id) }}">delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
