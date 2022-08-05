<?php

namespace App;

class Registration
{
   use MyRegister;

}
$register = new Registration();
echo $register->register();
