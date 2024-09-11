<?php

use Illuminate\Support\Str;
use Livewire\Volt\Component;

new class extends Component
{
    public string $tokenName = '';
    public ?string $plainTextToken = null;
    public $tokens = [];

    public function mount()
    {
        $this->refreshTokens();
    }

    public function refreshTokens()
    {
        $this->tokens = auth()->user()->tokens;
    }

    public function createToken()
    {
        $this->validate([
            'tokenName' => 'required|string|max:255',
        ]);

        $token = auth()->user()->createToken($this->tokenName);
        $this->plainTextToken = $token->plainTextToken;
        $this->tokenName = '';
        $this->refreshTokens();
    }

    public function deleteToken($tokenId)
    {
        auth()->user()->tokens()->where('id', $tokenId)->delete();
        $this->refreshTokens();
    }
}; ?>

<div>
    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('API Tokens') }}
    </h3>

    <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
        <p>
            {{ __('API tokens allow third-party services to authenticate with our application on your behalf.') }}
        </p>
    </div>

    <form wire:submit.prevent="createToken" class="mt-5 space-y-6">
        <div>
            <x-input-label for="tokenName" :value="__('Token Name')" />
            <x-text-input wire:model.live="tokenName" id="tokenName" type="text" class="mt-1 block w-full" placeholder="{{ __('Token Name') }}" />
            <x-input-error :messages="$errors->get('tokenName')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create Token') }}</x-primary-button>
        </div>
    </form>

    @if ($plainTextToken)
        <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-700 rounded">
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Please copy your new API token. For your security, it won\'t be shown again.') }}</p>
            <div class="mt-2 break-all">
                <x-input-label for="plain-text-token" :value="__('API Token')" />
                <x-text-input id="plain-text-token" type="text" class="mt-1 block w-full" :value="$plainTextToken" readonly />
            </div>
        </div>
    @endif

    @if (count($tokens) > 0)
        <div class="mt-6">
            <h4 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Manage API Tokens') }}
            </h4>

            <div class="mt-4 space-y-6">
                @foreach ($tokens as $token)
                    <div class="flex items-center justify-between">
                        <div>
                            {{ $token->name }}
                        </div>

                        <div class="flex items-center">
                            <button wire:click="deleteToken({{ $token->id }})" class="cursor-pointer ml-6 text-sm text-red-500">
                                {{ __('Delete') }}
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>