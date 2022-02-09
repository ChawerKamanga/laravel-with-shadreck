<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('vaccination.index') }}" class="text-blue-600 underline">Vaccinations</a>
                    <a href="/under-five'" class="text-blue-600 underline">Under Five Children</a>
                    <a href="/parents" class="text-blue-600 underline">Parents</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
