@extends('backend.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Update Distrit</h1>
                       
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{ url('districts') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Table</a></div>
            </div>

            <section class="row g-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <h3>Ooops there are some problem</h3>
                    <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                            
                        @endforeach
                    </ul>

                </div>
                    
                @endif


                <div class="col-12 col-xl-12">
                    <form class="panel needs-validation " action="{{ route('district.update', $district->id) }}" method="post" novalidate>
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>District Information</span></h2>

                            </div>
                        </div>
                        <div class="row g-3">
                            @csrf
                            <div class="col-md-6"><label class="form-label" for="firstName"
                                    name="name">Name</label><input class="form-control" id="firstName" type="text"
                                    name="name" value="{{old('name', $district->name)}}">
                                <div class="invalid-feedback"> name is required.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="{{route('district.index')}}">Cancel</a><button class="btn btn-primary" type="submit"><i
                                    class="bi bi-person-check" aria-hidden="true"></i>Update Student</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
