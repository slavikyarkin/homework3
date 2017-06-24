<?php

 namespace MyClass {
     class User
     {
         public $login;
         public $name;
         public $surname;

         function __construct($login)
         {
             $this->login = $login;
         }
     }
     $admin = new User('admin');
 }
