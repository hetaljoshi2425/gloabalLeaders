<form method="POST" action="/contact-form/step5" autocomplete="off">
    @csrf
    <h6>
        Wir unterstützen sowohl einkommensstarke als auch vermögende Unternehmer und Investoren. 
        Was beschreibt Sie und/oder Ihr Unternehmen am besten?
    </h6>
    <div class="row">
            <input
                type="radio"
                name="description"
                class="btn-check"
                id="description1"
                value="Ich habe ein jährliches Einkommen vor Steuern von 500.000 USD oder mehr"
                @if(
                $formData['description'] == "Ich habe ein jährliches Einkommen vor Steuern von 500.000 USD oder mehr"
                )
                checked
                @endif
            >
            <label class="btn btn-lg btn-outline-danger" for="description1">
                Ich habe ein jährliches Einkommen vor Steuern von 500.000 USD oder mehr
            </label>

            <input
                type="radio"
                name="description"
                class="btn-check"
                id="description2"
                value="Ich habe ein Nettovermögen von mindestens 1 Million US-Dollar (exclusive dem Wert meines Unternehmens)"
                @if(
                $formData['description'] == "Ich habe ein Nettovermögen von mindestens 1 Million US-Dollar (exclusive dem Wert meines Unternehmens)"
                )
                checked
                @endif
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="description2">
                Ich habe ein Nettovermögen von mindestens 1 Million US-Dollar (exclusive dem Wert meines Unternehmens)
            </label>

            <input
                type="radio"
                name="description"
                class="btn-check"
                id="description3"
                value="Ich erfülle sowohl die  Einkommens- als auch Vermögenskriterien"
                @if(
                $formData['description'] == "Ich erfülle sowohl die  Einkommens- als auch Vermögenskriterien"
                )
                checked
                @endif
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="description3">
                Ich erfülle sowohl die  Einkommens- als auch Vermögenskriterien
            </label>

            <input
                type="radio"
                name="description"
                class="btn-check"
                id="description4"
                value="Ich erfülle keine der beiden Kriterien"
                @if(
                $formData['description'] == "Ich erfülle keine der beiden Kriterien"
                )
                checked
                @endif
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="description4">
                Ich erfülle keine der beiden Kriterien
            </label>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step3" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
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
<script>$('#portfolio-grid').height(1100)</script>
@endpush