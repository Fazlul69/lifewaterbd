<!--Products-->
<section id="products">
    <p class="head">Our Products</p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach($unders as $u)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset('uploads/under/'. $u->image)}}" alt="Water Filter" class="img-thumbnail">
                            <div class="caption">
                                <h3 class="text-center">{{$u->name}}</h3>
                                <p class="text-center">Details: {{$u->details}}
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