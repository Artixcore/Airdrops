@extends('admin.master')
@section('content')

  <section class="section dashboard">
    <div class="row">

    <div class="col-lg-12">
        <div class="row">
          <!-- Recent Sales -->
          <div class="col-8">
            <div class="card recent-sales overflow-auto">

            <div class="card-header">

                   New Course

            </div>
            <form action="{{ route('addcourse') }}" method="POST">
                @csrf
              <div class="card-body py-2">
                <div class="row">

                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Course Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Course Name">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Category</label>
                     <select name="category" class="form-control">
                        <option selected>Select Category.</option>

                        @php
                        $categories = App\Models\Course_Category::all();
                    @endphp
                    @foreach ( $categories as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach

                     </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Sub Category</label>
                        <select name="sub_category" class="form-control">
                            <option selected>Select Sub Category.</option>

                            @php
                                $subcategories = App\Models\Course_Sub_Category::all();
                            @endphp
                            @foreach ( $subcategories as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Course Duration</label>
                        <input type="text" class="form-control" placeholder="Course Duration" name="duration">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Name of Mentor/Tutor</label>
                        <input type="text" class="form-control" name="lectures" placeholder="Lectures">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">How many Projects will be on this Course</label>
                        <input type="text" name="projects" class="form-control" placeholder="Projects">
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Video Link From youtube</label>
                        <input type="text" class="form-control" placeholder="Intro Video From Youtube (Copy and Paste Link here)" name="intro_video">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Course Fees</label>
                        <input type="text" class="form-control" placeholder="Fees" name="fees">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Details</label>
                        <textarea type="text" class="form-control" name="overview" placeholder="Overview"></textarea>
                    </div>
                    <p class="py-2"></p>
                    <button type="submit" class="btn btn-lg btn-outline-success py-2">Save</button>
                </div>
                </div>
            </form>
              </div>
            </div>
          </div><!-- End Recent Sales -->

        </div>
    </div>

    </div>
  </section>



@endsection
