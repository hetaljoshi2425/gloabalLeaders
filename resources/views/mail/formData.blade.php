<h1>Form Data</h1>
<p>
    <strong>Ihr Vorname?</strong>
    {{ $data['firstName'] }}
</p>
<p>
    <strong>Ihr Nachname?</strong>
    {{ $data['lastName'] }}
</p>
<p>
    <strong>Ihre Email?</strong>
    {{ $data['email'] }}
</p>
<p>
    <strong>Ihre Telefonnummer?</strong>
    {{ $data['phone'] }}
</p>
<p>
    <strong>Wie alt sind Sie?</strong>
    {{ $data['age'] }}
</p>
<p>
    <strong>Ihre Staatsangehörigkeit</strong>
    {{ $data['country'] }}
</p>
<p>
    <strong>Haben Sie Strafregister Einträge?</strong>
    {{ $data['criminalRecord'] }}
</p>
<p>
    <strong>Was beschreibt Sie und/oder Ihr Unternehmen am besten?</strong>
    {{ $data['description'] }}
</p>
<p>
    <strong>Haben Sie derzeit einen zweiten Pass oder Wohnsitz, eine Offshore-Gesellschaft ODER Offshore-Investitionen?</strong>
    {{ $data['secondPass'] ? 'Ja' : 'Nein' }}
</p>
<p>
    <strong>Wie sieht Ihre aktuelle Struktur aus?</strong>
    {{ $data['currentStructure'] }}
</p>
<p>
    <strong>Leben Sie die meiste Zeit im Ausland oder in einem anderen Land oder in anderen Ländern?</strong>
    {{ $data['liveAbroad'] }}
</p>
<p>
    <strong>SCHLUSSFOLGERUNG:</strong>
    {{ $data['conclusion'] }}
</p>
<p>
    <strong>Wie lange haben Sie damit verbracht, über die Entwicklung einer Offshore-Strategie nachzudenken</strong>
    {{ $data['offshore'] }}
</p>
<p>
    <strong>Was ist der wahre Grund, warum Sie Ihre noch nicht erreicht haben und warum haben Sie sich entschieden, es jetzt zu tun?</strong>
    {{ $data['reason'] }}
</p>
<p>
    <strong>Was beschreibt am besten Ihre aktuelle Situation, in der Sie Hilfe suchen?</strong>
    {{ $data['currentSituation'] }}
</p>
<p>
    <strong>SCHLUSSFOLGERUNG: Sich zu den Global  Leaders zu zählen, setz für Menschen wie
Sie voraus Ihre Strukturen zu optimieren und in ein Netzwerk einzutreten das Machtstrukturen fördert. Welchen Wert möchten Sie aus dem Global Leaders Forum schöpfen?</strong>
    {{ $data['powerstructures'] }}
</p>
<p>
    <strong>Vereinbarung</strong>
    {{ $data['agreement'] }}
</p>