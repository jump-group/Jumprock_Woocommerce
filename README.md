# jumprock-woocommerce

La repository comprende:
- tutti i plugin fondamentali per il funzionamento di Woocommerce sulla stack di sviluppo;
- plugin aggiuntivi per estendere le funzionalità di woocommerce;
- funzionalità di marketing aggiuntive che coinvolgono il flusso di acquisto e la scheda prodotto;

---
## Utilizzo

Da terminale posizionarsi nella cartella del progetto su cui si vuole installare il plugin e digitare il seguente comando:

```
composer require jumprock_packages/jumprock-woocommerce
```

---

## Development

Da terminale posizionarsi nella cartella di uno dei progetti di test della seguente repository e digitare il seguente comando:

```
composer require "jumprock_packages/jumprock-woocommerce @dev"
```

Questo permetterà di installare la versione di sviluppo del plugin e di poterlo modificare in locale in quanto il plugin è installato come symlink.

Assicurarsi che all'interno del file `composer.json` del progetto di test sia presente la repository di tipo `path` che punta alla cartella del plugin, subito dopo la repository di tipo `composer` che puntano a packagist.

```
"repositories": [
    ...,
    {
        "type": "path",
        "url": "../../../../Jumprock_Woocommerce",
        "options": {
            "symlink": true
        }
    },
    ...
]
```

---
## Cartella SRC [WIP]

### **AddOptionPage.php**
Questa classe "AddOptionPage" nel namespace "JumpGroup\Woocommerce" definisce il metodo statico "init". Quando viene chiamato, registra un hook di azione "init" di WordPress e associa una funzione anonima ad esso.

Durante l'inizializzazione di WordPress, la funzione anonima viene eseguita. Controlla se la funzione "acf_add_options_page" esiste, che fa parte della libreria Advanced Custom Fields (ACF). Se la funzione esiste, viene aggiunta una pagina di opzioni utilizzando ACF.

La pagina di opzioni viene chiamata `"Configurazioni elementi Woocommerce"` avente come slug `woocommerce-elements-config`. 

### **AddWhatsappButton.php** 
La classe `AddWhatsappButton` fornisce un metodo per aggiungere un pulsante WhatsApp personalizzato nella scheda di un prodotto Woocommerce.

#### Utilizzo
1. Assicurarsi che il plugin Advanced Custom Fields (ACF) sia installato e attivato.
2. Inizializza la funzionalità chiamando il metodo `init()` della classe `AddWhatsappButton`

#### Shortcode
La classe fornisce uno shortcode `jump_whatsapp_button` che può essere utilizzato per visualizzare il pulsant di whatsapp nella scheda prodotto.

#### Metodi
**init()** Il metodo init() viene chiamato all'avvio del plugin e registra l'azione acf/init e lo shortcode `[jump_whatsapp_button]` per gestire il pulsante WhatsApp.

**whatsapp_button_shortcode()** Il metodo `whatsapp_button_shortcode` viene richiamato quando  viene utilizzato lo shortcode `jump_whatsapp_button` all'interno del contenuto di un prodotto. Questo metodo recupera alcuni valori dai campi personalizzati di ACF (`wts_phone`, `wts_link_text`, `wts_btn_text`, `wts_image`) e li utilizza per costruire il codice del pulsante.

Il pulsante di WhatsApp viene costruito solo se il numero di telefono,l'immagine e il nome del prodotto sono disponibili. Il codice HTML del pulsante viene restituito come risultato del metodo.

**createAcf()** Il metodo `createAcf` definisce un gruppo di campi personalizzati utilizzando la libreria ACF. Il gruppo di campi viene aggiunto solo se la funzione `acf_add_local_field_group` è disponibile. I campi personalizzati definiti includono il numero di telefono, il testo del link, il testo del pulsante e l'immagine. Questi campi sono configurabili nella pagina opzioni **Configurazioni elementi Woocommerce** creata dal file `AddOptionPage.php`

#### Stile
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

La classe `AddProductAvailability` è responsabile per l'aggiunta di un shortcode e l'integrazione di Advanced Custom Fields (ACF) per visualizzare la disponibilità dei prodotti su un sito WooCommerce.

