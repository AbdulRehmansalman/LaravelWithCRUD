<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customers Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-6 mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href={{url('/')}}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url('/customer')}}>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url('/customer/view')}}>Customer</a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- For Dynamically show the Customer regitration or upadation form --}}
    <form action="/customer" method="POST">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                Customer Registration
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                    <span class="text-danger">
                        @error('name')
                        {{message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                    <span class="text-danger">
                        @error('email')
                        {{message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Pasword</label>
                    <input type="pasword" name="password" class="form-control">
                    <span class=" text-danger">
                        @error('password')
                        {{message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password</label>
                    <input type="text" name="cpassword" class="form-control">
                    <span class="text-danger">
                        @error('cpassword')
                        {{message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 required">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control">
                    <span class="text-danger">
                        @error('address')
                        {{message}}
                        @enderror
                    </span>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Country</label>
                        <input type="text" name="country" class="form-control">
                        <span class="text-danger">
                            @error('country')
                            {{message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">State</label>
                        <input type="text" name="state" class="form-control">
                        <span class="text-danger">
                            @error('state')
                            {{message}}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="row" style="display:flex;">
                    <label for="">Gender:</label>
                    <div class="form-group col-md-6 ">
                        <input value="m" type="radio">
                        {{-- {{$customer->gender =='m' ?"checked":''}} --}}
                        <label>Male</label>

                        <div class="form-group">
                            <input value="f" type="radio">
                            {{-- {{$customer->gender =='f' ?"checked":''}} --}}
                            <label>Female</label>
                            <span class="text-danger">
                                @error('')
                                {{message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Date of Birth</label>
                        <input type="date" name="dob">
                    </div>


                </div>
                <button class=" mt-3 btn btn-danger">Submit</button>
            </div>
        </div>



    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
