<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-3 text-uppercase">Register Form</h3>
                <div class="card p-3 my-3 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Name</label>
                            <input require name="name" type="text" value="{{old('name')}}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Username</label>
                            <input require name="username" value="{{old('username')}}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                            @error('username')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input require name="email" value="{{old('email')}}" type="email" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input require name="password" type="password" class="form-control"
                                id="exampleInputPassword1" placeholder="Password">
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <!-- show all errors in one place -->
                        <!-- <div class="text-danger mt-2">
                            <ul>

                                @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                                @endforeach

                            </ul>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>