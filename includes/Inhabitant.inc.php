<?php
/**
 * Description of Inhabitant
 *
 * @author nml
 */
class Inhabitant {
    private $ssn;
    private $firstname;
    private $surname;
    private $zipcode;
    private $country;
    private $taxpct;
    
    public function __construct($ssn, $firstname, $surname
                              , $zipcode, $country, $taxpct) {
        $this->ssn = $ssn;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->taxpct = $taxpct;
    }
    
    public function getSsn() {
        return $this->ssn;
    }
    
    public function getTaxPct() {
        return $this->taxpct;
    }
    
    public function setTaxPct($tax) {
        $this->taxpct = $tax;
    }
    
    public function __toString() {
        return sprintf("<td>%s</td><td>%s</td><td>%s</td>"
                . "<td>%s</td><td>%s</td><td>%s</td>\n"
                , $this->getSsn(), $this->firstname, $this->surname
                , $this->zipcode, $this->country->getName(), $this->getTaxPct());
    }
}