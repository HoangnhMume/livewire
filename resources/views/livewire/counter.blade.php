<div style="text-align: center">
    <h1>Hello, Laravel-livewire</h1>
{{--    <button wire:click="increment">+</button>--}}
    <h1>{{ $count }}</h1>

    <p wire:poll.1000ms="increment"></p>
</div>
