<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthForm extends Form
{
    #[Validate('required | string | min:5')]
    public $username = '';

    #[Validate('required | email | unique:users | max:255')]
    public $email = '';

    #[Validate('required | password | min:8 | confirmed ')]
    public $password = '';
    

}
