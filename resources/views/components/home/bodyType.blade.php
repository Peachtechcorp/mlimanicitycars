{{-- @php
    $bodies = App\Body::all();
@endphp

<div class="container" style="position: relative; margin-top: -85px; z-index-2;">
    <div class="owl-carousel owl-theme">
        @foreach ($bodies as $body)
            <div class="me-1 mb-1 shadow rounded bg-light p-3" style="border-bottom: 2px solid red;">
                <img src="{{ $body->logo }}" class="mx-auto" style="width:80px;" alt="...">
                <div class="card-body p-2 overflow-hidden">
                    <h6 class="text-dark fw-bold text-center">{{ $body->name }}</h6>
                    <p class="text-center text-danger"><small>({{ $body->cars()->count() }})cars</small></p>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}

<div class="container" style="position: relative; margin-top: -85px; z-index-2;">
    <div class="search-box-3 sb-5">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="select-brand" tabindex="null">
                                        <option>Select Brand</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Honda</option>
                                        <option>Nissan</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select Brand"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Brand</div></div> </div></button><div class="dropdown-menu" data-popper-placement="bottom-start" style="max-height: 352px; overflow: hidden; min-height: 117px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(114px, 700px);"><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 352px; overflow-y: auto; min-height: 117px;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="5" aria-posinset="1" aria-selected="true"><span class="text">Select Brand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">Audi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">BMW</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">Honda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0"><span class="text">Nissan</span></a></li></ul></div></div></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="select-make">
                                        <option>Select Make</option>
                                        <option>BMW</option>
                                        <option>Honda</option>
                                        <option>Lamborghini</option>
                                        <option>Sports Car</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Select Make"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Make</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="select-location">
                                        <option>Select Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Select Location"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Location</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="select-year">
                                        <option>Select Year</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Select Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Year</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-4" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="select-type">
                                        <option>Select Type Of Car</option>
                                        <option>New Car</option>
                                        <option>Used Car</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Select Type Of Car"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Type Of Car</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select search-fields"><select class="selectpicker search-fields" name="transmission">
                                        <option>Transmission</option>
                                        <option>Automatic</option>
                                        <option>Manual</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" title="Transmission"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Transmission</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-6" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><span class="min-value">0 USD</span> <span class="max-value">150000 USD</span><input class="current-min" type="hidden" name="min_price" value="0"><input class="current-max" type="hidden" name="max_price" value="150000"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="btn btn-block button-theme btn-md">
                                        <i class="fa fa-search"></i>Find
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>