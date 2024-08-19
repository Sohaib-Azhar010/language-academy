@include('partials.adminheader')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-4">
    <h2>Student Enrollment Form</h2>
    <form action="{{ route('enrollments.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="full-name" name="full_name" placeholder="Full Name"
                        required>
                    <label for="full-name">Full Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                        required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="country" name="country" placeholder="Country"
                        required>
                    <label for="country">Country</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                    <label for="age">Age</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number"
                        required>
                    <label for="phone">Phone Number</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select class="form-control" id="language-courses" name="language_course" required>
                        <option value="" selected>Select Language Course</option>
                        <option value="English">English</option>
                        <option value="Russian">Russian</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Korean">Korean</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Arabic">Arabic</option>
                        <option value="Spoken English">Spoken English</option>
                        <option value="IELTS">IELTS</option>
                    </select>
                    <label for="language-courses">Language Courses</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="date" class="form-control" id="enrollment-date" name="enrollment_date"
                        placeholder="Enrollment Date" required>
                    <label for="enrollment-date">Enrollment Date</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input class="form-control" type="file" id="picture" name="picture" required>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Submit Enrollment</button>
            </div>
        </div>
    </form>
</div>
<hr>

<div class="container mt-4">
    <h2>Student Enrollments</h2>

    <div class="mb-3">
        <button id="downloadExcel" class="btn btn-success">
            Download Excel <i class="fas fa-file-excel"></i>
        </button>

    </div>

    <!-- Search Form -->
    <form action="{{ route('show.enrollments') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control"
                placeholder="Search by name, email, country, or course" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>



    <!-- Enrollment Table -->
    <div class="table-responsive">
        <table class="table table-hover" id="enrollment-table">
            <thead class="table-dark">
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($enrollments as $enrollment)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $enrollment->picture_path) }}" alt="Student Picture"
                                style="width: 50px; height: 50px; border-radius: 50%;">
                        </td>
                        <td>{{ $enrollment->full_name }}</td>
                        <td>{{ $enrollment->email }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" type="button" data-bs-toggle="collapse"
                                data-bs-target="#details-{{ $enrollment->id }}" aria-expanded="false"
                                aria-controls="details-{{ $enrollment->id }}">
                                Details
                            </button>
                            <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                
                    <tr class="collapse" id="details-{{ $enrollment->id }}">
                        <td colspan="9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Application Form for {{ $enrollment->full_name }}</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Display Picture -->
                                            <img src="{{ asset('storage/' . $enrollment->picture_path) }}" alt="Student Picture" style="width: 100%; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-9">
                                            <!-- Display Details -->
                                            <div class="mb-2">
                                                <strong>Full Name:</strong> {{ $enrollment->full_name }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Email:</strong> {{ $enrollment->email }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Country:</strong> {{ $enrollment->country }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Age:</strong> {{ $enrollment->age }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Phone:</strong> {{ $enrollment->phone }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Language Course:</strong> {{ $enrollment->language_course }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Enrollment Date:</strong> {{ \Carbon\Carbon::parse($enrollment->enrollment_date)->format('d M Y') }}
                                            </div>
                                            <button class="btn btn-secondary mt-3" onclick="printPDF({{ $enrollment->id }})">Print PDF</button>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                @endforeach --}}
                @foreach ($enrollments as $enrollment)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $enrollment->picture_path) }}" alt="Student Picture"
                                style="width: 50px; height: 50px; border-radius: 50%;">
                        </td>
                        <td>{{ $enrollment->full_name }}</td>
                        <td>{{ $enrollment->email }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" type="button" data-bs-toggle="collapse"
                                data-bs-target="#details-{{ $enrollment->id }}" aria-expanded="false"
                                aria-controls="details-{{ $enrollment->id }}">
                                Details
                            </button>
                            <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="collapse" id="details-{{ $enrollment->id }}">
                        <td colspan="9">
                            <div class="card">
                                <div class="card-body" id="application-form-{{ $enrollment->id }}">
                                    <h5 class="card-title mb-3">Application Form for {{ $enrollment->full_name }}</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Display Picture -->
                                            <img src="{{ asset('storage/' . $enrollment->picture_path) }}"
                                                alt="Student Picture" style="width: 100%; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-9">
                                            <!-- Display Details -->
                                            <div class="mb-2">
                                                <strong>Full Name:</strong> {{ $enrollment->full_name }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Email:</strong> {{ $enrollment->email }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Country:</strong> {{ $enrollment->country }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Age:</strong> {{ $enrollment->age }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Phone:</strong> {{ $enrollment->phone }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Language Course:</strong> {{ $enrollment->language_course }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>Enrollment Date:</strong>
                                                {{ \Carbon\Carbon::parse($enrollment->enrollment_date)->format('d M Y') }}
                                            </div>
                                            <button class="btn btn-secondary mt-3"
                                                onclick="printPDF({{ $enrollment->id }},'{{ $enrollment->full_name }}')">Print PDF</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $enrollments->appends(['search' => $search])->links() }}
    </div>
</div>




@include('partials.adminfooter')
