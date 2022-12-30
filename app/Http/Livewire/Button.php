<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $bg;
    public $text;
    public $icon = "launch";
    public $iconStyle = "material-icons-outlined";
    public $to = "#";
    public $target;

    public function render()
    {
        return view('livewire.button', [
            'bg' => $this->bg,
            'text' => $this->text,
            'icon' => $this->icon,
            'iconStyle' => $this->iconStyle,
            'to' => $this->to,
            'target' => $this->target,
        ]);
    }
}
