<!--Products-->
<section id="products">
    <p class="head">Our Products</p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach($filters as $f)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset('uploads/single/'. $f->image)}}" alt="Water Filter" class="img-thumbnail">
                            <div class="caption">
                                <h3 class="text-center">{{$f->name}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>