<form method="POST" action="/contact-form/step8" autocomplete="off">
    @csrf
    <h6>
        Leben Sie die meiste Zeit im Ausland oder in einem anderen Land oder in anderen Ländern?
    </h6>
    <div class="row">
        <input
            type="radio"
            name="liveAbroad"
            class="btn-check"
            id="check1"
            value="Ich plane in mehreren Ländern zu leben"
            @if ($formData['liveAbroad'] == 'Ich plane in mehreren Ländern zu leben')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger" for="check1">
            Ich plane in mehreren Ländern zu leben
        </label>

        <input
            type="radio"
            name="liveAbroad"
            class="btn-check"
            id="check2"
            value="Kann ich akzeptieren um meine Ziele zu erreichen"
            @if ($formData['liveAbroad'] == 'Kann ich akzeptieren um meine Ziele zu erreichen')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check2">
            Kann ich akzeptieren um meine Ziele zu erreichen
        </label>

        <input
            type="radio"
            name="liveAbroad"
            class="btn-check"
            id="check3"
            value="Ist etwas das ich nicht tun will oder kann"
            @if ($formData['liveAbroad'] == 'Ist etwas das ich nicht tun will oder kann')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check3">
            Ist etwas das ich nicht tun will oder kann
        </label>

        <input
            type="radio"
            name="liveAbroad"
            class="btn-check"
            id="check4"
            value="Ist etwas das ich bereits tue"
            @if ($formData['liveAbroad'] == 'Ist etwas das ich bereits tue')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check4">
            Ist etwas das ich bereits tue 
        </label>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step6" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
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
<script>$('#portfolio-grid').height(1000)</script>
@endpush