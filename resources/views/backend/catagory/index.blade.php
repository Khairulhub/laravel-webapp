{{-- @extends('backend.layouts.master') --}}
<x-backend.layouts.master>

    <x-slot:page_title>
        Catagory 
    </x-slot:page_title>

{{-- @section('content') --}}
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
{{-- daymic name set --}}


        <x-slot:title>
            Catagory list
        </x-slot:title>



    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            {{-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot> --}}
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
            
                
               
               
                
            </tbody>
        </table>
    </div>
</div>

{{-- @endsection --}}


</x-backend.layouts.master>