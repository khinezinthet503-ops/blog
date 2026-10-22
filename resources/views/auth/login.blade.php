<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-3 mt-5 text-uppercase">login Form</h3>
                <div class="card p-3 my-3 shadow-sm mt-5">
                    <form method="POST">
                        @csrf

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


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>