<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="">
                    <div class="text-center font-semibold text-4xl text-gray-800 leading-tight my-6">
                        <h1>Division to village selection crud</h1>
                    </div>
                        <div class="grid grid-cols-1 gap-3 md:grid-cols-3 my-6 ">
                            <div class=" py-3">
                                <label for="division">Division: </label>
                                <select name="division" id="division" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                                
                            </div>
                            <div class=" py-3">
                                <label for="district">District: </label>
                                <select name="district" id="district" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                            </div>
                            <div class=" py-3">
                                <label for="upazilla">Upazilla: </label>
                                <select name="upazilla" id="upazilla" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                            </div>
                            <div class=" py-3">
                                <label for="union">Union: </label>
                                <select name="union" id="union" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                                
                            </div>
                            <div class=" py-3">
                                <label for="word">Word No: </label>
                                <select name="word" id="word" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                            </div>
                            <div class=" py-3">
                                <label for="village">Village: </label>
                                <select name="village" id="village" class="rounded-lg w-9/12" >
                                    <option value="sylhet">sylhet</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="khulna">khulna</option>
                                </select>
                            </div>
                        </div>
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
