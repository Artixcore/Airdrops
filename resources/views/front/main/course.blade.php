<div class="gridarea">
    <div class="container">
        <div class="row">
            <div class="section__title text-center" data-aos="fade-up">
                <div class="section__title__button">
                    <div class="default__small__button">Course List</div>
                </div>
                <div class="section__title__heading heading__underline">
                    <h2>Perfect Online <span>Course</span>
                        <br> For Your Carrer</h2>
                </div>
            </div>
        </div>


        <div class="row" data-aos="fade-up">
            <div class="col-xl-12">
                <div class="gridfilter_nav grid__filter gridFilter">
                    <button class="active" data-filter="*">All</button>
                    @php
                    $course_cat = App\Models\Course_Category::all();
                    @endphp
                    @foreach ($course_cat as $item)
                    <button data-filter=".{{ $item->name }}" class="">{{ $item->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>


        @php
            $courses = App\Models\Course::all();
        @endphp

        <div class="row grid" data-aos="fade-up">

        @foreach ($courses as $course)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item {{ $course->category }}">
                <div class="gridarea__wraper">
                    <div class="gridarea__img">
                        <a href="#">
                            <iframe src="https://www.youtube.com/embed/SvfKo6hv7Js" style="width: 100%; height:100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </a>
                        <div class="gridarea__small__button">
                            <div class="grid__badge">{{ $course->category }}</div>
                        </div>
                        <div class="gridarea__small__icon">
                            <a href="#"><i class="icofont-heart-alt"></i></a>
                        </div>

                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__list">
                            <ul>
                                {{-- <li>
                                    <i class="icofont-book-alt"></i> 23 Lesson
                                </li> --}}
                                {{-- <li>
                                    <i class="icofont-clock-time"></i> 1 hr 30 min
                                </li> --}}
                            </ul>
                        </div>
                        <div class="gridarea__heading">
                            <h3><a href="">
                                {{ Str::limit($course->overview, 100) }}
                            </a></h3>
                        </div>
                        <div class="gridarea__price">
                            {{ $course->fees }}
                             {{-- <del>/ $67.00</del> --}}
                            <span> <del class="del__2">Free</del></span>

                        </div>
                        <div class="gridarea__bottom">

                            <a href="instructor-details.html">
                                <div class="gridarea__small__img">
                                    <img src="frontend/img/grid/grid_small_1.jpg" alt="grid">
                                    <div class="gridarea__small__content">
                                        <h6>Micle Jhon</h6>
                                    </div>
                                </div>
                            </a>

                            <div class="gridarea__star">
                                <i class="icofont-star"></i>
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
</div>
