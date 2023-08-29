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
                <a class="btn btn-outline-primary" href="{{ route('addcourse') }}">
                   New Course
                </a>

                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#category">
                   Add New Category
                </button>

                   <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#subcategory">
                   Add New Sub Category
                </button>

            </div>

              <div class="card-body py-2">
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">SubCategory</th>
                      <th scope="col">Fee</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @php
                        $affiliates = App\Models\Course::all();
                    @endphp

                    @foreach ($affiliates as $item)
                    <tr>
                      <th scope="row"><a href="#">{{ $item->id }}</a></th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->category }}</td>
                      <td>{{ $item->sub_category }}</td>
                      <td><span class="badge bg-success">{{ $item->fees }}</span></td>
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
  <div class="modal fade" id="category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('category') }}" method="POST">
         @csrf
        <div class="modal-body">
         <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Category Name">
         </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="subcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Sub Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('subcategory') }}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <select name="category_id" class="form-control">
                    <option selected>Select One.</option>

                    @foreach (App\Models\Course_Category::all() as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach

                </select>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Sub Category">
            </div>
        </div>
        <div class="modal-footer">
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>

@endsection
