<?php
/**
 * Description of Country from the world database
 *
 * @author nml
 */
class Country {
    private $code;
    private $name;
    private $continent;
    private $region;
    private $surfacearea;
    private $indepyear;
    private $population;
    private $lifeexpectancy;
    private $gnp;
    private $governmentform;
    private $headofstate;
    private $capital;   // a city object
    private $code2;
    
    public function __construct($code, 
                                $name, 
                                $continent, 
                                $region,
                                $population,
                                $headofstate,
                                $governmentform,
                                $capital
                                ) {
        $this->code = $code;
        $this->name = $name;
        $this->continent = $continent;
        $this->region = $region;
        $this->population = $population;
        $this->governmentform = $governmentform;
        $this->headofstate = $headofstate;
        $this->capital = $capital;
    }
    
    public function __toString() {
        $s = sprintf("<p>%s: %s (%s), %d", $this->getCode(), 
                                     $this->getName(), 
                                     $this->getContinent(), 
                                     $this->getPopulation());
        if($this->capital != null) {
            $s .= sprintf(", %s %d", $this->capital->getName(),
                                  $this->capital->getPopulation());
        }
        $s .= "</p><n";
        return $s;
    }
    
    public function getCode() { 
        return $this->code;
    }
    
    public function getName() { 
        return $this->name;
    }
    
    public function getContinent() { 
        return $this->continent;
    }
    
    public function getPopulation() { 
        return $this->population;
    }
}