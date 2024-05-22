<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class UploadedFiles extends Component
{
    use WithPagination;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function getFilesProperty()
    {
        return File::with('user')->latest()->paginate(5);
    }

    public function download(int $id)
    {
        return Storage::download(File::findOrFail($id)->file_path);
    }

    public function delete(int $id)
    {
        $file = File::findOrFail($id);

        $this->authorize('delete', $file);

        Storage::delete($file->file_path);

        $file->delete();
    }

    public function render()
    {
        return view('livewire.uploaded-files');
    }
}
