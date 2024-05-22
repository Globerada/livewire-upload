<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-b">
    <div class="p-6 text-gray-900 space-y-4">
        <!-- User and Timestamp -->
        <div class="text-sm text-gray-500">
            {{ $file->user->name }} uploaded at
            {{ $file->created_at->format('Y-m-d H:i:s') }}
        </div>
        <!-- Uploaded Image and URL Input with Copy Button -->
        <div class="flex items-center mt-4">
            <!-- Uploaded Image -->
            <img
                src="{{ url(Storage::url($file->file_path)) }}"
                alt="Uploaded Image"
                class="w-32 h-32 object-cover mr-4"
            />
            <!-- URL Input and Copy Button -->
            <div class="flex-1 ml-3 flex">
                <input
                    type="text"
                    onclick="this.select();"
                    value="{{ url(Storage::url($file->file_path)) }}"
                    class="flex-1 p-2 border text-gray-900 rounded-l-md"
                    readonly
                    id="file-url-{{ $file->id }}"
                />
                <button
                    class="p-2 bg-gray-800 text-white rounded-r-md"
                    onclick="copyToClipboard('file-url-{{ $file->id }}')"
                >
                    Copy
                </button>
            </div>
        </div>
        @can('delete', $file)
        <div class="mt-4">
            <button
                x-data
                x-on:click="if (confirm('Are you sure?')) $wire.$parent.delete({{ $file->id }})"
                class="p-2 bg-red-500 text-white rounded-md"
            >
                Delete
            </button>
        </div>
        @endcan
    </div>
</div>

<script>
    function copyToClipboard(elementId) {
        var copyText = document.getElementById(elementId);
        copyText.select();
        document.execCommand("copy");
        alert("Copied! " + copyText.value);
    }
</script>
