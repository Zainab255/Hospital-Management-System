
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __( 'Admin Dashboard') }}
        </h2>
    </x-slot>

    <h5 class="modal-title fs-3 text-info">Edit User</h5>
    <form action="{{route('update')}}">
        <div class="mb-3">
            <input type="number" name="id" value="{{$users->id}}" hidden>
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{$users->name}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" name="email" value="{{$users->email}}" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </form>

</x-app-layout>
