@extends('front.header')
@section('content')

        @php
            $products = App\Models\Product::paginate(9);
        @endphp

        <div class="breadcrumbarea">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__title">
                                <h2 class="heading">Featured Products</h2>
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

                   @include('front.products.side')


                    <div class="col-xl-9 col-lg-9 col-md-8 col-12">

                        <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">


                            <div class="tab-pane fade  active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">

                                <div class="row">
                                    @foreach ($products as $item)
                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12" data-aos="fade-up">
                                        <div class="gridarea__wraper gridarea__wraper__2">
                                            <div class="gridarea__img">
                                                <a href="">
                                                    {{-- <iframe src="https://www.youtube.com/embed/SvfKo6hv7Js" style="width: 100%; height:100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                                                <img src="{{ Storage::disk('local')->url('Product/'.$item->image) }}" alt="">
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
                                                    <h3><a href="">
                                                        {{ Str::limit($item->details, 100) }}
                                                       </a></h3>
                                                </div>
                                                <div class="gridarea__price">

                                                    @if (isset($item['discount']))
                                                    <span class="red line-through me-2">
                                                        @php
                                                        $newprice = $item->price - ($item->price * ($item->discount / 100));
                                                        @endphp
                                                        {{ $newprice }} <del>/ {{ $item->price }}  </del>
                                                    </span>
                                                    @else
                                                    {{ $item->price }}
                                                    @endif
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



                        </div>

                        {{-- <div class="main__pagination__wrapper" data-aos="fade-up">
                            <ul class="main__page__pagination">
                                <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i></a></li>
                            </ul>
                        </div> --}}

                    </div>


                </div>
            </div>
        </div>

@endsection
