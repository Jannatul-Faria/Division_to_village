<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hiddenshadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="{{ route('divisions.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="text-center font-semibold text-4xl text-gray-800 leading-tight my-6">
                        <h1>Division to village selection crud</h1>
                    </div>
                    <div class="grid grid-cols-1  md:grid-cols-1 my-6 ">
                        <div class="py-3">
                            <label for="division_name" class="font-semibold text-xl"> Division: </label>
                            <input type="text" name="division_name" id="division_name" class="rounded-lg w-10/12" >
                        
                        </div>
                        <font style="color: red"> {{ ($errors->has('division_name'))? ($errors->first('division_name')): " "}}</font>
                    
                    </div>
                    <div class="submit_button">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                           Submit
                        </button>
                    </div>
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
