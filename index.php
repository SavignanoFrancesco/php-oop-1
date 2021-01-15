<?php

//inizializzazione oggetto
class Movie{
    //variabili necessarie alla creazione della istanza
    public $title;
    public $year;
    public $type;

    //variabili settabili dopo la creazione dell'istanza
    public $country = '';
    public $plot = '';
    public $genres = [];

    //costruttore con le variabili necessarie alla creazione dell'istanza
    function __construct($_title, $_year, $_type){
        $this->title = $_title;
        $this->year = $_year;
        $this->type = $_type;
    }

    //metodo per stampare le informazioni del film
    public function getInfo(){
        $info = [
            'title' => $this->title,
            'year' => $this->year,
            'type' => $this->type,
            'country' => $this->country,
            'plot' => $this->plot,
            'genres' => $this->genres,
        ];
        foreach ($info as $info_key => $info_value) {
            if ($info_key == 'genres') {
                echo '<p>'.$info_key.': ';
                foreach ($info_value as $genre_key => $genre_value) {
                    echo $genre_value.' ';
                }
                echo '</p>';
            }else{
                echo '<p>'.$info_key.': '.$info_value.'<p>';
            }
        }
    }
}

//creo una nuova istanza della classe Movie
$the_truman_show = new Movie('The Truman Show', 1998, 'Film');
//var_dump($the_truman_show);

$the_truman_show->getInfo();

?>
