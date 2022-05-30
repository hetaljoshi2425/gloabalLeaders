<form method="POST" action="/contact-form/step2" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col">
            @error('fullName')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <label for="fullName" class="fw-bold">
            Wie lautet Dein voller Name?
            </label>
            <input
                id="fullName"
                name="fullName"
                type="text"
                class="
                    form-control
                    bg-transparent
                    border-danger
                    border-bottom
                    border-0
                    text-white
                    shadow-none
                    mt-2
                "
                placeholder="Schreiben Sie Ihren Namen hierhin.."
                value="@if(old('fullName')!= ''){{ old('fullName') }}@else{{ $formData['firstName'] }}@endif"
            >
        </div>
        <!-- <div class="col">
            <label for="lastName" class="fw-bold">
                Ihr Nachname?
            </label>
            <input
                id="lastName"
                name="lastName"
                type="text"
                class="
                    form-control
                    bg-transparent
                    border-danger
                    border-bottom
                    border-0
                    text-white
                    shadow-none
                    mt-2
                "
                placeholder="Nachname"
                value={{ $formData['lastName'] }}
            >
        </div> -->
    </div>
    <div class="row mt-5">
        <div class="col">
            @error('email')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <label for="email" class="fw-bold">
                Was ist Ihre beste E-Mail-Adresse?
            </label>
            <input
                id="email"
                name="email"
                type="text"
                class="
                    form-control
                    bg-transparent
                    border-danger
                    border-bottom
                    border-0
                    text-white
                    shadow-none
                    mt-2
                "
                placeholder="somebody@example.com"
               value="@if(old('email')!= ''){{ old('email') }}@else{{ $formData['email'] }}@endif"
            >
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            @error('phone')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <label for="phone" class="fw-bold">
                Was ist Ihre beste Telefonnummer?
            </label>
            <input
                id="phone"
                name="phone"
                type="text"
                class="
                    form-control
                    bg-transparent
                    border-danger
                    border-bottom
                    border-0
                    text-white
                    shadow-none
                    mt-2
                "
                value="@if(old('phone')!= ''){{ old('phone') }}@else{{ $formData['phone'] }}@endif"
            >
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            @error('age')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <label for="age" class="fw-bold">
                wie alt sind Sie?
            </label>
            <br>
            @php $counter = 1 @endphp
            @foreach ($ages as $age)
                <label for="age{{$counter}}">
                <input type="radio" name="age" id="age{{$counter}}" value="{{$age}}" @if(old('age')!= '') @if (old('age') == $age) checked @endif @else @if ($formData['age'] == $age) checked @endif @endif > &nbsp;{{$age}}
                </label><br>
                @php $counter++ @endphp
            @endforeach
            <!-- <select
                name="age"
                class="form-select bg-transparent text-white border-danger shadow-none p-3"
            >
                <option>
                    Bitte wählen sie aus
                </option>
                @foreach ($ages as $age)
                    <option
                        value="{{$age}}"
                        @if ($formData['age'] == $age)
                            selected
                        @endif
                    >
                        {{$age}}
                    </option>
                @endforeach
            </select> -->
        </div>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
            <i class="fa-solid fa-circle-arrow-left"></i>
            Zurück
        </a>
        <div class="col-sm-4 col-6 text-right">
            <button type="submit" class="btn btn-lg btn-danger">
                Nächste
                <i class="fa-solid fa-circle-arrow-right"></i>
            </button>
        </div>
    </div>
</form>
@push('scripts')
<script>
$("#portfolio-grid").css("height", $(window).height());
$(window).resize(function() {
  $("#portfolio-grid").css("height", $(window).height());
});
</script>
@endpush
<style>
    .alert-danger {
        color: #FFF;
        background-color: #842029;
        border-color: #842029;
    }
    .alert {
        padding: 6px;
    }
</style>