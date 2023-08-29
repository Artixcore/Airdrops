<div class="populerarea sp_top_80 sp_bottom_50">
    <div class="container">
        <div class="row populerarea__wraper" data-aos="fade-up">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="populerarea__heading heading__underline">
                    <div class="default__small__button">Course List</div>
                    <h2>Populer <span>Subjects</span></h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                {{-- <div class="populerarea__content">
                    <p>Forging relationships between multi to national governments and global NGOs begins.</p>
                </div> --}}
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                <div class="populerarea__button">
                    <a class="default__button" href="{{ route('course') }}">All Catagories
                        <i class="icofont-long-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">

            @php
                $course_cat = App\Models\Course_Category::all();
            @endphp

            @foreach ($course_cat as $item)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                <div class="single__service">

                    <div class="service__content">
                        <h3><a href="#">{{ $item->name }}</a></h3>
                        <p>update your skill</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
