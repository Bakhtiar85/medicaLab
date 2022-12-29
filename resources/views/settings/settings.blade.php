@extends('layouts.layout')
@section('title', 'Patients')

@section('content')
    <div id="settings_div" class="p-4 w-full h-[874px] flex flex-col justify-center items-center">
        <div class="header_div border-b-2 w-full max-w-4xl mb-4 flex justify-between">
            <h1 class="text-3xl font-mono">New Test</h1>
        </div>
        <div class="body_div w-full max-w-4xl">

            <div class="body_div w-full max-w-4xl">
                <form class="w-full max-w-4xl">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-6/12 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-[#2b2929] text-xs font-bold mb-2"
                                for="test-name">
                                Test Name
                            </label>
                            <input {{-- border-red-500 --}}
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border focus:bg-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                                id="test-name" type="text" name="name" placeholder="Name...">
                            <p class="text-red-500 text-xs italic hidden">Please fill out this field.</p>
                        </div>
                        <div class="w-2/12 px-3">
                            <label for="test-price"
                                class="block uppercase tracking-wide text-[#2b2929] text-xs font-bold mb-2"
                                for="test-price">
                                Test Price
                            </label>
                            <input {{-- border-red-500 --}}
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border focus:bg-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                                id="test-price" type="text" name="test-price" placeholder="Name...">
                            <p class="text-red-500 text-xs italic hidden">Please fill out this field.</p>

                            <p class="text-red-500 text-xs italic hidden">Please fill out this field.</p>
                        </div>
                        <div class="w-4/12 px-3">
                            <label class="block uppercase tracking-wide text-[#2b2929] text-xs font-bold mb-2"
                                for="document">
                                Tests: Document/PDF/File
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-[9px] px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="document" type="file">
                        </div>
                    </div>
                    <div class="px-3 flex items-center">
                        <button
                            class="px-20 py-2 bg-gray-200 rounded-md font-mono font-semibold text-xl hover:text-white hover:bg-[#2b2929]">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script></script>
@endsection
