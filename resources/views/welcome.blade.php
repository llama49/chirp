<x-layout title="hompage">

    @auth
    <livewire:create-chirp />
    @endauth

    <livewire:index-chirp />

</x-layout>