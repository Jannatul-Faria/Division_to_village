<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white overflow-hidden shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 sm:rounded-lg ">
                <div class="p-6 text-gray-900">
                    <form action="">
                        <div class="text-center font-semibold text-4xl text-gray-800 leading-tight py-6">
                            <h1>Division Management</h1>
                        </div>

                        <div class="text-end">
                            {{-- <x-primary-button>{{ __('Add') }}</x-primary-button> --}}
                            <a href="{{ route('divisions.add') }}">
                            <button type="button"
                                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                               Add Division
                            </button>
                        </a>
                        </div>
                        <div class="py-6 ">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class=" px-6 py-3">
                                                Division name
                                            </th>
                                           <th scope="col" class="px-6 py-3">
                                                <span class="text-center">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody 
                                        class="text-center">
                                        @foreach ($allData as $key => $division)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $division->division_name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('divisions.edit' , $division->id)}}"  class="text-white text-xs bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-cyan-500/50  dark:shadow-cyan-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">
                                                    Edit
                                                </a>
                                                <a href="{{ route('divisions.delete' , $division->id)}}" class="text-white text-xs bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-red-500/50  dark:shadow-red-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">Delete
                                                </a>
                                                <a href="" class="text-white text-xs bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-green-500/50  dark:shadow-green-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">view
                                                </a>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Microsoft Surface Pro
                                            </th>
                                            <td class="px-6 py-4 ">
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-cyan-500/50  dark:shadow-cyan-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">Edit</button>
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-red-500/50  dark:shadow-red-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">Delete</button>
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-green-500/50  dark:shadow-green-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">view</button>
                                               
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Magic Mouse 2
                                            </th>

                                            <td class="px-6 py-4">
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-cyan-500/50  dark:shadow-cyan-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">Edit</button>
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-red-500/50  dark:shadow-red-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">Delete</button>
                                                <button type="button" class="text-white text-xs bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-green-500/50  dark:shadow-green-800/80 font-medium rounded-lg px-3 py-1.5 text-center me-1 mb-1">view</button>
                                               
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
