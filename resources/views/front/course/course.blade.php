@extends('front.header')

@section('content')
        <div class="breadcrumbarea">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__title">
                                <h2 class="heading">Featured Courses</h2>
                            </div>

                        </div>



                    </div>
                </div>
            </div>

            <div class="shape__icon__2">
                <img class=" shape__icon__img shape__icon__img__1" src="frontend/img/herobanner/herobanner__1.png" alt="photo">
                <img class=" shape__icon__img shape__icon__img__2" src="frontend/img/herobanner/herobanner__2.png" alt="photo">
                <img class=" shape__icon__img shape__icon__img__3" src="frontend/img/herobanner/herobanner__3.png" alt="photo">
                <img class=" shape__icon__img shape__icon__img__4" src="frontend/img/herobanner/herobanner__5.png" alt="photo">
            </div>

        </div>
        <!-- breadcrumbarea__section__end-->

        @php
        $courses = App\Models\Course::all();
        @endphp

        <!-- course__section__start   -->
        <div class="coursearea sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="course__text__wraper" data-aos="fade-up">
                            <div class="course__text">
                                <p>Showing 1–12 of 54 Results</p>
                            </div>
                            <div class="course__icon">
                                <ul class="nav property__team__tap" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one"><i class="icofont-layout"></i>
                                            </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two"><i class="icofont-listine-dots"></i>
                                        </a>
                                    </li>

                                    <li class="short__by__new">
                                        <select class="form-select" aria-label="Default select example">
                                                <option selected>Short by New</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                    </li>



                                </ul>
                            </div>
                        </div>

                    </div>

                    @include('front.course.side')


                    <div class="col-xl-9 col-lg-9 col-md-8 col-12">

                        <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">


                            <div class="tab-pane fade  active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">

                                <div class="row">
                                    @foreach ($courses as $item)
                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12" data-aos="fade-up">
                                        <div class="gridarea__wraper gridarea__wraper__2">
                                            <div class="gridarea__img">
                                                <a href="">
                                                    <iframe src="https://www.youtube.com/embed/SvfKo6hv7Js" style="width: 100%; height:100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                </a>
                                                <div class="gridarea__small__button">
                                                    <div class="grid__badge">{{ $item->category }}</div>
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                {{-- <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i> 23 Lesson
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                <div class="gridarea__heading">
                                                    <h3><a href="{{ route('single_course', $item->course_id) }}">
                                                        {{ $item->name }}
                                                       </a></h3>
                                                </div>
                                                <div class="gridarea__price">
                                                    {{ $item->fees }}
                                                    {{-- <del>/ $67.00</del> --}}
                                                    {{-- <span> <del class="del__2">Free</del></span> --}}

                                                </div>
                                                <div class="gridarea__bottom">

                                                    <a href="instructor-details.html">
                                                        <div class="gridarea__small__img">
                                                            <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                            <div class="gridarea__small__content">
                                                            @php
                                                                $users = App\Models\User::where('id', $item->user_id)->get();
                                                             @endphp
                                                             @foreach ($users as $user)

                                                             <h6> <i class="fas fa-user"></i> {{ $user->name }}</h6>
                                                             @endforeach
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div class="gridarea__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <span>(4)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>

                            </div>


                            {{-- <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">

                                <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="frontend/img/grid/grid_1.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge">Data & Tech</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 23 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Become a product Manager learn the
                                                            skills & job.
                                                        </a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $32.00 <del>/ $67.00</del>
                                            <span>Free.</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <div class="gridarea__bottom__left">
                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>

                                            <div class="gridarea__details">
                                                <a href="course-details.html">Know Details
                                                            <i class="icofont-arrow-right"></i>
                                                        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                                    <div class="gridarea__img">
                                        <img src="frontend/img/grid/grid_2.png" alt="grid">
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge blue__color">Mechanical</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 23 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Foundation course to under stand
                                                        about softwere</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $32.00 <del>/ $67.00</del>
                                            <span>Free.</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <div class="gridarea__bottom__left">
                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>

                                            <div class="gridarea__details">
                                                <a href="course-details.html">Know Details
                                                        <i class="icofont-arrow-right"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="frontend/img/grid/grid_3.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge pink__color">Development</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 23 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Strategy law and with for organization
                                                        Foundation
                                                    </a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $32.00 <del>/ $67.00</del>
                                            <span>Free.</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <div class="gridarea__bottom__left">
                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>

                                            <div class="gridarea__details">
                                                <a href="course-details.html">Know Details
                                                        <i class="icofont-arrow-right"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="frontend/img/grid/grid_4.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge green__color">Ui & UX Design</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 23 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">The business Intelligence analyst with
                                                        Course & 2023
                                                    </a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $32.00 <del>/ $67.00</del>
                                            <span>Free.</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <div class="gridarea__bottom__left">
                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>

                                            <div class="gridarea__details">
                                                <a href="course-details.html">Know Details
                                                        <i class="icofont-arrow-right"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
                                    <div class="gridarea__img">
                                        <a href="course-details.html"><img src="frontend/img/grid/grid_5.png" alt="grid"></a>
                                        <div class="gridarea__small__button">
                                            <div class="grid__badge orange__color">Data & Tech</div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                    </div>
                                    <div class="gridarea__content">
                                        <div class="gridarea__list">
                                            <ul>
                                                <li>
                                                    <i class="icofont-book-alt"></i> 23 Lesson
                                                </li>
                                                <li>
                                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gridarea__heading">
                                            <h3><a href="course-details.html">Become a product Manager learn the skills & job.
                                                    </a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            $32.00 <del>/ $67.00</del>
                                            <span>Free.</span>

                                        </div>
                                        <div class="gridarea__bottom">
                                            <div class="gridarea__bottom__left">
                                                <a href="instructor-details.html">
                                                    <div class="gridarea__small__img">
                                                        <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                                        <div class="gridarea__small__content">
                                                            <h6>Mirnsdo .H</h6>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>(44)</span>
                                                </div>
                                            </div>

                                            <div class="gridarea__details">
                                                <a href="course-details.html">Know Details
                                                        <i class="icofont-arrow-right"></i>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}

                        </div>

                        <div class="main__pagination__wrapper" data-aos="fade-up">
                            <ul class="main__page__pagination">
                                <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i></a></li>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>







@endsection
