<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;


class CreateUser extends Component
{

    public UserForm $form;

    public $users = [];

    #[Computed]
    public function usuarios()
    {
        return $this->users = User::all();
    }

    public function mount()
    {
        //$this->users = User::all();
    }

    public function save()
    {
        $this->form->save();

        $this->dispatch('user-created');
    }

    public function add()
    {
        $this->validate();
        $this->users[] = $this->form->all();
    }

    public function render()
    {
        return view('livewire.create-user')->with('autor',  Auth::user()->name);
    }
}
