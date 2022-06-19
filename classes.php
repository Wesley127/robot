<?php
class robot {
    // Properties
    public $name;
    public $leven = 100;
    public $gewonnen = 0;

    // Methods
    function __construct($name){
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_leven($leven) {
        if ($leven < 0){
            $this->leven = 0;
        } else{
            $this->leven = $leven;
        }
    }
    function get_leven() {
        return $this->leven;
    }
    function report(){
        echo "Naam: " . $this->get_name();
        echo "<br>";
        echo "leven: " .  $this->get_leven();
        echo "<br><br>";
    }
    function attack($enemy){
        
        if ($this->gewonnen == 0) {

            $leven_over = $this->get_leven();

            if ($leven_over > 0){

                $damage= (rand(1,100));
                $newleven= $enemy->get_leven()-$damage;
                $enemy->set_leven($newleven);
                echo "<br>";
                echo $this->name. " geeft " .$damage. " damage op " .$enemy->get_name();
                echo "<br>";
                $enemy->report();
                
                if ($newleven < 0){
                    $this->gewonnen = 1;
                    echo $this->name. " heeft gewonnen!";
                    echo "<br>";
                }
            }
        }
    }
}
?>