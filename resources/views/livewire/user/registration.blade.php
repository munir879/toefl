<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="form-group">
                            <input wire:model="name" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama">
                        </div>
                        @error('name') <span class="error alert-danger">{{ $message }}</span> @enderror
                        <div class="form-group">
                            <input wire:model="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        @error('email') <span class="error alert-danger">{{ $message }}</span> @enderror
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input wire:model="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>

                            <div class="col-sm-6">
                                <input wire:model="repassword" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>

                        </div>
                        @error('password') <span class="error alert-danger">{{ $message }}</span> @enderror
                        @error('repassword') <span class="error alert-danger">{{ $message }}</span> @enderror
                        <button wire:click="Registration" href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{route('user.login')}}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
