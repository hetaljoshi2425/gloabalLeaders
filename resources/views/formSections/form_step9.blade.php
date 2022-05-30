<form method="POST" action="/contact-form/final" autocomplete="off">
    @csrf
    <h6>
        Wie lange haben Sie damit verbracht, über die Entwicklung einer Offshore-Strategie nachzudenken
    </h6>
    <div class="row">
        <input
            type="radio"
            name="offshore"
            class="btn-check"
            id="check1"
            value="Weniger als 3 Monate"
            @if ($formData['offshore'] == 'Weniger als 3 Monate')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger" for="check1">
            Weniger als 3 Monate
        </label>

        <input
            type="radio"
            name="offshore"
            class="btn-check"
            id="check2"
            value="3 - 6 Monate"
            @if ($formData['offshore'] == '3 - 6 Monate')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check2">
            3 - 6 Monate
        </label>

        <input
            type="radio"
            name="offshore"
            class="btn-check"
            id="check3"
            value="Seit einem  1 Jahr"
            @if ($formData['offshore'] == 'Seit einem  1 Jahr')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check3">
            Seit einem  1 Jahr
        </label>

        <input
            type="radio"
            name="offshore"
            class="btn-check"
            id="check4"
            value="Mehr als 1 Jahr"
            @if ($formData['offshore'] == 'Mehr als 1 Jahr')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check4">
            Mehr als 1 Jahr
        </label>
    </div>
    <h6>
        Was ist der wahre Grund, warum Sie Ihre noch nicht erreicht haben und warum haben Sie sich entschieden,
        es jetzt zu tun?
    </h6>
    <textarea
        name="reason"
        class="form-control"
        placeholder="Bitte schreiben Sie hier"
        style="height: 100px"
    >{{ $formData['reason'] }}</textarea>
    <h6>
        Was beschreibt am besten Ihre aktuelle Situation, in der Sie Hilfe suchen?
    </h6>
    <div class="row">
        <input
            type="radio"
            name="currentSituation"
            class="btn-check"
            id="check5"
            value="Ich habe gerade mit meiner Suche begonnen und möchte jemanden finden, der mir helfen KANN"
            @if ($formData['currentSituation'] == 'Ich habe gerade mit meiner Suche begonnen und möchte jemanden finden, der mir helfen KANN')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger" for="check5">
            Ich habe gerade mit meiner Suche begonnen und möchte jemanden finden, der mir helfen KANN
        </label>

        <input
            type="radio"
            name="currentSituation"
            class="btn-check"
            id="check6"
            value="Ich habe Zeit damit verbracht, mit anderen Leuten zu reden, die mir NICHT helfen KÖNNEN, und jetzt möchte ich eine Person finden, die professionell unterstützen kann"
            @if ($formData['currentSituation'] == 'Ich habe Zeit damit verbracht, mit anderen Leuten zu reden, die mir NICHT helfen KÖNNEN, und jetzt möchte ich eine Person finden, die professionell unterstützen kann')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check6">
            Ich habe Zeit damit verbracht, mit anderen Leuten zu reden, die mir NICHT helfen KÖNNEN,
            und jetzt möchte ich eine Person finden, die professionell unterstützen kann 
        </label>

        <input
            type="radio"
            name="currentSituation"
            class="btn-check"
            id="check7"
            value="Ich spreche derzeit mit mehreren verschiedenen Personen, um alle verfügbaren Optionen zu bewerten"
            @if ($formData['currentSituation'] == 'Ich spreche derzeit mit mehreren verschiedenen Personen, um alle verfügbaren Optionen zu bewerten')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check7">
            Ich spreche derzeit mit mehreren verschiedenen Personen, um alle verfügbaren Optionen zu bewerten
        </label>
    </div>

    <h6>
    SCHLUSSFOLGERUNG: Sich zu den Global  Leaders zu zählen, setz für Menschen wie
Sie voraus Ihre Strukturen zu optimieren und in ein Netzwerk einzutreten das Machtstrukturen fördert. Welchen Wert möchten Sie aus dem Global Leaders Forum schöpfen?
    </h6>
    <div class="row">
        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check6"
            value=" 	Maximaler Erfolg meines Unternehmens durch Vernetzung"
            @if ($formData['powerstructures'] == ' 	Maximaler Erfolg meines Unternehmens durch Vernetzung')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger" for="check6">
             	Maximaler Erfolg meines Unternehmens durch Vernetzung
        </label>

        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check7"
            value="Politisch motiviert"
            @if ($formData['powerstructures'] == 'Politisch motiviert')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check7">Politisch motiviert</label>

        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check8"
            value="Der langristige Ausbau von Unternemergesteuerten Machtstrukturen"
            @if ($formData['powerstructures'] == 'Der langristige Ausbau von Unternemergesteuerten Machtstrukturen')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check8">
            Der langristige Ausbau von Unternemergesteuerten Machtstrukturen
        </label>



        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check9"
            value="Die Erschaffung einer Elite der Mittelschicht"
            @if ($formData['powerstructures'] == 'Die Erschaffung einer Elite der Mittelschicht')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check9">
            Die Erschaffung einer Elite der Mittelschicht
        </label>


        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check10"
            value="Koordinierte Investitionen in die Wirtschaft"
            @if ($formData['powerstructures'] == 'Koordinierte Investitionen in die Wirtschaft')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check10">
            Koordinierte Investitionen in die Wirtschaft
        </label>

        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check11"
            value="Teil der vierten Industriellen Recvolution zu sein und maximal zu partizipieren"
            @if ($formData['powerstructures'] == 'Teil der vierten Industriellen Recvolution zu sein und maximal zu partizipieren')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check11">
            Teil der vierten Industriellen Recvolution zu sein und maximal zu partizipieren
        </label>

        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check12"
            value="Eine tragende Position in Global Leaders"
            @if ($formData['powerstructures'] == 'Eine tragende Position in Global Leaders')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check12">
            Eine tragende Position in Global Leaders
        </label>

        <input
            type="radio"
            name="powerstructures"
            class="btn-check"
            id="check13"
            value="Andere Schreiben sie hier "
            @if ($formData['powerstructures'] == 'Eine tragende Position in Global Leaders')
                checked
            @endif
        >
        <label class="btn btn-lg btn-outline-danger mt-3" for="check13">
            Eine tragende Position in Global Leaders
        </label>


    </div>

    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step8" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
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
<script>$('#portfolio-grid').addClass('step9-height')</script>
@endpush