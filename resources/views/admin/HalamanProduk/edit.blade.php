<x-app>
    <div class="main-content">
        <form>
            <div class="page-header no-gutters has-tab">
                <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                            <img src="assets/images/others/thumb-16.jpg" alt="">
                        </div>
                        <div class="m-l-15">
                            <h4 class="m-b-0">Skinny Men Blazer</h4>
                            <p class="text-muted m-b-0">Code: #5325</p>
                        </div>
                    </div>
                    <div class="m-b-15">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-save"></i>
                            <span>Save</span>
                        </button>
                    </div>
                </div>
                <ul class="nav nav-tabs" >
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Basic Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-option">Option Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-description">Description</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="product-edit-basic" >
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" placeholder="Product Name" value="Skinny Men Blazer">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productPrice">Price</label>
                                <input type="text" class="form-control" id="productPrice" placeholder="Price" value="$ 199">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productCategory">Category</label>
                                <select class="custom-select" id="productCategory">
                                    <option value="cloths" selected>Cloths</option>
                                    <option value="homeDecoration">Home Decoration</option>
                                    <option value="eletronic">Eletronic</option>
                                    <option value="jewellery">Jewellery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productBrand">Brand</label>
                                <input type="text" class="form-control" id="productBrand" placeholder="Brand" value="H&M">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productStatus">Status</label>
                                <select class="custom-select" id="productStatus">
                                    <option value="inStock" selected>In Stock</option>
                                    <option value="outOfStock">Out of Stock</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-option">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productSize">Size</label>
                                <select class="select2" id="productSize" multiple="multiple">
                                    <option value="40" selected>40</option>
                                    <option value="42" selected>42</option>
                                    <option value="44">44</option>
                                    <option value="46">46</option>
                                    <option value="48">48</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productColors">Colors</label>
                                <select class="select2" id="productColors" multiple="multiple">
                                    <option value="db" selected>Dark Blue</option>
                                    <option value="g" selected>Gray</option>
                                    <option value="gb" selected>Gray Blue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productFit">Fit</label>
                                <select class="custom-select" id="productFit">
                                    <option value="skinny" selected>Skinny</option>
                                    <option value="slim">Slim</option>
                                    <option value="regular">Regular</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productMaterial">Material</label>
                                <select class="select2" id="productMaterial" multiple="multiple">
                                    <option value="polyester" selected>Polyester</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productShip">Ship From</label>
                                <select class="custom-select" id="productShip">
                                    <option value="columbia" selected>Columbia</option>
                                    <option value="brazil">Brazil</option>
                                    <option value="chile">Chile</option>
                                    <option value="argentina">Argentina</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-description">
                    <div class="card">
                        <div class="card-body">
                            <div id="productDescription">
                                <p>Special cloth alert. The key to more success is to have a lot of pillows. Surround yourself with angels, positive energy, beautiful people, beautiful souls, clean heart, angel. They will try to close the door on you, just open it. A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. They key is to have every key, the key to open every door.The other day the grass was brown, now it’s green because I ain’t give up. Never surrender. Lion! I’m up to something. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app>