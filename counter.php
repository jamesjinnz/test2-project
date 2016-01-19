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
            //check the number dividable
            $msg = $this->numberCheck($i);
            //show the result
            $this->displayResult($msg);
        }
    }

    /*
     * check the number dividable
     */
    private function numberCheck($number){
        $result = '';
        if (($number % 3) == 0){
            $result .= 'triple';
        }

        if (($number % 5) == 0){
            $result .= 'five';
        }

        if (!empty($result)){
            $msg = (string) $number. ' '.$result;
        }else{
            $msg = (string) $number;
        }
        return $msg;
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

