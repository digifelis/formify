<x-user-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



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
            
            <!-- Right Column - Table -->
            <div class="col-md-8">
                <h2>Message List</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Message Id</th>
                            <th>Message Data</th>

                        </tr>
                    </thead>
                    <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td>{{$message->id}}</td>
                                <td>{{$message->message_data}}</td>
                            </tr>
                            @endforeach
                        <!-- Add more table rows here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-user-layout>
