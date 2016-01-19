<?php

class Counter {
    private $debug = false;

    /**
     * Load function which used
     */
    public function load(){
        if (!$this->debug){
            error_reporting(0);
        }else{
            error_reporting(1);
        }
        // generate number from start to end
      $this->generterNumber(1,100);
    }

    /**
     * Generate number from start to end
     * @param $start
     * @param $end
     */
    private function generterNumber($start,$end){
        for($i= $start; $i < $end+1; $i++){
            //show the result
            $this->displayResult($i);
        }
    }

    /**
     * Display the result
     * @param $msg
     */
    private function displayResult($msg){
        printf($msg."\n");
    }
}

//Load the counter function
$counter = new Counter;
$counter->load();

