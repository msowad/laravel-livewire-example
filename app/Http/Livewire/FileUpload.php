<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FileUpload extends Component
{
    public $photo;

    public function render()
    {
        return view('livewire.file-upload');
    }
}
