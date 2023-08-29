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
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   New Affiliate
                </button>
            </div>

              <div class="card-body py-2">
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">For</th>
                      <th scope="col">Email</th>
                      <th scope="col">Code</th>
                      <th scope="col">Role</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @php
                        $affiliates = App\Models\Affiliate::all();
                    @endphp

                    @foreach ($affiliates as $item)
                    <tr>
                      <th scope="row"><a href="#">{{ $item->id }}</a></th>
                      <td>{{ $item->for }}</td>
                      <td><a class="text-primary">{{ $item->email }}</a></td>
                      <td>{{ $item->code }}</td>
                      <td><span class="badge bg-success">{{ $item->role }}</span></td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Role</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{ route('affiliate') }}" method="POST">
        @csrf
        <div class="modal-body">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">For</span>
                <input type="text" name="for" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              </div>

              <div class="input-group mb-3">

                @php
                $products = App\Models\Product::all();
                @endphp


                <span class="input-group-text" id="basic-addon1">Select Product If Affiliate is for Products</span>
                  <select name="product_id" class="form-control">
                    <option selected>Select One..</option>

                    @foreach ($products as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                  </select>
              </div>

              <div class="input-group mb-3">

                @php
                $courses = App\Models\Course::all();
                @endphp


                <span class="input-group-text" id="basic-addon1">Select Course If Affiliate is for Products</span>
                  <select name="product_id" class="form-control">
                    <option selected>Select One..</option>

                    @foreach ($courses as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                  </select>
              </div>

              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Email Address</span>
                  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Last Name" aria-describedby="basic-addon1" required>
              </div>

              <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Amount</span>
                  <input type="number" class="form-control" name="amount" placeholder="Amount" aria-label="Amount" aria-describedby="basic-addon1" required>
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
