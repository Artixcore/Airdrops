@extends('admin.master')
@section('content')

<section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ Storage::disk('local')->url('Avatar/'.Auth::user()->avatar) }}" alt="Profile" class="rounded-circle">

            <h2>{{  Auth::user()->name  }}</h2>
            {{-- <h3>Web Designer</h3> --}}
            <div class="social-links mt-2">
              {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">First Name</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->f_name }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->l_name }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Designation</div>

                  @if(Auth::user()->Is_Admin=='1')
                  <div class="col-lg-9 col-md-8">Admin</div>
                  @elseif (Auth::user()->Is_Manager=='1')
                  <div class="col-lg-9 col-md-8">Manager</div>
                  @elseif (Auth::user()->Is_Tutor=='1')
                  <div class="col-lg-9 col-md-8">Teacher</div>
                  @elseif (Auth::user()->Is_teamL=='1')
                  <div class="col-lg-9 col-md-8">Team Leader</div>
                  @elseif (Auth::user()->Is_ader=='1')
                  <div class="col-lg-9 col-md-8">Ad Manager</div>
                  @endif

                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="{{ route('profile_edit', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="{{ Storage::disk('local')->url('Avatar/'.Auth::user()->avatar) }}" alt="Profile" class="rounded-circle">
                      <div class="pt-2">
                       <input type="file" name="avatar" class="form-control-file">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="f_name" type="text" class="form-control" id="fullName" value="{{ Auth::user()->f_name }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="l_name" type="text" class="form-control" id="fullName" value="{{ Auth::user()->l_name }}">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="Phone" value="{{ Auth::user()->phone }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="{{ Auth::user()->email }}">
                    </div>
                  </div>


                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>


              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form method="POST" action="{{ route('updatePassword') }}">
                   @csrf
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="current_password" type="password" class="form-control" id="current_password" required>
                      @error('current_password')
                      <span>{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="password" required>
                      @error('password')
                      <span>{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection
