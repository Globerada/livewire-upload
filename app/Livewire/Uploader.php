<?php

namespace App\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class Uploader extends Component
{
    use WithFileUploads;

    // #[Validate(['files.*' => 'image|max:1024'], attribute: [
    //     'files.*' => 'file',
    // ])]
    public $files = [];
    public $allowedFileTypes;
    public $maxFileSize;

    public function updatedFiles()
    {
        $this->validate();

        collect($this->files)->each(function ($file) {

            File::create([
                'file_name' => $name = $file->getClientOriginalName(),
                'file_path' => $filePath = $file->storePublicly('images', 'public'),
                'user_id' => auth()->id(),
            ]);

            Image::load(storage_path('app/public/' . $filePath))
                // ->width(200)
                // ->height(200)
                ->optimize()
                ->save();
        });

        $this->dispatch('refresh')->to('uploaded-files');
    }
    protected function validationAttributes()
    {
        return [
            'files.*' => 'files'
        ];
    }

    protected function rules()
    {
        return [
            'files.*' => 'mimes:' . config('filesystems.upload.allowed_file_types') . '|max:' . config('filesystems.upload.max_file_size'),
        ];
    }

    public function mount()
    {
        $this->allowedFileTypes = $this->formatAllowedFileTypes();
        $this->maxFileSize = $this->formatMaxFileSize();
    }

    public function render()
    {
        return view('livewire.uploader');
    }

    private function formatAllowedFileTypes()
    {
        return collect(explode(',', config('filesystems.upload.allowed_file_types')))
            ->map(fn ($type) => strtoupper($type))
            ->implode(', ');
    }

    private function formatMaxFileSize()
    {
        return config('filesystems.upload.max_file_size') / 1024 . ' MB';
    }
}
