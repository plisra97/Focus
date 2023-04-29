<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public $servizi = [
        ['id'=> 1,'name' => 'Wedding', 'price' => 2500, 'img'=> '/media/weddy.jpg' , 'details' => 'Per immortalare al meglio il giorno del sì, è fondamentale catturare ogni dettaglio e imprimerlo per sempre in una foto. Si inizia dalle piccole cose, come i preparativi, la vestizione, fino all’emozione che un semplice sguardo o un abbraccio possono regalare. Sono le emozioni ad accompagnarci per tutto il servizio fotografico.' ],
        ['id'=> 2,'name' => 'New Born', 'price' => 780,'img'=> '/media/newborn.jpg' ,'details' => 'Immortalare momenti che passano così velocemente con la crescita. Immergersi in una realtà magica, fatta di tenerezza e delicatezza, in attesa di un sorriso, una smorfia o solamente il dolce sonno del neonato.'  ],
        ['id'=> 3,'name' => 'Party', 'price' => 1500,'img'=> '/media/party.jpg' ,  'details' => 'I 18 anni sono un momento fondamentale di transizione all’età adulta e quel giorno merita un’attenzione speciale affinchè i ricordi si conservino vividi nel tempo.'  ], 
        
    ];
    public function index()  {
    
    return view('servizi', ['servizi'=> $this->servizi]);
    }

    public function show($id) {
   
        foreach($this->servizi as $servizio){
            if($id == $servizio['id']){
                return view('dettaglio-servizio', ['servizio' => $servizio]);
            }
        
        }
    
    
    }


}
