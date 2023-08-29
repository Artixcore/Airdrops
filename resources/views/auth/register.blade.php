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
                            <h2 class="heading">Register</h2>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img class=" shape__icon__img shape__icon__img__1" src="frontend/img/herobanner/herobanner__1.png"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__2" src="frontend/img/herobanner/herobanner__2.png"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__3" src="frontend/img/herobanner/herobanner__3.png"
                alt="photo">
            <img class=" shape__icon__img shape__icon__img__4" src="frontend/img/herobanner/herobanner__5.png"
                alt="photo">
        </div>

    </div>
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">


                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                        aria-labelledby="projects__one">


                        <div class="col-xl-8 offset-md-2">
                            <div class="loginarea__wraper">


                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Username</label>
                                                <input id="name" type="text"
                                                    class="common__login__input @error('name') is-invalid @enderror"
                                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                                    autofocus required>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Email</label>
                                                <input id="email" type="email"
                                                    class="common__login__input @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    autofocus required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Password</label>
                                                <input id="password" type="password"
                                                    class="common__login__input @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password" required>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Re-Enter Password</label>
                                                <input id="password-confirm" type="password" class="common__login__input"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" id="accept_pp"> <label for="accept_pp">Accept the
                                                Terms and Privacy Policy</label>
                                        </div>

                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button">Sign-up</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
