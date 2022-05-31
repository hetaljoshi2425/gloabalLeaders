<form method="POST" action="/contact-form/step7" autocomplete="off">
    @csrf
    <h6>
        Wie sieht Ihre aktuelle Struktur aus? Geben Sie uns einen grundlegenden Überblick über Ihre Struktur
        und deren Komplexität, einschließlich aller Trusts oder Stiftungen.
    </h6>
    <textarea
        name="currentStructure"
        class="form-control"
        placeholder="Bitte schreiben Sie hier"
        style="height: 100px"
    >{{ $formData['currentStructure'] }}</textarea>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step5" class="col-sm-2 col-6 btn btn-lg contact_form_btn">
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
<script>
$("#portfolio-grid").css("height", $(window).height());
$(window).resize(function() {
  $("#portfolio-grid").css("height", $(window).height());
});
</script>
@endpush