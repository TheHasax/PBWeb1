<?php
/**
 * Description of City
 *
 * @author nml
 */
class City {
    private $id;
    private $name;
    private $countrycode;
    private $district;
    private $population;
    
    public function __construct($id, $name, $countrycode,
                                $district, $population) {
        $this->id = $id;
        $this->name = $name;
        $this->district = $district;
        $this->countrycode = $countrycode;
        $this->population = $population;
    }
    
    public function getCountrycode() {
        return $this->countrycode;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getPopulation() {
        return $this->population;
    }
    
    public function __toString() {
        $s = sprintf("%s: %s %d", $this->getCountrycode(),
                                  $this->getName(),
                                  $this->getPopulation());
        return $s;
    }
}