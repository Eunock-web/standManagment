<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\AuthForm;
use Livewire\Component;
use App\Models\User;

class AdminAuth extends Component
{
    
    public AuthForm $form;

    public function loginAdmin(){
        $this->validate();

        User::create(
            $this->form->all()
        );
    }

    public function render()
    {
        return view('livewire.auth.admin-auth');
    }
}
