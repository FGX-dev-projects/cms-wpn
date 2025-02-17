@section('title', ' Members')

@section('breadcrumb', 'Manage Members')

@extends('layouts.app')

@section('content')


   
        
            <div class="row">
                <div class="frame-parent2">
                    <div class="icons-parent" id="frameContainer">
                    <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
                    <b class="dashboard">Dashboard</b>
                    </div>
                    <div class="icons-group">
                   <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
                    <b class="dashboard">Manage Members | Trust</b>
                    </div>
                    </div>
                     <div style="display:flex; justify-content: end" class="my-10 mb-10">
                        <form method="GET" action="{{ route('trust.index') }}" class="d-flex mt-4 mb-4">
                            <input type="text" name="search" style="border-top-right-radius: 0 !important; border-bottom-right-radius: 0 !important;" class="form-control" placeholder="Search members..." 
                                   value="{{ request('search') }}" style="max-width: 300px; ">
                            <button type="submit" style="border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important; background-color: #db297b; color:#fff" class="btn ">Search</button>
                        </form>
                      
                    </div>
                <div class="card art-body" style="border: none !important;">
                    <form   method="POST" action="{{ route('trust.send-invoices') }}">
                        @csrf
                    <div style="border: none !important; padding-left:15px;" class="card-header pt-6 ">
                        
                        <div class="card-title gap-4">
                            <div class="mt-4 text-end ">
                                <button type="submit"  class="new-part-btn">Send Invoices</button>
                            </div>
                            <div class="mt-4 text-end ">
                                <a href="{{ route('export.table', ['table' => 'trusts']) }}" class="new-part-btn">Export Members</a>
                            </div>
                        </div>
                        
                        <div style="justify-content: end !important;" class="card-toolbar  ">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="new-part-btn" onclick="location.href='{{ route('trust.create') }}'">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 19 19" fill="none">
                                            <g id="Component 2">
                                            <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M8.70833 13.4583C8.70833 13.8956 9.06277 14.25 9.5 14.25C9.93723 14.25 10.2917 13.8956 10.2917 13.4583V10.2917H13.4583C13.8956 10.2917 14.25 9.93723 14.25 9.5C14.25 9.06277 13.8956 8.70833 13.4583 8.70833H10.2917V5.54167C10.2917 5.10444 9.93723 4.75 9.5 4.75C9.06277 4.75 8.70833 5.10444 8.70833 5.54167V8.70833H5.54167C5.10444 8.70833 4.75 9.06277 4.75 9.5C4.75 9.93723 5.10444 10.2917 5.54167 10.2917H8.70833V13.4583Z" fill="white"/>
                                            </g>
                                            </svg>
													</span>
                                    New Member</button>
                            </div>
                        </div>
                    </div>
        
                    <div class="card-body art-body">
                        
                            <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table" id="kt_table_users">
                                <thead>
                                    <tr class="text-start fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-50px act"> 
                                            <input type="checkbox" class=" form-check form-check-input" id="selectAll" onclick="toggleCheckboxes(this)"> <!-- Master Checkbox -->
                                        </th>
                                         <th class="min-w-125px act">Name</th>
                                        <th class="min-w-125px act">Invoice Number</th>
                                        <th class="min-w-125px act">Tel</th>
                                        <th class="min-w-125px act">Email</th>
                                        <th class="min-w-125px act">Member Invoiced?</th>
                                        <th class="min-w-125px act">Member Paid?</th>
                                        <th class="min-w-125px act">Created At</th>
                                        <th class="text-end min-w-100px act" style="text-align: center !important;" >Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold">
                                    @if($data->isEmpty())
                                        <tr>
                                            <td colspan="6" style="color: #000 !important">There is currently no data</td>
                                        </tr>
                                    @else
                                        @foreach($data as $x)
                                        <tr>
                                            <td>
                                              <input type="checkbox" name="selected_members[]" style="" value="{{ $x->id }}" class="member-checkbox form-check form-check-input">
                                            </td>
                                            <td class="created">
                                               
                                                    <span>{{ $x->name }}</span>
                                              
                                            </td>
                                            <td>
                                                @if($x->invoice_number)
                                                    <div class="badge badge-light up-date fw-bold">{{ $x->invoice_number }}</div>
                                                @else
                                                    <div class="badge badge-light up-date fw-bold">No Invoice number </div>
                                                @endif
                                            </td>
                                            <td>
                                                @if($x->cell)
                                                    <div class="badge badge-light up-date fw-bold">{{ $x->cell }}</div>
                                                @else
                                                    <div class="badge badge-light up-date fw-bold">No Tell</div>
                                                @endif
                                            </td>
                                            <td>
                                                @if($x->email)
                                                    <div class="badge badge-light up-date fw-bold">{{ $x->email }}</div>
                                                @else
                                                    <div class="badge badge-light up-date fw-bold">No Email </div>
                                                @endif
                                            </td>
                                            
                                            <td>
                                                @if($x->member_invoiced == 1)
                                                    <div class="badge badge-light-success new-act fw-bold">Yes</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">No</div>
                                                @endif
                                            </td>
                                            <td>
                                                @if($x->paid == 1)
                                                    <div class="badge badge-light-success new-act fw-bold">Yes</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">No</div>
                                                @endif
                                            </td>
                                            <td class="created">{{ \Carbon\Carbon::parse($x->created_at)->diffForHumans() }}</td>
                                            <td class="text-end">
                                                <!-- Actions Dropdown -->
                                                <a href="#" class="btn actions-btn btn-sm" onclick="toggleActionsPopup(event, {{ $x->id }})">Actions
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!-- Actions Content -->
                                                <div class="actions-popup" id="actions-popup-{{ $x->id }}">
                                                    <div class="menu-item">
                                                        <a class="dd" href="{{ route('members.edit', $x->id) }}">Edit Member</a>
                                                    </div>
                                                </form>
                                                    <div class="menu-item">
                                                        <form action="{{ route('members.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                                            {{ method_field('DELETE') }}
                                                            @csrf
                                                            <a href="javascript:void(0)" class="dd" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();">Delete</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        
                            <!-- Submit Button -->
                          
                     
                    </div>
                </div>
            </div>
            <script>
                function toggleCheckboxes(source) {
                    const checkboxes = document.querySelectorAll('.member-checkbox');
                    checkboxes.forEach(checkbox => checkbox.checked = source.checked);
                }
            </script>
           
            
    

@endsection



