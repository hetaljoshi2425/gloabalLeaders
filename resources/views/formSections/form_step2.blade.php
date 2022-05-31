<form method="POST" action="/contact-form/step3" autocomplete="off">
    @csrf
    <div class="">
        <label for="age" class="fw-bold">
            Ihre Staatsangehörigkeit
        </label>
        <select
            name="country"
            class="form-select text-white border-danger shadow-none p-3"
        >
            <option class="form-text">
                Bitte wählen sie aus
            </option>
            @foreach ($countries as $country)
            <option
                value="{{ $country['name'] }}"
                @if($formData['country'] == $country['name'])
                selected
                @endif
            >
                {{ $country['name'] }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step1" class="col-sm-2 col-6 btn btn-lg contact_form_btn">
            <i class="fa-solid fa-circle-arrow-left"></i>
            Zurück
        </a>
        <div class="col-sm-4 col-6 text-right">
            <button type="submit" class="btn btn-lg blade_submit_btn">
                Nächste
                <i class="fa-solid fa-circle-arrow-right"></i>
            </button>
        </div>
    </div>
</form>
@push('scripts')
<script>$('#portfolio-grid').height(400)</script>
@endpush