<?php include(base_path('resources\views\product\header.blade.php')); ?>

    <!-- Page Content -->
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        @foreach ($dataProduct as $dataProduct)
                        <h3 class="product-title"> {{ $dataProduct->product_name }}  </h3>

                        <p class="product-description">{{ $dataProduct->note_1 }}</p>
                        <h4 class="price">current price: <span>{{ $dataProduct->price }} $</span></h4>
                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                        <h5 class="sizes">sizes:
                            <span class="size" data-toggle="tooltip" title="small">s</span>
                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                            <span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
	</div>
    </div>
    <!-- /.container -->

<?php include(base_path('resources\views\product\footer.blade.php')); ?>