#### Utilizzo
1. Includi il file della classe `AddProductAvailability` nel tuo progetto.
2. Inizializza la funzionalità chiamando il metodo `init()` della classe `AddProductAvailability`.

#### Shortcode
La classe fornisce uno shortcode `jump_product_availability_box` che può essere utilizzato per visualizzare la disponibilità dei prodotti su un elemento Box.

#### Metodi
**init()** Questo metodo inizializza la funzionalità agganciandosi alle azioni necessarie di WordPress.

**product_availability_box_shortcode()** Questo metodo genera l'output HTML per visualizzare il box di disponibilità del prodotto. Recupera il testo del box di disponibilità dalla pagina delle opzioni di ACF. Se il testo è presente, genera l'HTML del box di disponibilità.

**createAcf()** Questo metodo crea il gruppo di campi ACF necessario. Registra il campo "text" come campo di testo. I parametri vengono configurati nella pagina delle opzioni `woocommerce-elements-config`.

#### Stile
Lo stile del box deve essere inserito all'interno del foglio di stile del tema child del sito dove si utilizza il mu-plugin.
Di seguito uno stile css di default applicabile al pulsante.

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

### **AddProductTags**
La classe `AddProductTags` si occupa di aggiungere uno shortcode e integrare Advanced Custom Fields (ACF) per visualizzare i tag dei prodotti su un sito WooCommerce.

#### Utilizzo
1. Includere il file della classe `AddProductTags` nel progetto.
2. Inizializzare la funzionalità chiamando il metodo `init()` della classe `AddProductTags`.

#### Shortcode
La classe fornisce uno shortcode `[jump_product_tags]` che può essere utilizzato per visualizzare i tag dei prodotti sul front-end.

#### Metodi
**init()** Questo metodo inizializza la funzionalità agganciandosi alle azioni necessarie di WordPress.

**product_tags_shortcode()** Questo metodo genera l'output HTML per visualizzare i tag dei prodotti. Recupera i tag dei prodotti associati al post corrente e verifica il valore del campo `tag_has_link` dalla pagina delle opzioni di ACF. In base al valore, genera l'HTML appropriato per ciascun tag. 
Se il valore di `tag_has_link` è `yes` allora i tag nella scheda prodotto saranno cliccabili e riporteranno alla pagina di archivio dei tag.

**createAcfOptionPage()** Questo metodo crea il gruppo di campi ACF necessario. Registra il campo `tag_has_link` come un pulsante radio con le opzioni `Yes` e `No`. Il valore predefinito è impostato su `Yes`. Il gruppo di campi è configurabile alla pagina delle opzioni `woocommerce-elements-config`.

**createAcfProductTagPage()** Questo metodo aggiunge un ACF di tipo immagine in ogni tag di prodotto. Registra il campo `tag_image`. In base al valore, nell'HTML del tag si vedrà o meno l'immagine.
E' necessario caricare un file svg di 23x23px

#### Stile
Lo stile dei tag deve essere inserito all'interno del foglio di stile del tema child del sito dove si utilizza il mu-plugin.
Di seguito uno stile css di default applicabile.

```
.TagWrapper {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 1rem;
}

.TagWrapper__Image {
    font-family: "Acre", Sans-serif;
    display: inline-block;
    margin-bottom: -0.5rem;
    margin-right: 0.3rem;
    height: 42px;
    /* position: relative;
    flex: 0 0 13rem; */
    padding-right: 0rem;
    font-weight: 600;
}

.TagWrapper__Image img {
    display: inline-block;
    width: 40px;
    height: auto;
    object-fit: cover;
    padding: 4px 4px 4px 0px;
    border-radius: 50%;
}

.TagWrapper__Image::after {
    content: attr(data-title);
    font-size: 0.8em;
    padding: 2.5px 10px;
    background: #FFEEE4;
    color: #EC7556;
    border: 1px solid #FFEEE4;
    border-radius: 32px;
    text-align: left;
    /* position: absolute;
    top: 9px;
    left: 25px;
    z-index: -1; */
    padding: 8px 24px;
}
```

#### Future migliorie
- Possibilità di inserire un immagine esplicativa del tag