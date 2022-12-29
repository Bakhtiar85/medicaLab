<div id="footer" class="w-full h-full flex flex-col justify-center items-center">
    <div id="overlay">
        <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 md:gap-4 px-6">
            <div class="flex flex-col col-span-1">
                <div class="flex flex-col items-center md:float-left md:flex-row ">
                    <img src={{ asset('images/logo.jpeg') }} class="md:w-[60px] w-[100px]" alt="logo">
                    <span class="font-semibold lg:text-2xl md:text-md text-md tracking-tight ml-2 ">
                        Makhdoom Clinical Labortary
                    </span>
                </div>
                <div>
                    <p class="text-justify">
                        Kalowal, Lahore Road, Sargodha Punjab
                    </p>
                    <p class="font-mono text-md italic">
                        +9233123456
                        test@gmail.com
                    </p>
                </div>
                <div class="md:px-0 px-5">
                    <p class="text-xl font-mono font-semibold">Follow Us On</p>
                    social icons
                    {{-- <div id="pw_social_icons-3" class="section widget widget-social-icons">
    
                        <a class="social-icons__link" href="https://bit.ly/2td1zTc" target="_blank"><i
                                class="fa  fa-facebook"></i></a>
                        <a class="social-icons__link" href="https://www.instagram.com/citilabandresearchcentre/"
                            target="_blank"><i class="fa  fa-instagram"></i></a>
                        <a class="social-icons__link" href="https://bit.ly/2oMKQk8" target="_blank"><i
                                class="fa  fa-google-plus"></i></a>
                        <a class="social-icons__link" href="https://bit.ly/2oOjGJH" target="_blank"><i
                                class="fa  fa-pinterest"></i></a>
                        <a class="social-icons__link" href="https://twitter.com/CitiLabCRC" target="_blank"><i
                                class="fa  fa-twitter"></i></a>
                        <a class="social-icons__link" href="https://www.linkedin.com/in/citilabandresearchcentre/"
                            target="_blank"><i class="fa  fa-linkedin"></i></a>
    
                    </div> --}}
                </div>
            </div>
            <div class="col-span-1">
                <p class="text-xl font-mono font-semibold">Doctors</p>
                <p class="font-mono text-md italic">
                    Physicians and surgeons diagnose and treat injuries or illnesses and address health maintenance.
                    Physicians examine patients; take medical histories;
                    prescribe medications; and order, perform, and interpret diagnostic tests.
                </p>
            </div>
            <div class="col-span-1">
                <div id="tests">
                    <p class="text-xl font-mono font-semibold">Medical Tests</p>
                    <p class="font-mono text-md italic">
                        <span class="font-semibold">Tests</span> can help detect a condition, determine a diagnosis, plan
                        treatment, check to see if treatment is working, or monitor the condition over time.
                        A doctor may order these tests as part of a routine checkup, to check for certain diseases and
                        disorders, or to monitor your health.
                    </p>
                </div>
            </div>
            <div class="col-span-1">
                <form id="footerForm">
                    {{-- @csrf --}}
                    <div class="w-full flex flex-wrap">
                        <div class="w-full">
                            <label
                                class="block uppercase tracking-wide text-[#2b2929] text-sm md:text-md font-semibold mb-2"
                                for="grid-full-name">
                                Full Name
                            </label>
                            <input {{-- border-red-500 --}}
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border focus:bg-white rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                                id="grid-full-name" type="text" name="grid-full-name" placeholder="Name...">
                            <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                        </div>
    
                        <div class="w-6/12 pr-1">
                            <div class="block uppercase tracking-wide text-[#2b2929] text-sm md:text-md font-semibold mb-2"
                                for="grid-gender">
                                Gender
                            </div>
                            <div
                                class="appearance-none flex justify-around w-full bg-[#0000000e] text-[#2b2929] border border-gray-200 rounded py-[0.75rem] leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
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
    
                        <div class="w-6/12 pl-1">
                            <label
                                class="block uppercase tracking-wide text-[#2b2929] text-sm md:text-md font-semibold mb-2"
                                for="grid-age">
                                Age
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-age" name="grid-age" type="text" placeholder="Age...">
                            <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                        </div>
    
                        <div class="w-6/12 mt-2 pr-1">
                            <label
                                class="block uppercase tracking-wide text-[#2b2929] text-sm md:text-md font-semibold mb-2"
                                for="grid-contact">
                                Contact
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-contact" name="grid-contact" type="text" placeholder="Contact Num...">
                            <p class="text-red-500 text-md italic hidden">Please fill out this field.</p>
                        </div>
                        <div class="w-6/12 mt-2 pl-1">
                            <label
                                class="block uppercase tracking-wide text-[#2b2929] text-sm md:text-md font-semibold mb-2"
                                for="grid-date">
                                Date
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-[#2b2929] border border-gray-200 rounded py-[11px] px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-date" name="grid-date" type="date" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="w-full px-3 flex items-center relative h-[45px]">
                            {{-- <button
                                    class="px-20 py-2 border-2 border-gray-200 rounded-md font-mono font-semibold text-xl hover:text-white hover:bg-[#2b2929] hover:border-none">Submit</button> --}}
    
                            <button class="formBtn" onclick="footerForm()" id="submitBtn" type="button"> 
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
                </form>
            </div>
        </div>
        <div class="w-full bg-transparent border-t-2 py-2 mt-2">
            <p class="text-center font-mono font-extrabold">
                Al Rights Reserved
            </p>
        </div>
    </div>
</div>
</div>
