@section('title', 'Services')


@extends('layouts.app')
@section('content')
<div class="container-fluid px-0">

        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="h2 mb-0">Services</h1>
                </div>
                <div class="col-auto d-flex align-items-center my-2 my-sm-0">
                    <a href="{{ route('services.create') }}" class="btn btn-lg btn-outline-dark px-3 me-2 me-md-3"><span class="ps-1">Service</span> <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <rect data-name="Icons/Tabler/Add background" width="14" height="14" fill="none"/>
                            <path d="M6.329,13.414l-.006-.091V7.677H.677A.677.677,0,0,1,.585,6.329l.092-.006H6.323V.677A.677.677,0,0,1,7.671.585l.006.092V6.323h5.646a.677.677,0,0,1,.091,1.348l-.091.006H7.677v5.646a.677.677,0,0,1-1.348.091Z" fill="#1e1e1e"/>
                        </svg>
                    </a>
                </div>
            </div>

    </div>
    <br>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card rounded-12 shadow-dark-80">

                <div class="table-responsive mb-0">
                    @if($data->isEmpty())
                      <h4 class="text-center p-5">No DATA Loaded....</h4>

                    @else
                    <table class="table card-table table-nowrap overflow-hidden">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="list">


                        @foreach($data as $record)
                        <tr>
                            <td>
                                #{{ $record->id }}
                            </td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->countries->name }}</td>
                            <td>
                                <table style="max-width: 80px;">
                                    <tr>
                                        <td><a class="btn btn-primary" href="{{ route('services.edit', $record->id) }}"> Edit </a></td>
                                        <td>
                                            <form action="{{ route('services.destroy', $record->id) }}" method="POST">
                                                {{method_field('DELETE')}}
                                                @csrf
                                                <button type="submit" class="btn btn-danger" >Delete </button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>

                                   </td>
                        </tr>
                        @endforeach

                  </tbody>
                    </table>
                    @endif
                </div>

            </div>
        </div>
        <div class="col-12">
            {{ $data->links() }}
        </div>
    </div>

</div>
@endsection



