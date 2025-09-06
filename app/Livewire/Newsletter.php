<?php

namespace App\Livewire;

use Livewire\Component;

class newsletter extends Component
{
    public string $name = '';
    public string $email = '';
    public string $successMessage;

    protected $rules = [
        'name'  => 'required|min:3',
        'email' => [
            'required',
            'email',
            'regex:/^[\w\.-]+@(gmail\.com|yahoo\.com)$/',
        ]

    ];

   protected $messages = [
    'name.required'  => 'Please enter your name.',
    'name.min'       => 'Name must be at least 3 characters.',
    'email.required' => 'Please enter your email.',
    'email.email'    => 'Enter a valid email address.',
    'email.regex'    => 'Must end with @gmail.com or @yahoo.com',
];

    // Real-time validation as the user types
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function subscribe()
    {
        $this->validate();
        $this->reset(['name', 'email']);
        $this->clearValidation();
        $this->successMessage = 'You have successfully subscribed!';
        $this->dispatch('clear-message');

    }

    public function render()
    {
        return view('livewire.newsletter');
    }
}
