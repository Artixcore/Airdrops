@extends('admin.master')
@section('content')
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-header">
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    New Role
                                </button>
                            </div>

                            <div class="card-body py-2">
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            {{-- <th scope="col">Price</th> --}}
                                            <th scope="col">Role</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $roles = App\Models\User::all();
                                        @endphp


                                        @foreach ($roles as $item)
                                            @if (isset($item['role']))
                                                <!-- Display data that has 'f_name' -->
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $item->id }}</a></th>
                                                    <td>{{ $item->name }}</td>
                                                    <td><a class="text-primary">{{ $item->email }}</a></td>
                                                    {{-- <td>$</td> --}}
                                                    <td><span class="badge bg-success">{{ $item->role }}</span></td>
                                                    <td>Edit</td>
                                                    <td>Delete</td>
                                                </tr>
                                            @endif
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                </div>
            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Role</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('manager_roles') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Role</span>
                            <select name="role" class="form-control">
                                <option selected>Select One..</option>
                                <option value="manager">Manager</option>
                                <option value="tutor">Tutor</option>
                                <option value="ads">Ad Manager</option>
                                <option value="team">Team Leader</option>
                                <option value="counselor">Counselor</option>
                                {{-- <option value="ads"></option> --}}
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input type="text" name="name" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1" required>
                            <input type="hidden" name="role" value="manager">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">First Name</span>
                            <input type="text" class="form-control" name="f_name" placeholder="First Name"
                                aria-label="First Name" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Last Name</span>
                            <input type="text" class="form-control" name="l_name" placeholder="Last Name"
                                aria-label="Last Name" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="email"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Phone</span>
                            <input type="phone" class="form-control" name="phone" placeholder="Phone Number"
                                aria-label="Phone" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" class="form-control" name="phone" placeholder="Password"
                                aria-label="Password" aria-describedby="basic-addon1" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
