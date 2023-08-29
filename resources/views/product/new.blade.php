@extends('admin.master')
@section('content')

  <section class="section dashboard">
        <div class="row">
          <!-- Recent Sales -->
          <div class="col-md-8">
            <div class="card">
            <div class="card-header">Products</div>
            <form action="{{ route('newproducts') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body py-2">
                <div class="row">

                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Product Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Product Name">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Category</label>
                     <select name="category" class="form-control">
                        <option selected>Select Category.</option>

                        @php
                        $categories = App\Models\Product_Category::all();
                    @endphp
                    @foreach ($categories as $item)
                    <option value="{{ $item->category }}">{{ $item->category }}</option>
                    @endforeach

                     </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Sub Category</label>
                        <select name="sub_category" class="form-control">
                            <option selected>Select Sub Category.</option>

                            @php
                                $subcategories = App\Models\Product_Sub_Category::all();
                            @endphp
                            @foreach ($subcategories as $item)
                            <option value="{{ $item->sub_category }}">{{ $item->sub_category }}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Primary Image</label>
                        <input type="file" class="form-control" placeholder="Course Duration" name="image">
                    </div>
                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Total Quantity</label>
                        <input type="text" class="form-control" name="quantity" placeholder="Total Quantity">
                    </div>
                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Company Price</label>
                        <input type="text" class="form-control" name="com_price" placeholder="Company Price">
                    </div>
                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Dealer Price</label>
                        <input type="text" class="form-control" name="dealer_price" placeholder="Dealer Price">
                    </div>
                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Sell Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="row">

                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Size</label>
                        <input type="text" name="size" class="form-control" placeholder="Size">
                    </div>
                    <div class="col-md-2">
                        <label for="inputAddress" class="form-label">Discount</label>
                        <input type="text" name="discount" class="form-control" placeholder="Discount">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Production Date</label>
                        <input type="date" name="production_fate" class="form-control" placeholder="Discount">
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Expire Date</label>
                        <input type="date" name="expire_date" class="form-control" placeholder="Discount">
                    </div>
                </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                        @php
                        $brands = App\Models\ProductBrand::all();
                        @endphp
                        <label for="inputAddress" class="form-label">Brand Name</label>
                        <select name="brand" class="form-control">
                              <option selected>Select Brand.</option>
                              @foreach ($brands as $item)
                                  <option value="{{ $item->brand_name }}">{{ $item->brand_name }}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        @php
                        $dealers = App\Models\ProductDealer::all();
                        @endphp
                        <label for="inputAddress" class="form-label">Dealer Name</label>
                        <select name="dealer" class="form-control">
                              <option selected>Select Brand.</option>
                              @foreach ($dealers as $item)
                                  <option value="{{ $item->dealer_name }}">{{ $item->dealer_name }}</option>
                              @endforeach
                        </select>
                      </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label">Details</label>
                        <textarea type="text" class="form-control" name="details" placeholder="Overview"></textarea>
                    </div>
                    <p class="py-2"></p>
                    <button type="submit" class="btn btn-lg btn-outline-success py-2">Save</button>
                </div>
                </div>
            </form>
              </div>
            </div>


            <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">


                <div class="card">
                    <div class="card-header">
                        Product Category
                    </div>
                <form action="{{ route('product_category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3"><input type="file" class="form-control" name="image"></div>
                        <div class="mb-3"><input type="text" class="form-control" name="category"></div>
                    </div>
                    <div class="card-footer">
                     <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>

            </div>

          </div><!-- End Recent Sales -->

          <div class="col-md-4">

            <div class="card recent-sales overflow-auto">
                <div class="card-header">
                    Product SubCategory
                </div>
            <form action="{{ route('product_subcategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3"><input type="file" class="form-control" name="image"></div>
                    <div class="mb-3">
                        @php
                            $pcat = App\Models\Product_Category::all();
                        @endphp
                        <select name="cat_id" class="form-control">
                            <option selected>Select Category</option>
                            @foreach ($pcat as $item)
                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3"><input type="text" class="form-control" name="sub_category"></div>
                </div>
                <div class="card-footer">
                 <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>

        </div>

      </div><!-- End Recent Sales -->

      <div class="col-md-4">

        <div class="card recent-sales overflow-auto">
            <div class="card-header">
                Product Dealer
            </div>
        <form action="{{ route('product_Dealer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3"><input type="file" class="form-control" name="dealer_image"></div>
                <div class="mb-3"><input type="number" class="form-control" name="dealer_number"></div>
                <div class="mb-3"><input type="text" class="form-control" name="dealer_name"></div>
                <div class="mb-3"><input type="text" class="form-control" name="licence_number"></div>
                <div class="mb-3"><textarea type="text" class="form-control" name="dealer_details"></textarea></div>
            </div>
            <div class="card-footer">
             <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>

    </div>

  </div><!-- End Recent Sales -->

  <div class="col-md-4">

    <div class="card recent-sales overflow-auto">
        <div class="card-header">
            Product Brand
        </div>
    <form action="{{ route('product_brands') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="mb-3"><input type="file" class="form-control" name="brand_logo"></div>
            <div class="mb-3"><input type="text" class="form-control" name="brand_name"></div>
            <div class="mb-3"><input type="text" class="form-control" name="brand_type"></div>
        </div>
        <div class="card-footer">
         <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>

</div>

</div><!-- End Recent Sales -->

    </div>
        </div>
  </section>



@endsection
