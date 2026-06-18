@extends('backend.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Districts</p>
                        <h1 class="h3 mb-1">Tables</h1>
                        <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>
                    </div>
                </div>

            </div>

            <section class="panel">
                @session('success')
                <div class="alert alert-success" role="alert">
                    {{$value}}
                    
                </div>


                @endsession
                <div class="d-flex justify-content-end">
                    <a href="{{route('district.create')}}" class="btn btn-success ">Add District</a>
                </div>
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Advanced
                                Table</span></h2>
                        <p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p>
                    </div><input class="form-control form-control-sm table-search" type="search"
                        placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($districts as $district)
                            
                                <tr>
                                    <td class="fw-semibold">{{$district->id}}</td>
                                    <td>{{$district->name}}</td>

                                    <td class="text-center">
                                       <form action="{{ route('district.destroy',$district->id)}}" method="post">
                                        @csrf
                                        <a href="">View</a>
                                        <button onclick=" return confirm('Are You delete this district')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                       </form>
                                    </td>
                                </tr>
                                
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
