# LARAVEL Ads

### Milestone 1

Per prima cosa dovrai creare un nuovo progetto Laravel e aggiungere due rotte.
Il layout, sarà identico, ma servirà poi per testare due diversi modi per conservare l'informazione che ti permetterà di capire se l'utente ha già visitato la pagina.
Preparare la finestra modale in Vue affinché si visualizzi solo se una data condizione si verifica, in questa prima fase questa condizione sarà fissata manualmente.

### Milestone 2

Nella seconda rotta gestirai l'informazione di visita effettuata con i cookies**.
In questo caso studia la documentazione dei cookies**
[https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/API/cookies](https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/API/cookies)

Una volta salvati i cookies **dovrai recuperare questa informazione** per gestire la visualizzazione della modale preparata in Vue.

### Milestone 3

Nella prima rotta gestirai l'informazione di visita effettuata con le **sessions.
Studia la documentazione sul sito di Laravel**
[https://laravel.com/docs/7.x/session](https://laravel.com/docs/7.x/session)
Come configurazione base Laravel conserva le sessioni nei file in `storage/framework/sessions`

Una volta salvata la sessione **dovrai recuperare questa informazione** per gestire la visualizzazione della modale preparata in Vue.
