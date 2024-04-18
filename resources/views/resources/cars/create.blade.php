@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col" x-data="getState()" x-init="initialize({{ json_encode($models) }}, {{ json_encode($modelCodes) }}, {{ json_encode($brands) }})">
                <div class="card">
                    <div class="card-body">
                        <h3>Add Car</h3>
                        <form action="/cars" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="brand_id" class="control-label">Choose brand</label>
                                <select name="brand_id" x-model="form.brand_id"
                                    class="form-control @error('brand_id') is-invalid @enderror">
                                    <option value="">Choose...</option>

                                    <template x-for="brand in brands">
                                        <option x-bind:value="brand.id" x-text="brand.name">
                                        </option>
                                    </template>

                                </select>
                                @error('brand_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="modeli_id" class="control-label">Choose model</label>
                                <select name="modeli_id" x-model="form.modeli_id"
                                    class="form-control @error('modeli_id') is-invalid @enderror">
                                    <option value="">Choose..</option>
                                    <template
                                        x-for="model in models.filter(u => form.brand_id ? u.brand_id == form.brand_id : '')">
                                        <option x-bind:value="model.id" x-text="model.name">

                                        </option>
                                        </template>

                                </select>
                                @error('modeli_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="model_code_id" class="control-label">Choose model code</label>
                                <select name="model_code_id" x-model="model_code_id"
                                    class="form-control @error('model_code_id') is-invalid @enderror">
                                    <option value="">Choose... </option>
                                    <template
                                        x-for="modelCode in modelCodes.filter(u=>form.modeli_id ? u.modeli_id ==form.modeli_id:'')">
                                        <option x-bind:value="modelCode.id" x-text="modelCode.name"></option>
                                    </template>
                                </select>
                                @error('model_code_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="body_id" class="control-label">Choose body</label>
                                <select name="body_id" id="body_id"
                                    class="form-control @error('body_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($bodies as $body)
                                        <option value="{{ $body->id }}"
                                            {{ old('body_id') == $body->id ? 'selected' : '' }}>{{ $body->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('body_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="fuel_id" class="control-label">Choose fuel</label>
                                <select name="fuel_id" id="fuel_id"
                                    class="form-control @error('fuel_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($fuels as $fuel)
                                        <option value="{{ $fuel->id }}"
                                            {{ old('fuel_id') == $fuel->id ? 'selected' : '' }}>{{ $fuel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('fuel_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="transmission_id" class="control-label">Choose transmission</label>
                                <select name="transmission_id" id="transmission_id"
                                    class="form-control @error('transmission_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($transmissions as $transmission)
                                        <option value="{{ $transmission->id }}"
                                            {{ old('transmission_id') == $transmission->id ? 'selected' : '' }}>
                                            {{ $transmission->name }}</option>
                                    @endforeach
                                </select>
                                @error('transmission_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="drive_unit_id" class="control-label">Choose drive unit</label>
                                <select name="drive_unit_id" id="drive_unit_id"
                                    class="form-control @error('drive_unit_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($driveUnits as $driveUnit)
                                        <option value="{{ $driveUnit->id }}"
                                            {{ old('drive_unit_id') == $driveUnit->id ? 'selected' : '' }}>
                                            {{ $driveUnit->name }}</option>
                                    @endforeach
                                </select>
                                @error('drive_unit_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="wheel_id" class="control-label">Choose wheel</label>
                                <select name="wheel_id" id="wheel_id"
                                    class="form-control @error('wheel_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($wheels as $wheel)
                                        <option value="{{ $wheel->id }}"
                                            {{ old('wheel_id') == $wheel->id ? 'selected' : '' }}>{{ $wheel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('wheel_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="color_id" class="control-label">Choose color</label>
                                <select name="color_id" id="color_id"
                                    class="form-control @error('color_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}"
                                            {{ old('color_id') == $color->id ? 'selected' : '' }}>{{ $color->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('color_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ref_no" class="control-label">Reference Number</label>
                                <input type="text" name="ref_no"
                                    class="form-control @error('ref_no') is-invalid @enderror"
                                    value="{{ old('ref_no') }}">

                                @error('ref_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="chassis" class="control-label">Chassis</label>
                                <input type="text" name="chassis"
                                    class="form-control @error('chassis') is-invalid @enderror"
                                    value="{{ old('chassis') }}">

                                @error('chassis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="class" class="control-label">Car Class</label>
                                <input type="text" name="class"
                                    class="form-control @error('class') is-invalid @enderror"
                                    value="{{ old('class') }}">

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="millage" class="control-label">Millage</label>
                                <input type="number" name="millage"
                                    class="form-control @error('millage') is-invalid @enderror"
                                    value="{{ old('millage') }}">

                                @error('millage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="engine_cc" class="control-label">Engine cc</label>
                                <input type="number" name="engine_cc"
                                    class="form-control @error('engine_cc') is-invalid @enderror"
                                    value="{{ old('engine_cc') }}">

                                @error('engine_cc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="registration_year" class="control-label">Registration year</label>
                                <input type="number" name="registration_year"
                                    class="form-control @error('registration_year') is-invalid @enderror"
                                    value="{{ old('registration_year') }}">

                                @error('registration_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="manufacture_year" class="control-label">Manufacture year</label>
                                <input type="number" name="manufacture_year"
                                    class="form-control @error('manufacture_year') is-invalid @enderror"
                                    value="{{ old('manufacture_year') }}">

                                @error('manufacture_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="seats" class="control-label">Seats</label>
                                <input type="number" name="seats"
                                    class="form-control @error('seats') is-invalid @enderror"
                                    value="{{ old('seats') }}">

                                @error('seats')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="doors" class="control-label">Doors</label>
                                <input type="number" name="doors"
                                    class="form-control @error('doors') is-invalid @enderror"
                                    value="{{ old('doors') }}">

                                @error('doors')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dimension" class="control-label">dimension</label>
                                <input type="text" name="dimension"
                                    class="form-control @error('dimension') is-invalid @enderror"
                                    value="{{ old('dimension') }}">

                                @error('dimension')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="meter_cubic" class="control-label">Meter cubic</label>
                                <input type="number" name="meter_cubic"
                                    class="form-control @error('meter_cubic') is-invalid @enderror"
                                    value="{{ old('meter_cubic') }}">

                                @error('meter_cubic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="weight" class="control-label">Weight</label>
                                <input type="number" name="weight"
                                    class="form-control @error('weight') is-invalid @enderror"
                                    value="{{ old('weight') }}">

                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="imported_from" class="control-label">Imported from</label>
                                <input type="text" name="imported_from"
                                    class="form-control @error('imported_from') is-invalid @enderror"
                                    value="{{ old('imported_from') }}">

                                @error('imported_from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="customs_valuation" class="control-label">Customs valuation</label>
                                <input type="text" name="customs_valuation"
                                    class="form-control @error('customs_valuation') is-invalid @enderror"
                                    value="{{ old('customs_valuation') }}">

                                @error('customs_valuation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="first_user" class="control-label">First User</label>
                                <input type="text" name="first_user"
                                    class="form-control @error('first_user') is-invalid @enderror"
                                    value="{{ old('first_user') }}">

                                @error('first_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="first_seller" class="control-label">First Seller</label>
                                <input type="text" name="first_seller"
                                    class="form-control @error('first_seller') is-invalid @enderror"
                                    value="{{ old('first_seller') }}">

                                @error('first_seller')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="video_link" class="control-label">Video Link</label>
                                <input type="text" name="video_link"
                                    class="form-control @error('video_link') is-invalid @enderror"
                                    value="{{ old('video_link') }}">

                                @error('video_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="seller_comment" class="control-label">Seller Comment</label>
                                <textarea name="seller_comment" class="form-control @error('seller_comment') is-invalid @enderror">{{ old('seller_comment') }}</textarea>

                                @error('seller_comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pictures" class="control-label">Select Pictures</label>
                                <input type="file" name="pictures[]"
                                    class="form-control @error('pictures') is-invalid @enderror" multiple />

                                @error('pictures')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="features" class="control-label">Choose Features</label><br />
                                @foreach ($addons as $addon)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="addons[]"
                                            value="{{ $addon->id }}">
                                        <label class="form-check-label" for="inlineCheckbox1">{{ $addon->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="features" class="control-label">Choose Sale Categories</label><br />
                                @foreach ($saleCategories as $category)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="sale_categories[]"
                                            value="{{ $category->id }}">
                                        <label class="form-check-label"
                                            for="inlineCheckbox1">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="tracking_status_id" class="control-label">Choose Status</label>
                                <select name="tracking_status_id" id="tracking_status_id"
                                    class="form-control @error('tracking_status_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($trackingStatuses as $trackingStatus)
                                        <option value="{{ $trackingStatus->id }}"
                                            {{ old('tracking_status_id') == $trackingStatus->id ? 'selected' : '' }}>
                                            {{ $trackingStatus->status }}</option>
                                    @endforeach
                                </select>
                                @error('tracking_status_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="currency_id" class="control-label">Choose currency</label>
                                <select name="currency_id" id="currency_id"
                                    class="form-control @error('currency_id') is-invalid @enderror">
                                    <option value="">Choose...</option>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->id }}"
                                            {{ old('currency_id') == $currency->id ? 'selected' : '' }}>
                                            {{ $currency->name }}</option>
                                    @endforeach
                                </select>
                                @error('currency_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="price" class="control-label">Price</label>
                                <input type="number" name="price"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price') }}">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    const initialForm = {
        model: null,
        model_code: null,
        brand_id: '',
        modeli_id: '',
        model_code_id: '',


    }

    function getState() {
        return {
            models: [],
            modelCodes: [],
            brands: [],
            form: initialForm,
            initialize(models, modelCodes, brands) {
                this.models = models;
                this.modelCodes = modelCodes;
                this.brands = brands;


                this.$watch('form.brand_id', id => {

                })
                this.$watch('form.modeli_id', id => {
                    //   const _model_code = this.modelCodes.find(u => u.modeli_id == id);
                })
            }
        }
    }
</script>
