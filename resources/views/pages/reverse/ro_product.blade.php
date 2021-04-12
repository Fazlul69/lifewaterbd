<!--Products-->
<section id="products">
    <p class="head">Our Products</p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach($reverses as $r)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset('uploads/reverse/'. $r->image)}}" alt="Water Filter" class="img-thumbnail">
                            <div class="caption">
                                <h3>{{$r->name}}</h3>
                                <p>Brand: {{$r->brand}}
                                    <br>Capacity: {{$r->capacity}}
                                    <br> Original: {{$r->original}}
                                    <br> Membrane: {{$r->membrane}}
                                    <br>Filtering Stage: {{$r->filtering_stage}}
                                    <br>Size: {{$r->size}}
                                    <br>Reserve Capacity: {{$r->reserve_capacity}}
                                    <br>Technology: {{$r->technology}}
                                    <br>Warrenty: {{$r->warranty}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    

</section>