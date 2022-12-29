@extends('layouts.layout')
@section('title', 'Patients')

@section('content')
    <div id="form_patients_div" class="p-4 w-full flex flex-col justify-center items-center h-[874px]">
        <div class="header_div border-b-2 w-full max-w-6xl mb-4">
            <h1 class="text-5xl font-mono">New Patient</h1>
        </div>
        <div class="body_div w-full max-w-6xl">
            <form class="w-full max-w-6xl" id="addNewPatientForm" method="POST" action={{ route('patients') }}>
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-5/12 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2"
                            for="grid-full-name">
                            Full Name
                        </label>
                        <input {{-- border-red-500 --}}
                            class="appearance-none block w-full bg-gray-200 text-[#2b2929] border focus:bg-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                            id="grid-full-name" type="text" name="grid-full-name" placeholder="Name...">
                        <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-2/12 px-3">
                        <div class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2" for="grid-gender">
                            Gender
                        </div>
                        <div
                            class="appearance-none flex justify-around w-full bg-[#0000000e] text-[#2b2929] border border-gray-200 rounded py-[0.86rem] leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <label class="text-sm" for="male">
                                <input type="radio" name="grid-sex" id="male" value="male" checked>
                                Male
                            </label>
                            <label class="text-sm" for="female">
                                <input type="radio" name="grid-sex" id="female" value="female">
                                Female
                            </label>
                        </div>

                        <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-2/12 px-3">
                        <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2" for="grid-age">
                            Age
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-age" name="grid-age" type="text" placeholder="Age...">
                        <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-3/12 px-3">
                        <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2"
                            for="grid-contact">
                            Contact
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-contact" name="grid-contact" type="text" placeholder="Contact Num...">
                        <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2" for="grid-date">
                            Date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-date" name="grid-date" type="date" placeholder="Address..."
                            value="{{ date('Y-m-d') }}">
                        <p class="text-gray-600 text-md italic">Default: Current</p>
                    </div>
                    <div class="w-3/4 px-3">
                        <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2"
                            for="grid-address">
                            Address
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-address" name="grid-address" type="text" placeholder="Address...">
                        <p class="text-gray-600 text-md italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="flex justify-between flex-wrap -mx-3 mb-2">
                        <div class="px-3">
                            <label class="block uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2"
                                for="grid-file">
                                File/Image
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-file" name="grid-file" type="file" placeholder="Address..." disabled>
                            <p class="text-gray-600 text-md italic">Make it as long and as crazy as you'd like</p>
                        </div>
                        <div class="px-3 flex items-center relative">
                            {{-- <button
                                class="px-20 py-2 border-2 border-gray-200 rounded-md font-mono font-semibold text-xl hover:text-white hover:bg-[#2b2929] hover:border-none">Submit</button> --}}

                            <button class="formBtn" id="submitBtn">
                                <span>Submit</span>
                                <div class="success">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                        viewBox="0 0 29.756 29.756" style="enable-background:new 0 0 29.756 29.756;"
                                        xml:space="preserve">

                                        <path
                                            d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="flex justify-between uppercase tracking-wide text-[#2b2929] text-md font-bold mb-2"
                                for="grid-gender">
                                <p>Tests: <span id="testCount">0</span></p>
                                <p class="font-mono mr-5">Price(Rs): <span id="testsAmount">0</span></p>
                            </div>
                            <div
                                class="tests_div appearance-none grid grid-cols-4 w-full bg-[#0000000e] text-[#2b2929] border border-gray-200 rounded py-[0.86rem] leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                                @foreach ($testsInfo as $item)
                                    <div class="test_div m-2 px-3 shadow-xl hover:shadow-2xl">
                                        <label for={{ $item['name'] }}>
                                            <p class="w-full">
                                                <input type="checkbox" id={{ $item['name'] }} value={{ $item['name'] }}
                                                    data-amount-type={{ $item['price'] }}>
                                                {{ $item['name'] }}
                                            </p>
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var testsAmount = 0;
        var testCount = 0;
        var testsNames = [];
        $(document).ready(function(){
            $('#nav_n_patients').addClass('underline italic')
        })
        $('.tests_div .test_div input:checkbox').on('click', function() {
            if ($(this).prop('checked')) {
                testCount++;
                testsAmount += parseInt($(this).attr('data-amount-type'));
                testsNames.push(this.id);
            } else if (!$(this).prop('checked')) {
                testCount--;
                testsAmount -= parseInt($(this).attr('data-amount-type'));
                for (var i = 0; i < testsNames.length; i++) {
                    if (testsNames[i] === this.id) {
                        testsNames.splice(i, 1);
                    }
                }
            }
            $('#testsAmount').text(testsAmount);
            $('#testCount').text(testCount);
        })
        $('form#addNewPatientForm').submit(function(event) {
            event.preventDefault();
            var fd = new FormData(this);
            fd.append('testsAmount', testsAmount);
            fd.append('testsNames', testsNames);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'patients',
                type: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: fd,
                cache: false,
                success: function(response) {
                    // alert(response);
                    document.getElementById('addNewPatientForm').reset();
                    testsAmount = 0;
                    testCount = 0;
                    testsNames = [];
                }
            })
        });

        let btn = document.getElementById("submitBtn");

        btn.addEventListener("click", active);

        function active() {
            btn.classList.toggle("is_active");
            setTimeout(function() {
                btn.classList.toggle("is_active");
            }, 100000);
        }
    </script>
@endsection
