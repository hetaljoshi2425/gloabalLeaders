<form method="POST" action="/contact-form/final" autocomplete="off">
    @csrf
    <h6>
        Während die Gebühr von Global L Leader für die Erstellung Ihres maßgeschneiderten Plans
        je nach Größe Ihres Unternehmens und Anzahl der beteiligten Parteien variieren kann, verrechnen wir eine
        Standardgebühr von 25.000 EUR. Sofern ihr Antrag genehmigt wird, werden wir alle Ihre Bedürfnisse in einem
        Erstkontakt besprechen, um sicherzustellen, dass wir Sie umfassend unterstützen können, und wenn dies der
        Fall ist, wird diese Pauschalgebühr vor unserer Zusammenarbeit angefordert. Sind Sie mit dieser Gebühr
        einverstanden und fortzufahren, wenn wir bestätigen, dass wir Sie unterstützen können?
    </h6>
    <div class="row">
            <input
                type="radio"
                name="agreement"
                class="btn-check"
                id="check1"
                value="Ja, ich bin mit der Gebühr einverstanden und bereit, fortzufahren"
            >
            <label class="btn btn-lg btn-outline-danger" for="check1">
                Ja, ich bin mit der Gebühr einverstanden und bereit, fortzufahren
            </label>

            <input
                type="radio"
                name="agreement"
                class="btn-check"
                id="check2"
                value="Ich bin mit der Gebühr einverstanden, aber ich kann möglicherweise nicht sofort fortfahren"
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="check2">
                Ich bin mit der Gebühr einverstanden, aber ich kann möglicherweise nicht sofort fortfahren
            </label>

            <input
                type="radio"
                name="agreement"
                class="btn-check"
                id="check3"
                value="Nein, ich bin nicht bereit, in Ihre Dienste zu investieren"
            >
            <label class="btn btn-lg btn-outline-danger mt-3" for="check3">
                Nein, ich bin nicht bereit, in Ihre Dienste zu investieren
            </label>
    </div>
    <div class="row justify-content-between mt-5">
        <a href="/contact-form/step9" class="col-sm-2 col-6 btn btn-lg btn-outline-danger">
            <i class="fa-solid fa-circle-arrow-left"></i>
            Zurück
        </a>
        <div class="col-sm-4 col-6 text-right">
            <button type="submit" class="btn btn-lg btn-danger">
                Senden
                <i class="fas fa-check-circle"></i>
            </button>
        </div>
    </div>
</form>
@push('scripts')
<script>$('#portfolio-grid').addClass('step8-height')</script>
@endpush