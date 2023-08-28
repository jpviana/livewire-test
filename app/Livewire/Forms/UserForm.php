<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule('required|min:5')]
    public ?string $name = '';
    #[Rule('required|email')]
    public ?string $email = '';
    #[Rule('required')]
    public ?string $password = '';

    public function save()
    {
        $this->validate();
        User::Create($this->all());
    }
}
