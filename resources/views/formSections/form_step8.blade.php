<form method="POST" action="/contact-form/step9" autocomplete="off">
    @csrf
    <h6>
        SCHLUSSFOLGERUNG: Sich zu einem Global  Leader zu zählen, setz für Menschen wie
        Sie voraus da hinzugehen, wo Sie am besten behandelt werden. Für manche Menschen bedeutet das WENIGER oder
        keine Steuern. Für andere Menschen bedeutet es MEHR Freiheit. Was würde für SIE Erfolg bedeuten, wenn wir
        zusammenarbeiten würden?
    </h6>
    <div class="row">
        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check1"
            value="Einen zweiten Pass oder Wohnsitz um mehr Freiheit und Sicherheit zu erlangen"
            @if ($formData['conclusion'] == 'Einen zweiten Pass oder Wohnsitz um mehr Freiheit und Sicherheit zu erlangen')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger" for="check1">
            Einen zweiten Pass oder Wohnsitz um mehr Freiheit und Sicherheit zu erlangen
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check2"
            value="Mein Unternehmen ins Ausland verlegen und Steuereinsparungen erzielen"
            @if ($formData['conclusion'] == 'Mein Unternehmen ins Ausland verlegen und Steuereinsparungen erzielen')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check2">
            Mein Unternehmen ins Ausland verlegen und Steuereinsparungen erzielen
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check3"
            value="Mit Offshore-Investitionen höhere Renditen erzielen"
            @if ($formData['conclusion'] == 'Mit Offshore-Investitionen höhere Renditen erzielen')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check3">
            Mit Offshore-Investitionen höhere Renditen erzielen
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check4"
            value="Mein Vermögen im Ausland sichern"
            @if ($formData['conclusion'] == 'Mein Vermögen im Ausland sichern')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check4">
            Mein Vermögen im Ausland sichern
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check5"
            value="Mein Vermögen diversifizieren"
            @if ($formData['conclusion'] == 'Mein Vermögen diversifizieren')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check5">
            Mein Vermögen diversifizieren
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check6"
            value="Vom Bankgeheimnis im Ausland profitieren"
            @if ($formData['conclusion'] == 'Vom Bankgeheimnis im Ausland profitieren')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check6">
            Vom Bankgeheimnis im Ausland profitieren
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check7"
            value="Erstellen eines ganzheitlichen Plans, der alle Teile des Puzzles zusammenfügt"
            @if ($formData['conclusion'] == 'Erstellen eines ganzheitlichen Plans, der alle Teile des Puzzles zusammenfügt')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check7">
            Erstellen eines ganzheitlichen Plans, der alle Teile des Puzzles zusammenfügt
        </label>

        <input
            type="radio"
            name="conclusion"
            class="btn-check"
            id="check8"
            value="Andere"
            @if ($formData['conclusion'] == 'Andere')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check8">
            Andere
        </label>
        
        <input
            id="other"
            type="text"
            name="other"
            class="form-control mt-3 bg-transparent border-danger shadow-none text-white d-none"
            placeholder="Bitte schreiben Sie hier"
        >
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step7" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
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
<script>$('#portfolio-grid').addClass('step8-height')</script>
@endpush