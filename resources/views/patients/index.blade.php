@extends('layouts.layout')
@section('title', 'Patients')

@section('content')
    <div id="listing_patients_div" class="p-4 w-full flex flex-col justify-center items-center h-[874px]">
        <div class="header_div border-b-2 w-full max-w-7xl mb-4 flex justify-between">
            <h1 class="text-3xl font-mono">Patients Information</h1>
            <p class="text-sm italic">Click Patent To See The Details</p>
        </div>
        <div class="body_div w-full max-w-7xl">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Tests</th>
                        <th>Total Fee</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ $patients }} --}}
                    @foreach ($patients as $patient)
                        <tr class="text-[20px]">
                            <td>{{ $patient->date }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->sex }}</td>
                            <td>{{ $patient->testsNames }}</td>
                            <td>{{ $patient->testsAmount }}</td>
                            <td>
                                <a href={{ route('patient', $patient->id )}}>
                                    <svg class="w-6 h-6 group-hover:text-gray-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                                        </path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Tests</th>
                        <th>Total Fee</th>
                        <th>View</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#nav_patients').addClass('underline italic')
            $('#example').DataTable({
                "dom": 'lfrtip',
                scrollY: '500px',
                scrollCollapse: true,
            });
        });
    </script>
@endsection
