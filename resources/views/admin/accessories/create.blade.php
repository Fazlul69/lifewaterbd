@extends('pages.main')

@section('content')
    <div class="container">
        <h5 class="card-title">RO Accessories</h5>
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
                <form action="{{route('accessories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Product Name">
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