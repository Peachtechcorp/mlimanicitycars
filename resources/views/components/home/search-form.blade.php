@php
    $brands = App\Models\Brand::all();
    $fuels = App\Models\Fuel::all();
    $transmissions = App\Models\Transmission::all();
    $bodies = App\Models\Body::all();
    $wheels = App\Models\Wheel::all();
    $colors = App\Models\Color::all();
    $models = App\Models\Modeli::all();
@endphp
<div class="container" x-data="getState()" x-init="initialize({{ json_encode($models) }}, {{ json_encode($brands) }})" style="background-color: rgb(220 38 38);">

    <form class="py-5 px-5" action="{{ route('search') }}" method="POST">
        @csrf
        <div class="py-3 flex flex-sm-column flex-md-row flex-xm-column items-center -mx-4">
            <div class="w-full md:w-1/4 px-4">
                <select name="brand_id" x-model="form.brand_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <option>Select brand</option>
                    <template x-for="brand in brands">
                        <option x-bind:value="brand.id" x-text="brand.name">
                        </option>
                    </template>

                </select>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <select name="modeli_id" x-model="form.modeli_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <template x-for="model in models.filter(u => form.brand_id ? u.brand_id == form.brand_id : '')">
                        <option x-bind:value="model.id" x-text="model.name"></option>
                    </template>

                </select>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <select name="body_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <option>Select body</option>
                    @foreach ($bodies as $body)
                        <option value="{{ $body->id }}">{{ $body->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <select name="fuel_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <option>Select fuel</option>
                    @foreach ($fuels as $fuel)
                        <option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
                    @endforeach


                </select>
            </div>
        </div>
        <div class="py-3 flex flex-sm-column flex-md-row flex-xm-column items-center -mx-4">
            <div class="w-full md:w-1/4 px-4">
                <select name="transmission_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">

                    <option>Select Choose transmission</option>
                    @foreach ($transmissions as $transmission)
                        <option value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <select name="wheel_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <option>Select wheel</option>
                    @foreach ($wheels as $wheel)
                        <option value="{{ $wheel->id }}">{{ $wheel->name }}</option>
                    @endforeach


                </select>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <select name="color_id"
                    class="border border-solid border-gray-300 bg-white w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                    <option>Select color</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach


                </select>
            </div>
            <div class="w-full md:w-1/4 px-4 ">
                <button type="submit"
                    class="w-full inline-block align-middle bg-dark leading-none py-5 px-5 md:px-8 text-sm text-white transition-all hover:bg-dark uppercase font-semibold hover:text-white">Search
                    Car</button>
            </div>
        </div>
    </form>
</div>

<script>
    const initialForm = {

        brand_id: '',
        modeli_id: '',



    }

    function getState() {
        return {
            models: [],
            brands: [],
            form: initialForm,
            initialize(models, brands) {
                this.models = models;
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
