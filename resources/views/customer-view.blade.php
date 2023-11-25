<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a class="nav-link" href={{url('/')}}>Home <span class="sr-only">(current)</span></a>
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
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>STATE</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $customers as $customer )
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if ($customer->gender=="m")
                        Male
                        @elseif ($customer->gender=="f")
                        Female
                        @else
                        Other
                        @endif</td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if ($customer->status=="1")
                        Active
                        @else
                        InACtive
                        @endif

                    </td>
                    <td>
                        <a href="{{url('/customer/delete')}}/{{$customer->customers_id}}"><button
                                class=" btn btn-danger">DELETE</button></a>
                        <a href="{{url('/customer/edit/'.$customer->customers_id)}}"><button
                                class="btn btn-success">Update</button></a>
                        {{-- <a href="{{route('customer.edit',['id => $customer->customer_id'])}}"><button
                                class="btn btn-primary">Update</button></a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
