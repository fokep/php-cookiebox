<?php
echo '
<div id="cookiePolicy" style="display:none">
  <div class="container">
    FOKEP.no bruker cookies.&nbsp;
    <a id="cookiePolicyAccept" class="btn btn-sm btn-primary ml-2 align-middle">Lukk</a>
    <a class="btn btn-sm btn-primary ml-2 align-middle" data-toggle="modal" href="#exampleModalCenter">Les mer</a>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-dark">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasjonskapsler (cookies)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark text-left">
        Ved å hente informasjon og/eller benytte tjenester på våre nettsider, samtykker du i at det settes informasjonskapsler i din nettleser, i og med at de fleste nettlesere er innstilt slik at de automatisk aksepterer cookies. Dersom du ikke vil akseptere vår bruk av cookies, kan du trekke tilbake ditt samtykke ved å endre innstillingene i nettleseren. Vi gjør imidlertid oppmerksom på at dette kan medføre redusert brukeropplevelse.
        <br>
        <br>
        For å beskytte seg mot sporing på tvers av nettsteder (tracking cookies) anbefaler FOKEP å installere nettlesertillegget&nbsp;<a class="text-primary" href="https://www.eff.org/privacybadger" target="_blank" rel="noopener noreferrer">Privacy Badger</a>&nbsp;dersom din nettleser støtter dette.
        <br>
        <br>
        <h6>Google Analytics</h6>
        Google Analytics er en nettanalysetjeneste som leveres av Google, Inc. ("Google"). Google Analytics bruker cookies for å analysere hvordan brukere benytter nettstedet. Informasjonen som genereres av en slik cookie ved bruk av det aktuelle nettstedet, inkludert din IP-adresse, sendes til Google og lagres på servere i USA.
        <br>
        FOKEP bruker anonymizeIP, en funksjon som gjør at en enkeltbruker ikke kan identifiseres.
        <br>
        Google kan overføre statistikken til tredjeparter hvis dette kreves iht. lov eller i tilfeller hvor tredjeparter behandler informasjonen på vegne av Google.
        <br>
        <br>
        <h6>PHPSESSID</h6>
        Dette er en cookie som lar oss tilpasse sidene ved å huske dine handlinger og valg på sidene.
        <br>
        Bruken medfører ikke at personlig eller identifiserende informasjon blir lagret. Cookien slettes når du lukker nettleseren.
        <br>
        <br>
        <h6>harGodtatt</h6>
        Denne cookien lagrer et "ja/nei"-svar på om du har lukket meldingen om bruk av cookies. Brukes for å avgjøre om meldingen skal vises neste gang du besøker FOKEP.no. Cookien blir lagret i ett (1) år fra ditt første besøk.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Lukk</button>
      </div>
    </div>
  </div>
</div>
';
