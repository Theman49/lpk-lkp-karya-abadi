<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $bg;
    public $text;

    public function render()
    {
        return view('livewire.button', [
            'bg' => $this->bg,
            'text' => $this->text,
        ]);
    }
}
