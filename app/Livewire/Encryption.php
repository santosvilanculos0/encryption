<?php

namespace App\Livewire;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Encryption extends Component
{
    #[Validate(['required', 'string'], as: 'entrada')]
    public ?string $input = null;

    public ?string $output = null;

    public function encrypt(): void
    {
        $this->validate();

        $this->output = Crypt::encryptString($this->input);
    }

    public function decrypt(): void
    {
        $this->validate();

        try {
            $this->output = Crypt::decryptString($this->input);
        } catch (DecryptException $exception) {
            throw ValidationException::withMessages(['input' => 'Entrada inválida.']);
        }
    }

    public function render(): View
    {
        return view('livewire.encryption');
    }
}
