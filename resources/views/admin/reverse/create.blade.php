@extends('pages.main')

@section('content')
    <div class="container">
        <h5 class="card-title">Add New ROS</h5>
        <div class="card w-75">
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('ro.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand" class="col-sm-3 col-form-label">Product Brand</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="brand" placeholder="Product Brand">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="capacity" class="col-sm-3 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="capacity" placeholder="Capacity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="original" class="col-sm-3 col-form-label">Original</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="original" placeholder="Original">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="membrane" class="col-sm-3 col-form-label">Membrane</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="membrane" placeholder="Membrane">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="filter_stage" class="col-sm-3 col-form-label">Filter Stage</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="filter_stage" placeholder="Filter Stage">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">Size</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="size" placeholder="Size">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="reserve_capacity" class="col-sm-3 col-form-label">Reserve Capacity</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="reserve_capacity" placeholder="Reserve Capacity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="technology" class="col-sm-3 col-form-label">Technology</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="technology" placeholder="Technology">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warranty" class="col-sm-3 col-form-label">Warranty</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="warranty" placeholder="Warranty">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount_price" class="col-sm-3 col-form-label">Discount Price</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="discount_price" placeholder="Discount Price">
                        </div>
                    </div>

                    <div class="form-group row">
						<label for="image" class="col-sm-3 col-form-label">Image</label>
						<input type="file" name="image" id="fileToUpload">
					</div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection