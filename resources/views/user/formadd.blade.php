<x-user-layout>
<div class="container mt-5">
    <div class="row">
                    <!-- Left Column - Menu -->
            <div class="col-md-4">
                <div class="list-group">
                <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="{{route('user.formadd')}}" class="list-group-item list-group-item-action">Add Form</a>
                    <!-- Add more menu items here -->
                </div>
            </div>
    <div class="col-md-8">
        <h2>Form Add</h2>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Form Name</label>
                <input type="text" class="form-control" id="name" wire:model="name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" id="email" wire:model="email" name="email">
            </div>
            <div class="form-group">
                <label for="save_data">Save Data</label>
                
                <input type="checkbox" wire:model="save_data" name="save_data" value="1">
            </div>
            <div class="form-group">
                <label for="display_name">Display Name</label>
                <input type="text" class="form-control" id="display_name" wire:model="display_name" name="display_name">
            </div>
            <button type="submit" class="btn btn-primary" wire:click="save">Save</button>
        </form>

    </div>
</div>
    
</div>
</x-user-layout>