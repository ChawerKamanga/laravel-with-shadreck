<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('vaccine.create') }}">Add Vaccine</a>
        </span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  border-gray-200">
                    @if ($vaccines->count())
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-primary text-center">
                                <th
                                    class="w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 border-l border-transparent
                                 ">
                                    Id
                                </th>
                                <th
                                    class="
                                 w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 ">
                                    Vaccine Name
                                </th>
                                <th
                                    class="
                                 w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 ">
                                    Is Special
                                </th>
                                <th
                                    class="
                                 w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 ">
                                    Created At
                                </th>
                                <th
                                    class="
                                 w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 ">
                                    Updated At
                                </th>
                                <th
                                    class="
                                 w-1/6
                                 min-w-[160px]
                                 text-lg
                                 font-semibold
                                 text-gray-900
                                 py-4
                                 lg:py-7
                                 px-3
                                 lg:px-4
                                 border-r border-transparent
                                 ">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaccines as $vaccine)
                                <tr>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    
                                    border-l 
                                    ">
                                        {{ $vaccine->id }} 
                                    </td>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    
                                    ">
                                        {{ $vaccine->vaccine_name }}
                                    </td>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    
                                    ">
                                        @if ($vaccine->is_special)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    ">
                                        {{ $vaccine->created_at->diffForHumans() }}
                                    </td>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    
                                    ">
                                        {{ $vaccine->updated_at->diffForHumans() }}
                                    </td>
                                    <td
                                        class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-white
                                    border-r 
                                    ">
                                        <form action="{{ route('vaccines.destroy', $vaccine->id) }}" method="post" style="display: inline">
                                            @method('delete')
                                            @csrf
                                            <button  type="submit"
                                                class="
                                            border border-primary
                                            py-2
                                            px-6
                                            mr-10
                                            text-primary
                                            inline-block
                                            rounded
                                            hover:bg-primary hover:text-gray-900
                                            ">
                                                Delete
                                            </button>
                                        </form>
                                        <a href="{{ route('vaccines.edit', $vaccine->id) }}"
                                            class="
                                            border border-primary
                                            py-2
                                            px-6
                                            text-primary
                                            inline-block
                                            rounded
                                            bg-red-900 hover:text-red-900
                                        ">
                                            Update
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-6">
                        {{ $vaccines->links() }}
                    </div>
                    @else
                    <div class="p-6">
                        No vacines available
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
