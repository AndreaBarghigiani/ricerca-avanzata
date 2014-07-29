<?php

/* 
 * Voglio creare un plugin che mi permetta di cercare gli autori all'interno di un qualsiasi blog e 
 * desidero successivamente inte grarlo all-interno del Framework WP Advanced Search
 * 
 * @author Andrea Barghigiani
 * @link 
 * @version 1.2
 * @license MIT
 */

if (!class_exists('Adv_User_Search')) {
    class Adv_User_Search{
        /**
         * @var array Creo l'array che mi permettera' di eseguire la ricerca 
         */
        private $usr_query;
        private $the_form; //qst variabile contiene l'output html per il modulo
        private $form_args = array(); //Gli argomenti che si possono impostare in un modulo
        
        /**
         * Il costruttore mi serve per inizializzare i valori per i quali devo creare 
         * il campo di ricerca.
         */
        public function __construct( $args = '' ) {
            if( !empty( $args ) ){
                
                $this->process_args($args);
                
            }
        }
        
        /**
         * Funzione privata che mi consente di creare il codice HTML per 
         * mostrare il modulo di ricerca
         */
        private function build_form(){
            
        }
        
        
        /**
         * Mostro il campo di ricerca con tutto gia' fatto
         * E' un metodo di aiuto
         */
        public function the_form(){
            // $the_form viene creato dalla funzioen build form
            echo $this->the_form;
        }
        
    }
}