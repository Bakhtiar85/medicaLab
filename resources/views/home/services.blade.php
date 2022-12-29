<div id="what-we-provide" class="w-full h-screen flex flex-col justify-center items-center border-b-2 pb-2 lg:px-0 px-2">
    <div class="w-full max-w-7xl">
        <div class="w-full border-b">
            <p class="text-4xl font-bold font-mono">
                Our Services
            </p>
        </div>
        <div id="doctors-div" class="w-full md:p-4 p-2">
            <div class="w-full border-b mb-4">
                <p class="text-3xl font-semibold font-mono">
                    Doctors
                </p>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 md:px-4 gap-2 max-h-[135px] overflow-hidden overflow-y-scroll">
                <div class="col-span-1 flex justify-between items-center gap-2 px-2">
                    <div class="img-name">
                        <img src={{ asset('images/dr-img.jpg') }} width="100px" alt="dr1">
                        <p class="md:text-lg text-sm font-bold text-center border-t-2 mt-1">
                            Dr. Stephen
                        </p>
                    </div>
                    <div class="flex flex-col justify-center md:w-72 w-52 max-h-40 overflow-hidden">
                        <p class="font-bold md:text-xl text-md">
                            MBBS, DHMS, BDS
                        </p>
                        <p class="md:text-sm text-xs text-justify pr-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quaerat id
                            accusantium asperiores,
                            molestias quidem veritatis facilis nobis dolores hic eius architecto sed debitis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="tests-div" class="w-full md:p-4 p-2">
            <div class="w-full border-b mb-4">
                <p class="text-3xl font-semibold font-mono">
                    Available Tests
                </p>
            </div>
            <div class="grid md:grid-cols-6 grid-cols-3 md:px-4 md:gap-10 gap-2 md:max-h-[200px] max-h-[260px] overflow-hidden overflow-y-scroll">
                @foreach ($testsInfo as $test)
                    <div class="col-span-1">
                        <div class="img-name">
                            <img src={{ asset('images/logo.jpeg') }} alt="dr1">
                            <p class="text-sm md:text-lg md:font-bold font-semibold text-center border-t-2 mt-1">
                                {{ $test['name'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
