<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiziController extends Controller
{
    
    public function listaServizi()
    {
        /*
         - Con l'aiuto dei Model effettuo una SELECT nel DB
         - Ritorno alla view la pagine HTML e il vettore/oggetto estratto dal DB.
         */
    }

    public function creaServizio()
    {
         /*
          - estraggo dal DB la lista dei Point
          - faccio return view(), con ingresso la pagina con il form html e la lista dei point.
            Alla creazione del servizio posso selezionare a quale point appartiene.
         */
    }

    public function salvaServizio(Request $request)
    {
         /*
          - Al "submit" del FORM html, ricevo la richiesta POST. Posso usare $request per "recuperare" i dati.
          - Valido i dati ricevuti per evitare SQL injection.
          - INSERT nel DB dei dati.
          - restituisco messaggio di successo inserimento.
         */
    }

    public function visualizzaServizio(string $id)
    {
        /*
          - Ottengo l'id del singolo servizio da una richiesta GET.
          - Estraggo dal DB i dati del servizio.
          - Li restituisco alla view.
         */
    }


    public function modificaServizio(string $id)
    {
        /*
          - Ottengo l'id del singolo servizio da una richiesta GET.
          - Estraggo dal DB i dati del servizio.
          - Li restituisco alla view, in modo da poter settare i campi value del FORM
         */
    }

    public function updateServizio(Request $request, string $id)
    {
         /*
          - Al "submit" del FORM html, ricevo la richiesta POST. Posso usare $request per "recuperare" i dati.
          - Valido i dati ricevuti per evitare SQL injection.
          - UPDATE nel DB dei dati usando l'id.
          - restituisco messaggio di successo update.
         */
    }

    public function cancellaServizio(string $id)
    {
        /*
        - Ottengo l'id del singolo servizio da cancellare.
        - DELETE da DB.
        - Mostro la view dell'eliminazione completata con successo.
       */
    }

    public function switchServizio(string $id)
    {
        /*
          -Posso creare dalla view HTML un pulsante che tramite AJAX che va a richiamare questa funzione per attivare/disattivare il servizio numero $id.
          -Controllo dal DB lo stato attuale del servizio.
          -Inverto lo stato.
          -ritorno TRUE.
       */
    }
}
