<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('vaccination.index') }}">Vaccines</a>
        </span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  border-gray-200">
                    <form action="{{ route('vaccines.store') }}" method="post">
                        @csrf
                        <label for="vaccine-name" class="text-lg">Vaccine Name</label>
                        <input type="text" name="vaccine_name" id="vaccine-name" class="block w-full py-5" 
                        value="{{ $vaccine->vaccine_name }}">
                        @if ($vaccine->is_special)
                            <div class="py-4">
                                <label class="text-lg py-5" for="is-special">Is Special</label>
                                <input type="radio" name="is_special" id="is-special" checked value="1">
                                <label class="text-lg py-5" for="is-not-special">Is Not Special</label>
                                <input type="radio" name="is_special" id="is-not-special" value="0">
                            </div> 
                        @else
                        <div class="py-4">
                            <label class="text-lg py-5" for="is-special">Is Special</label>
                            <input type="radio" name="is_special" id="is-special" value="1">
                            <label class="text-lg py-5" for="is-not-special">Is Not Special</label>
                            <input type="radio" name="is_special" id="is-not-special" checked value="0">
                        </div>
                        @endif
                        <button style="background-color: #027bc2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
