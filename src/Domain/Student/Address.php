<?php

namespace Alura\Calisthenics\Domain\Student;

class Address
{
    public function __construct(
            private string $street, 
            private string $number, 
            private string $province, 
            private string $city, 
            private string $state, 
            private string $country
        )
    {
        $this->street = $street;
        $this->number = $number;
        $this->province = $province;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
}