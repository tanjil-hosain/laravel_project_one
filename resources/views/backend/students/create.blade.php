@extends('backend.master')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add User</h1>
                        <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{ url('/students') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
            </div>

            <section class="row g-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h3>OoOOpsI There are some problems with your input</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif


                <div class="col-12 col-xl-12">
                    <form class="panel needs-validation " method="post" action="{{ route('student.store') }}" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>User Information</span></h2>
                                <p class="text-muted mb-0">Create a user account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName"
                                    name="name">Name</label><input class="form-control" id="firstName" type="text"
                                    name="name" required value="{{ old('name') }}">
                                <div class="invalid-feedback"> name is required.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" 
                                        value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" 
                                        value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                                <div class="invalid-feedback">Gender is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Email</label><input
                                    class="form-control" id="email" type="email" name="email" required
                                    value="{{ old('email') }}">
                                <div class="invalid-feedback">Enter a valid email.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input
                                    class="form-control" id="phone" name="phone" type="tel" required
                                    value="{{ old('phone') }}">
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="role">District</label><select
                                    class="form-select" name="district" id="role" required>
                                    <option value="">Choose District</option>
                                    <option value="1" {{old('district')==1?'selected': ''}}>Dhaka</option>
                                    <option value="2" {{old('district')==2?'selected': ''}}>Feni</option>
                                    <option value="3" {{old('district')==3?'selected': ''}}>Chittagong</option>
                                    <option value="4" {{old('district')==4?'selected': ''}}>Cumilla</option>
                                </select>
                                <div class="invalid-feedback">Choose a district</div>
                            </div>
                            <div class="col-md-6 d-block"><label class="form-label" for="team">Subject</label>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                        name="subjects[]" value="php" {{ old('subjects') == 'php' ? 'checked' : '' }}><label class="form-check-label"
                                        for="sampleCheck">PHP</label>
                                </div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                        name="subjects[]" value="react"><label class="form-check-label"
                                        for="sampleCheck">React</label>
                                </div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                         name="subjects[]" value="mysql"><label class="form-check-label"
                                        for="sampleCheck">Mysql</label>
                                </div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                        name="subjects[]" value="laravel" ><label class="form-check-label"
                                        for="sampleCheck" value="laravel">Laravel</label>
                                </div>
                                <div class="invalid-feedback">Choose a Subject.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i
                                    class="bi bi-person-check" aria-hidden="true"></i> Create Student</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
