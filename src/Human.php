<?php

class Human 
{
    public function __construct(private string $firstname, private string $lastname,        private string $age, private string $profession)
    {

     }

    public function sayName()
    {
        $this->say("$this->firstname $this->lastname");
    }

   public function sayAge()
    {
        $this->say("$this->age");
    }

   public function sayProfession()
    {
        $this->say("$this->profession");
   }

    private function say(string $input)
    {
         echo "\n $input .";   
    }
} 
