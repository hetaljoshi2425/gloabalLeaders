<form method="POST" action="/contact-form/step4" autocomplete="off">
    @csrf
    <h6>
        Haben Sie Strafregister Einträge? (Sie können Verkehrsverstöße ausschließen)
    </h6>
    <div class="row">
            <input
                type="radio"
                name="criminalRecord"
                class="btn-check"
                id="criminalRecordYes"
                autocomplete="off"
                value="Ich habe keine Einträge"
                @if($formData['criminalRecord'] == 'Ich habe keine Einträge') checked @endif
            >
            <label class="btn btn-lg btn-outline-danger" for="criminalRecordYes">Ich habe keine Einträge</label>

            <input
                type="radio"
                name="criminalRecord"
                class="btn-check"
                id="criminalRecordNo"
                autocomplete="off"
                value="Ich habe einen oder mehrere Einträge"
                @if($formData['criminalRecord'] == 'Ich habe einen oder mehrere Einträge') checked @endif
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="criminalRecordNo">Ich habe einen oder mehrere Einträge</label>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step2" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
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