<x-user-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<style>
    code {
        font-family: "Courier New", monospace;
        color: #333;
    }
</style>


    <div class="container mt-5">
        <div class="row">
            <!-- Left Column - Menu -->
            <div class="col-md-4">
                <div class="list-group">
                    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="{{route('user.formadd')}}" class="list-group-item list-group-item-action">Add Form</a>
                    
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <!-- Add more menu items here -->
                </div>
            </div>
            
            <!-- Right Column - Table -->
            <div class="col-md-8">
                <h2>Form List</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Form Id</th>
                            <th>Form Name</th>
                            <th>Email</th>
                            <th>Form Save Data</th>
                            <th>Show Code </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forms as $form)
                        <tr>
                            <td>{{$form->id}}</td>
                            <td>{{$form->name}}</td>
                            <td>{{$form->email}}</td>
                            <td>



                        
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$form->id}}">
                                <>
                                </button>

                                <!-- Modal -->
                                <div   class="modal fade" id="exampleModal{{$form->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width:200%;">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-8" id="exampleModalLabel">simple Code</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <code class="language-html">
                                           
                                            &lt;script src='{{url('assets/js/script.min.js')}}'&gt;&lt;/script&gt;
                                            &lt;script&gt;
                                            const fields = ['name','message'];
                                            const formURL = '{{url('api/message/submission')}}/{{$form->idhash}}';
                                            const heading = '{{$form->display_name}}';
                                            formifyInit(fields, formURL, heading);
                                            &lt;/script&gt;

                                        </code>



                                    </div>

                                        <hr>
                                       <center> or </center>
                                        <hr>
                                    <div class="modal-body">

                                        <code class="language-html">
                                           
                                        add this code in your html file where form action
                                        <br><br>
                                        {{url('api/message/submission')}}/{{$form->idhash}}

                                        </code>



                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div> 
                            </td>
                            <td>{{ $form->save_data == 1 ? "YES" : "NO" }}</td>
                            <td>
                                <a href="{{route('user.message', $form->id)}}" class="btn btn-primary">Message List</a>
                                <a href="{{route('user.editform', $form->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('user.deleteform', $form->id)}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                        <!-- Add more table rows here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</x-user-layout>
