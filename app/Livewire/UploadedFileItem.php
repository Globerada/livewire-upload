<?php

namespace App\Livewire;

use App\Models\File;
use Livewire\Component;

class UploadedFileItem extends Component
{
    public File $file;

    public function render()
    {
        return view('livewire.uploaded-file-item');
    }
}
