<?php include(base_path('resources\views\product\header.blade.php')); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a class ="list-group-item" href="{{route('public')}}">All Product</a>
                    @foreach($dataTypeProduct as $dataTypeProduct)
                    <a class ="list-group-item" href="{{route('type', ['id' =>$dataTypeProduct->type_id  ])}}">{{ $dataTypeProduct->type_name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    @foreach($dataProduct as $dataProduct)	
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class = "product-img">
                                <a href="{{route('view-info', ['id' =>$dataProduct->product_id  ])}}"><img src="http://placehold.it/320x300" alt=""></a>
                                <a href="#" onclick="doAddCart({{ $dataProduct->product_id }})">
                                    <div class="p-mask" style="text-align: center">
                                        <h4>Add To Cart</h4>
                                    </div>
                                </a>
                            </div>
                                <div class="caption">
                                    <h4><a href="{{route('view-info', ['id' =>$dataProduct->product_id])}}">{{ $dataProduct->product_name }}</a>
                                    <h6>{{ $dataProduct->note_1 }}</h6>
                                    <h5>{{ $dataProduct->price }} $</h5>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php include(base_path('resources\views\product\footer.blade.php')); ?>