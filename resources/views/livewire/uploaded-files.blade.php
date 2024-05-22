<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        @if ($this->files->count())
        <div class="space-y-2">
            @foreach ($this->files as $file)
            <livewire:uploaded-file-item
                :file="$file"
                wire:key="{{ $file->id }}"
            />
            <!-- <hr /> -->
            @endforeach
        </div>
        {{ $this->files->links() }}
        @endif
    </div>
</div>
