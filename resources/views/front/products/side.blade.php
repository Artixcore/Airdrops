
            <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                <div class="course__sidebar__wraper" data-aos="fade-up">
                    <div class="course__heading">
                        <h5>Search here</h5>
                    </div>
                    <div class="course__input">
                        <input type="text" placeholder="Search product">
                        <div class="search__button">
                            <button><i class="icofont-search-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="course__sidebar__wraper" data-aos="fade-up">
                    <div class="categori__wraper">
                        <div class="course__heading">
                            <h5>Categories</h5>
                        </div>
                        <div class="course__categories__list">
                            <ul>

                            @php
                                $sides = App\Models\Product_Category::all();
                            @endphp
                            @foreach ($sides as $item)

                                <li>
                                    <a href="#">
                                        {{ $item->category }}
                                        <span></span>
                                    </a>
                                </li>

                            @endforeach

                            </ul>
                        </div>


                    </div>
                </div>


            </div>
