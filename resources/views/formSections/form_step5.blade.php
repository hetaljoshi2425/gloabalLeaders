<form method="POST" action="/contact-form/step6" autocomplete="off">
    @csrf
    <h6>
    Global Leaders wählt erfolgreiche Unternehmer um einen Machtanspruch an die Zukunft zu stellen. 
Was beschreibt Sie und/oder Ihr Unternehmen am besten?
    </h6>
    <div class="row mt-2">
        <div class="col">
            <label for="annualincome" class="form_blade_title">
            <input type="radio" name="secondPass" id="annualincome" @if(old('secondPass')!= '') @if (old('secondPass') == "Ich habe ein jährliches Einkommen vor Steuern von 500.000 EUR oder mehr") checked @endif @else @if ($formData['secondPass'] == "Ich habe ein jährliches Einkommen vor Steuern von 500.000 EUR oder mehr") checked @endif @endif value="Ich habe ein jährliches Einkommen vor Steuern von 500.000 EUR oder mehr">&nbsp; Ich habe ein jährliches Einkommen vor Steuern von 500.000 EUR oder mehr
            </label><br>
            <label for="networth" class="form_blade_title">
            <input type="radio" name="secondPass" id="networth" @if(old('secondPass')!= '') @if (old('secondPass') == "Ich habe ein Nettovermögen von mindestens 1 Million EUR (exclusive dem Wert meines Unternehmens)") checked @endif @else @if ($formData['secondPass'] == "Ich habe ein Nettovermögen von mindestens 1 Million EUR (exclusive dem Wert meines Unternehmens)") checked @endif @endif value="Ich habe ein Nettovermögen von mindestens 1 Million EUR (exclusive dem Wert meines Unternehmens)">&nbsp; Ich habe ein Nettovermögen von mindestens 1 Million EUR (exclusive dem Wert meines Unternehmens)
            </label><br>
            <label for="wealthcriteria" class="form_blade_title">
            <input type="radio" name="secondPass" id="wealthcriteria" @if(old('secondPass')!= '') @if (old('secondPass') == "Ich erfülle sowohl die  Einkommens- als auch VermögenskriterienIch erfülle sowohl die  Einkommens- als auch Vermögenskriterien") checked @endif @else @if ($formData['secondPass'] == "Ich erfülle sowohl die  Einkommens- als auch VermögenskriterienIch erfülle sowohl die  Einkommens- als auch Vermögenskriterien") checked @endif @endif value="Ich erfülle sowohl die  Einkommens- als auch Vermögenskriterien">&nbsp; Ich erfülle sowohl die  Einkommens- als auch Vermögenskriterien
            </label><br>
            <label for="twocriteria" class="form_blade_title">
            <input type="radio" name="secondPass" id="twocriteria" @if(old('secondPass')!= '') @if (old('secondPass') == "Ich erfülle keine der beiden Kriterien") checked @endif @else @if ($formData['secondPass'] == "Ich erfülle keine der beiden Kriterien") checked @endif @endif value="Ich erfülle keine der beiden Kriterien">&nbsp; Ich erfülle keine der beiden Kriterien
            </label>
        </div>
    </div>
    <!-- <div class="form-check form-switch d-flex align-items-center" style="height: 5em">
        <input
            name="secondPass"
            class="form-check-input border-0 shadow-none mx-2"
            type="checkbox"
            value="Ja"
            @if ($formData['secondPass'] == 'Ja')
                checked
            @endif
        >
        <h6 class="form-check-label">Ja / Nein</h6>
    </div> -->
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step4" class="col-sm-2 col-6 btn btn-lg contact_form_btn">
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
<script>$('#portfolio-grid').height(600)</script>
@endpush