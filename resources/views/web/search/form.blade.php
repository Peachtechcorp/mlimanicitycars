<div id="filter" class="d-xl-none d-flex flex-column">
   
    <div class="d-flex flex-column align-items-stretch px-2">
        <p class="lead mt-2 text-primary"><i class="fa fa-filter"> Filter</i></p>
        <form id="filter_form" action="/search" method="post">
            @csrf
            <div class="form-group">
                <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                    <option value="">Choose brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : ''}}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="modeli_id" id="modeli_id" class="form-control @error('modeli_id') is-invalid @enderror">
                    <option value="">Choose model</option>
                </select>
            </div>
            <div class="form-group">
                <select name="body_id" id="body_id" class="form-control @error('body_id') is-invalid @enderror">
                    <option value="">Choose body</option>
                    @foreach ($bodies as $body)
                        <option value="{{ $body->id }}" {{ old('body_id') == $body->id ? 'selected' : ''}}>{{ $body->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="fuel_id" id="fuel_id" class="form-control @error('fuel_id') is-invalid @enderror">
                    <option value="">Choose fuel</option>
                    @foreach ($fuels as $fuel)
                        <option value="{{ $fuel->id }}" {{ old('fuel_id') == $fuel->id ? 'selected' : ''}}>{{ $fuel->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="transmission_id" id="transmission_id" class="form-control @error('transmission_id') is-invalid @enderror">
                    <option value="">Choose transmission</option>
                    @foreach ($transmissions as $transmission)
                        <option value="{{ $transmission->id }}" {{ old('transmission_id') == $transmission->id ? 'selected' : ''}}>{{ $transmission->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="drive_unit_id" id="drive_unit_id" class="form-control @error('drive_unit_id') is-invalid @enderror">
                    <option value="">Choose drive_unit</option>
                    @foreach ($drive_units as $drive_unit)
                        <option value="{{ $drive_unit->id }}" {{ old('drive_unit_id') == $drive_unit->id ? 'selected' : ''}}>{{ $drive_unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="color_id" id="color_id" class="form-control @error('color_id') is-invalid @enderror">
                    <option value="">Choose color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}" {{ old('color_id') == $color->id ? 'selected' : ''}}>{{ $color->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-sm btn-primary">Show <strong>12</strong> offers</button> <img class="mx-3 d-none" src="/images/loader.gif" alt="" height="16px"/>
        </form>
    </div>
    <div class="text-dark pl-4 py-2 border-top border-light text-center mt-auto">Copyright &copy; {{ date("Y") }}</div>
</div>