# jumprock-woocommerce

La repository comprende:
- tutti i plugin fondamentali per il funzionamento di Woocommerce sulla stack di sviluppo;
- plugin aggiuntivi per estendere le funzionalità;
- funzionalità di marketing aggiuntive che coinvolgono il flusso di acquisto;

---------------
## Cartella SRC [WIP]

### **AddOptionPage.php**
Questa classe "AddOptionPage" nel namespace "JumpGroup\Woocommerce" definisce il metodo statico "init". Quando viene chiamato, registra un hook di azione "init" di WordPress e associa una funzione anonima ad esso.

Durante l'inizializzazione di WordPress, la funzione anonima viene eseguita. Controlla se la funzione "acf_add_options_page" esiste, che fa parte della libreria Advanced Custom Fields (ACF). Se la funzione esiste, viene aggiunta una pagina di opzioni utilizzando ACF.

La pagina di opzioni viene chiamata `"Configurazioni elementi Woocommerce"` avente come slug `woocommerce-elements-config`. 

### **AddWhatsappButton.php** 
Questo codice PHP definisce una classe chiamata `AddWhatsappButton` nel namespace "JumpGroup\Woocommerce". La classe contiene due metodi statici: "init" e "whatsapp_button_shortcode".

Il metodo "init" viene chiamato all'avvio del plugin e registra due hook di azione. 

Il primo hook, `acf/init`, collega il metodo "createAcf" alla creazione dei campi personalizzati di ACF. Il secondo hook, `add_shortcode`, collega il metodo `whatsapp_button_shortcode` alla creazione di uno shortcode personalizzato chiamato `jump_whatsapp_button`.

Il metodo `whatsapp_button_shortcode` viene richiamato quando viene utilizzato lo shortcode `jump_whatsapp_button` all'interno del contenuto di un prodotto. Questo metodo recupera alcuni valori dai campi personalizzati di ACF (`wts_phone`, `wts_link_text`, `wts_btn_text`, `wts_image`) e li utilizza per costruire il codice del pulsante.

Il pulsante di WhatsApp viene costruito solo se il numero di telefono,l'immagine e il nome del prodotto sono disponibili. Il codice HTML del pulsante viene restituito come risultato del metodo.

Il metodo "createAcf" definisce un gruppo di campi personalizzati utilizzando la libreria ACF. Il gruppo di campi viene aggiunto solo se la funzione "acf_add_local_field_group" è disponibile. I campi personalizzati definiti includono il numero di telefono, il testo del link, il testo del pulsante e l'immagine. Questi campi sono configurabili nella pagina opzioni **Configurazioni elementi Woocommerce** creata dal file `AddOptionPage.php`

Lo stile del pulsante deve essere inserito all'interno del foglio di stile del tema child del sito dove si utilizza il mu-plugin.
Di seguito uno stile css di default applicabile al pulsante
```
.Whatsapp {
    display: flex;
    flex-direction: row;
    align-content: center;
    align-items: center;
    justify-content: center;
}

.Whatsapp__Btn {
    color: #575A5C !important;
    background: transparent;
    padding: 20px;
    font-weight: bold;
    font-size: 18px;
    padding: 15px 25px 15px 35px;
    font-family: "Acre", Sans-serif;
}

.Whatsapp__Btn:hover {
    color: #575A5C !important;
}

.Whatsapp__Avatar {
    margin-right: -1.5rem;
    z-index: 1;
}

.Whatsapp__Avatar img {
    height: 18px;
    width: 18px;
}
```

### **AddProductAvailability**
La classe AddProductAvailability definisce un metodo statico "init" che inizializza la gestione della disponibilità del prodotto.
Il metodo init registra due hook di azione: "acf/init" e "add_shortcode".
Il primo hook collega il metodo "createAcf" alla creazione dei campi personalizzati di Advanced Custom Fields (ACF).
Il secondo hook collega il metodo `product_availability_box_shortcode` alla creazione di uno shortcode personalizzato chiamato `jump_product_availability_box`.

Il metodo `product_availability_box_shortcode` viene richiamato quando viene utilizzato lo shortcode `jump_product_availability_box`.
Recupera il testo del box di disponibilità da ACF, posizionato nella pagina opzioni **Configurazioni elementi Woocommerce** creata dal file `AddOptionPage.php`.
Il codice HTML del box di disponibilità viene restituito come risultato del metodo.

Il metodo createAcf viene richiamato durante l'inizializzazione di ACF.
Utilizzando la funzione `acf_add_local_field_group`, viene creato un gruppo di campi per il box di disponibilità del prodotto, che comprende il testo da mostrare.

Lo stile del box deve essere inserito all'interno del foglio di stile del tema child del sito dove si utilizza il mu-plugin.
Di seguito uno stile css di default applicabile al pulsante

```
.BoxProductAvailability {
    margin-top: 1rem; 
    margin-bottom: 1rem; 
    margin-left: 13rem;
    display: flex;
    gap: 1rem;
}
```

---------------