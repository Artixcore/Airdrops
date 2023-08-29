@extends('layouts.app')

@section('content')

<div>
    <div class="theme__shadow__circle"></div>
    <div class="theme__shadow__circle shadow__right"></div>
</div>
<!-- theme fixed shadow -->

<!-- breadcrumbarea__section__start -->

<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading">Login</h2>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <div class="shape__icon__2">
        <img class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png" alt="photo">
    </div>

</div>


    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">


                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                        aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">



                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login__form">
                                        <label class="form__label">Email Address</label>
                                        <input id="email" type="email"
                                            class="common__login__input @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input id="password" type="password"
                                            class="common__login__input @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" name="remember" id="forgot"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="forgot"> Remember me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button" href="#">Log In</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">


                    </div>



                </div>

            </div>

            <div class=" login__shape__img educationarea__shape_image">
                <img class="hero__shape hero__shape__1" src="frontend/img/education/hero_shape2.png" alt="Shape">
                <img class="hero__shape hero__shape__2" src="frontend/img/education/hero_shape3.png" alt="Shape">
                <img class="hero__shape hero__shape__3" src="frontend/img/education/hero_shape4.png" alt="Shape">
                <img class="hero__shape hero__shape__4" src="frontend/img/education/hero_shape5.png" alt="Shape">
            </div>


        </div>
    </div>
@endsection
