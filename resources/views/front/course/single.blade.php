@extends('front.header')

@section('content')
    @foreach ($courses as $item)
    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                            <h2 class="heading">{{ $item->name }}</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>{{ $item->name }}</li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
    <!-- breadcrumbarea__section__end-->

    <div class="blogarea__2 sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">

                    <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">

                        <div class="registerarea__content course__details__video">
                            <div class="registerarea__video">
                                <div class="video__pop__btn">
                                    <a class="video-btn" href="{{ $item->intro_video }}"> <img src="frontend/img/icon/video.png" alt=""></a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="blog__details__content__wraper">
                        <div class="course__button__wraper" data-aos="fade-up">
                            <div class="course__button">
                                <a href="#">Featured</a>
                                <a class="course__2" href="#">Ux Design</a>
                            </div>
                            <div class="course__date">
                                <p>Last Update:<span> Sep 29, 2023</span></p>
                            </div>
                        </div>
                        <div class="course__details__heading" data-aos="fade-up">
                            <h3>{{ $item->name }}</h3>
                        </div>
                        <div class="course__details__price" data-aos="fade-up">
                            <ul>
                                <li>
                                    <div class="course__price">
                                        {{-- $32.00 <del>/ $67.00</del> --}}
                                        {{ $item->fees }}
                                    </div>
                                </li>
                                <li>
                                    <div class="course__details__date">
                                        <i class="icofont-book-alt"></i>
                                        {{-- 23 Lesson --}}
                                    </div>

                                </li>
                                <li>
                                    <div class="course__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(4)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="course__details__paragraph" data-aos="fade-up">
                            <p>
                            {{ $item->overview }}
                            </p>
                        </div>

                        <h4 class="sidebar__title" data-aos="fade-up">Course Details</h4>
                        <div class="course__details__wraper" data-aos="fade-up">

                            <ul>
                                <li>
                                    Instructor : <span> Mirnsdo.H</span>
                                </li>
                                <li>
                                    Lectures : <span>   120 sub</span>
                                </li>
                                <li>
                                    Duration : <span>  20h 41m 32s</span>
                                </li>
                                <li>
                                    Enrolled : <span>  2 students</span>
                                </li>
                                <li>
                                    Total : <span>   222 students</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Course level : <span>Intermediate</span>
                                </li>
                                <li>
                                    Language : <span>English spanish</span>
                                </li>
                                <li>
                                    Price Discount : <span>-20%</span>
                                </li>
                                <li>
                                    Regular Price : <span>$228/Mo</span>
                                </li>
                                <li>
                                    Course Status : <span>Available</span>
                                </li>
                            </ul>
                        </div>


                        <div class="course__details__tab__wrapper" data-aos="fade-up">
                            <div class="row">
                                <div class="col-xl-12">
                                    <ul class="nav  course__tap__wrap" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button"><i class="icofont-paper"></i>Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button"><i class="icofont-book-alt"></i>Curriculum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button"><i class="icofont-star"></i>Reviews</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button"><i class="icofont-teacher"></i>Instructor</button>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="tab-content tab__content__wrapper" id="myTabContent">

                                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                                    <div class="experence__heading">
                                        <h5> Experience Description</h5>
                                    </div>
                                    <div class="experence__description">
                                        <p class="description__1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum
                                            non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat
                                            pulvinar luctus
                                        </p>
                                        <p class="description__2">We have covered many special events such as fireworks, fairs, parades, races, walks, awards ceremonies, fashion shows, sporting events, and even a memorial service.
                                        </p>
                                        <p class="description__3">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt
                                            sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus.</p>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">


                                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Lesson #01
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">

                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-read-book"></i>
                                                            <h5> <span>Reading :</span> This is the second item's</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 28 minutes</span>
                                                            <span class="question">5 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-video-alt"></i>
                                                            <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-audio"></i>
                                                            <h5> <span>Audio :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-certificate"></i>
                                                            <h5> <span>Certificate :</span> This is most Important</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 50 minutes</span>
                                                            <span class="question">3 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-file-text"></i>
                                                            <h5> <span>Lesson 01 Exam :</span></h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="question">10 Questions</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Lesson #02
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">

                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-read-book"></i>
                                                            <h5> <span>Reading :</span> This is the second item's</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 28 minutes</span>
                                                            <span class="question">5 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-video-alt"></i>
                                                            <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-audio"></i>
                                                            <h5> <span>Audio :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-certificate"></i>
                                                            <h5> <span>Certificate :</span> This is most Important</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 50 minutes</span>
                                                            <span class="question">3 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-file-text"></i>
                                                            <h5> <span>Lesson 02 Exam :</span></h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="question">15 Questions</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Lesson #03
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">

                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-read-book"></i>
                                                            <h5> <span>Reading :</span> This is the second item's</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 28 minutes</span>
                                                            <span class="question">5 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-video-alt"></i>
                                                            <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-audio"></i>
                                                            <h5> <span>Audio :</span> Lorem ipsum dolor sit amet.</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-certificate"></i>
                                                            <h5> <span>Certificate :</span> This is most Important</h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="time"> <i class="icofont-clock-time"></i> 50 minutes</span>
                                                            <span class="question">3 Questions</span>
                                                        </div>
                                                    </div>
                                                    <div class="scc__wrap">
                                                        <div class="scc__info">
                                                            <i class="icofont-file-text"></i>
                                                            <h5> <span>Lesson 03 Exam :</span></h5>
                                                        </div>
                                                        <div class="scc__meta">
                                                            <span class="question">20 Questions</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>

                                <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="review__box">
                                                <div class="review__number">5.0</div>
                                                <div class="review__icon">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                </div>
                                                <span>(17 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col--30">
                                            <div class="review__wrapper">

                                                <div class="single__progress__bar">
                                                    <div class="rating__text">
                                                        5 <i class="icofont-star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">10</span>
                                                </div>

                                                <div class="single__progress__bar">
                                                    <div class="rating__text">
                                                        4 <i class="icofont-star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">5</span>
                                                </div>

                                                <div class="single__progress__bar">
                                                    <div class="rating__text">
                                                        3 <i class="icofont-star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">3</span>
                                                </div>

                                                <div class="single__progress__bar">
                                                    <div class="rating__text">
                                                        2 <i class="icofont-star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">2</span>
                                                </div>

                                                <div class="single__progress__bar">
                                                    <div class="rating__text">
                                                        1 <i class="icofont-star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="property__facts__feature property__facts__feature__2 ">
                                        <h4>Customer Reviews</h4>



                                        <ul class="property__comment">
                                            <li class="property__comment__list">
                                                <div class="property__comment__img">
                                                    <img src="frontend/img/teacher/teacher__2.png" alt="Image">
                                                </div>
                                                <div class="property__comment__comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="property__sidebar__icon">
                                                        <ul>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="property__comment__reply__btn">September 2, 2023</span>
                                                </div>

                                            </li>
                                            <li class="property__comment__list">
                                                <div class="property__comment__img">
                                                    <img src="frontend/img/teacher/teacher__1.png" alt="Image">
                                                </div>
                                                <div class="property__comment__comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="property__sidebar__icon">
                                                        <ul>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="property__comment__reply__btn">September 2, 2023</span>
                                                </div>

                                            </li>
                                            <li class="property__comment__list">
                                                <div class="property__comment__img">
                                                    <img src="frontend/img/teacher/teacher__3.png" alt="Image">
                                                </div>
                                                <div class="property__comment__comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="property__sidebar__icon">
                                                        <ul>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                            <li><i class="icofont-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="property__comment__reply__btn">September 2, 2023</span>
                                                </div>

                                            </li>
                                        </ul>

                                    </div>

                                    <form action="#" class="add__a__review__wrapper">
                                        <h4>Add a Review</h4>
                                        <div class="add__a__review">
                                            <h6>Your Ratings:</h6>
                                            <div class="property__sidebar__icon">
                                                <ul>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="add__a__review__input">
                                            <textarea placeholder="Type your comments...."></textarea>
                                        </div>
                                        <div class="add__a__review__input">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                        <div class="add__a__review__input">
                                            <input type="email" placeholder="Type your email....">
                                        </div>
                                        <div class="add__a__review__input">
                                            <input type="text" name="website" placeholder="Type your website....">
                                        </div>
                                        <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                        <div class="add__a__review__button">
                                            <button class="default__button" type="submit">Submit</button>
                                        </div>
                                    </form>

                                </div>

                                <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                                    <div class="blogsidebar__content__wraper__2 tab__instructor">
                                        <div class="blogsidebar__content__inner__2">
                                            <div class="blogsidebar__img__2">
                                                <img src="frontend/img/blog/blog_10.png" alt="blog">
                                            </div>

                                            <div class="tab__instructor__inner">
                                                <div class="blogsidebar__name__2">
                                                    <h5>
                                                        <a href="#">  Rosalina D. Willaim</a>

                                                    </h5>
                                                    <p>Blogger/Photographer</p>
                                                </div>
                                                <div class="blog__sidebar__text__2">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                                </div>
                                                <div class="blogsidbar__icon__2">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="icofont-facebook"></i></a>
                                                        </li>

                                                        <li>
                                                            <a href="#"><i class="icofont-youtube-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icofont-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icofont-twitter"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                        </div>

                        <div class="course__list__wraper" data-aos="fade-up">
                            <div class="blog__details__heading__2">
                                <h5>Why search Is Important ?</h5>
                            </div>
                            <div class="aboutarea__list__2 blog__details__list__2" data-aos="fade-up">
                                <ul>
                                    <li>
                                        <i class="icofont-check"></i>
                                        <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i>
                                        <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i>
                                        <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                    </li>
                                    <li>
                                        <i class="icofont-check"></i>
                                        <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="blog__details__tag" data-aos="fade-up">
                            <ul>
                                <li class="heading__tag">
                                    Tag
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">apps</a>
                                </li>
                                <li>
                                    <a href="#">data</a>
                                </li>
                            </ul>
                            <ul class="share__list">
                                <li class="heading__tag">
                                    Share
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                            </ul>
                        </div>



{{--
                        <div class="blog__details__comment">
                            <div class="blog__details__comment__heading" data-aos="fade-up">
                                <h5>(04) Comment</h5>
                            </div>
                            <div class="blog__details__comment__inner" data-aos="fade-up">
                                <div class="author__img">
                                    <img src="frontend/img/blog-details/blog-details__1.png" alt="author">

                                </div>
                                <div class="author__content">
                                    <div class="author__name">
                                        <h6><a href="#">Rohan De Spond</a></h6>
                                        <p>25 january 2023</p>

                                    </div>
                                    <div class="author__text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                    </div>
                                </div>
                                <div class="author__icon">
                                    <button>
                                    <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                    </svg>
                                </button>
                                </div>
                            </div>

                            <div class="blog__details__comment__inner author__padding__left" data-aos="fade-up">
                                <div class="author__img">
                                    <img src="frontend/img/blog-details/blog-details__2.png" alt="author">

                                </div>
                                <div class="author__content">
                                    <div class="author__name">
                                        <h6><a href="#">Rohan De Spond</a></h6>
                                        <p>25 january 2023</p>

                                    </div>
                                    <div class="author__text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                    </div>
                                </div>
                                <div class="author__icon">
                                    <button>
                                        <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>


                            <div class="blog__details__comment__inner" data-aos="fade-up">
                                <div class="author__img">
                                    <img src="frontend/img/blog-details/blog-details__3.png" alt="author">

                                </div>
                                <div class="author__content">
                                    <div class="author__name">
                                        <h6><a href="#">Rohan De Spond</a></h6>
                                        <p>25 january 2023</p>

                                    </div>
                                    <div class="author__text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                    </div>
                                </div>
                                <div class="author__icon">
                                    <button>
                                        <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="blog__details__comment__inner author__padding__left" data-aos="fade-up">
                                <div class="author__img">
                                    <img src="frontend/img/blog-details/blog-details__4.png" alt="author">

                                </div>
                                <div class="author__content">
                                    <div class="author__name">
                                        <h6><a href="#">Rohan De Spond</a></h6>
                                        <p>25 january 2023</p>

                                    </div>
                                    <div class="author__text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                    </div>
                                </div>
                                <div class="author__icon">
                                    <button>
                                        <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div> --}}

{{--
                        <div class="blog__details__form">
                            <div class="blog__details__input__heading" data-aos="fade-up">
                                <h5>Write your comment</h5>
                            </div>
                            <div class="row">
                                <div class="col-xl-6" data-aos="fade-up">
                                    <div class="blog__details__input">
                                        <input type="text" placeholder="Enter your name*">
                                    </div>
                                </div>
                                <div class="col-xl-6" data-aos="fade-up">
                                    <div class="blog__details__input">
                                        <input type="text" placeholder="Enter your mail**">
                                    </div>
                                </div>
                                <div class="col-xl-6" data-aos="fade-up">
                                    <div class="blog__details__input">
                                        <input type="text" placeholder="Enter your  number*">
                                    </div>
                                </div>
                                <div class="col-xl-6" data-aos="fade-up">
                                    <div class="blog__details__input">
                                        <input type="text" placeholder="Website*">
                                    </div>
                                </div>
                                <div class="col-xl-12" data-aos="fade-up">
                                    <div class="blog__details__input">
                                        <textarea cols="30" rows="10">Enter your Massage*</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__check__box" data-aos="fade-up">
                                <input type="checkbox" checked="checked"> Save my name, email, and website in this browser for the next time I comment.
                            </div>
                        </div>
                        <div class="blog__details__button" data-aos="fade-up">
                            <a class="default__button" href="#">Post a Comment</a>
                        </div>
 --}}


                    </div>
                </div>


                <div class="col-xl-4 col-lg-4">
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">
                        <div class="blogsidebar__content__inner__2">
                            <div class="blogsidebar__img__2">
                                <img src="frontend/img/blog/blog_10.png" alt="blog">
                            </div>
                            <div class="blogsidebar__name__2">
                                <h5>
                                    <a href="#">  Rosalina D. Willaim</a>

                                </h5>
                                <p>Blogger/Photographer</p>
                            </div>
                            <div class="blog__sidebar__text__2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Veritatis distinctio suscipit reprehenderit atque</p>
                            </div>
                            <div class="blogsidbar__icon__2">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Search here</h4>
                        <form action="#">
                            <div class="blogsudebar__input__area">
                                <input type="text" name="search" placeholder="Search product">
                                <div class="blogsidebar__input__icon">
                                    <i class="icofont-search-1"></i>
                                </div>

                            </div>


                        </form>

                    </div>
                    {{-- <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Populer Course</h4>
                        <ul class="course__details__populer__list">
                            <li>

                                <div class="course__details__populer__img">
                                    <img src="frontend/img/blog-details/blog-details__6.png" alt="populer">
                                </div>
                                <div class="course__details__populer__content">
                                    <span>$32,000</span>
                                    <h6>
                                        <a href="#">Making Music with Other People</a>

                                    </h6>
                                </div>



                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img src="frontend/img/blog-details/blog-details__7.png" alt="populer">
                                </div>
                                <div class="course__details__populer__content">
                                    <span>$32,000</span>
                                    <h6>
                                        <a href="#">Making Music with Other People</a>

                                    </h6>
                                </div>




                            </li>
                            <li>

                                <div class="course__details__populer__img">
                                    <img src="frontend/img/blog-details/blog-details__8.png" alt="populer">
                                </div>
                                <div class="course__details__populer__content">
                                    <span>$32,000</span>
                                    <h6>
                                        <a href="#">Making Music with Other People</a>

                                    </h6>
                                </div>




                            </li>
                        </ul>

                    </div> --}}
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Book Now</h4>

                        <form action="{{ route('bookcourse') }}" method="POST">
                            @csrf
                            <div class="get__touch__input">
                                <input type="text" name="name" placeholder="Enter name*">
                                <input type="hidden" name="course_id" value="{{  $item->id }}">
                                <input type="hidden" name="user_id" value="{{  $item->user_id }}">
                                <input type="email" name="email" placeholder="Enter your mail*">
                                <input type="phone" name="phone" placeholder="Phone*">
                                <button type="submit" class="default__button" >Book</button>
                            </div>
                        </form>


                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Popular tag</h4>
                        <div class="populer__tag__list">
                            <ul>
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Design</a></li>
                                <li><a href="blog-details.html">apps</a></li>
                                <li><a href="blog-details.html">landing page</a></li>
                                <li><a href="blog-details.html">data</a></li>
                                <li><a href="blog-details.html">book</a></li>
                                <li><a href="blog-details.html">Design</a></li>
                                <li><a href="blog-details.html">book</a></li>
                                <li><a href="blog-details.html">landing page</a></li>
                                <li><a href="blog-details.html">data</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Follow Us</h4>
                        <div class="follow__icon">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
