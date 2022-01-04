<x-LoginRegister>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login Form</h2>
                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" method="post" action="{{route('storeLogin')}}">
                        @csrf
                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        {{-- Email --}}
                        <label for="">Enter Your Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" id="Username"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>

                        {{-- Password --}}
                        <label for="">Enter Your Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="password">
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                            Registered? <a href="{{route('register')}}" class="text-dark fw-bold"> Create an
                                Account</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-LoginRegister>