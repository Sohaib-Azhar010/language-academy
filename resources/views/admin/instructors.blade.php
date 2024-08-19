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

<div class="container mt-5">
    <h2 class="mb-4 text-center">Instructor Form</h2>
    <form action="{{route('instructors.store')}}" method="post" enctype="multipart/form-data">
        @csrf <!-- Include this line if you are using Laravel -->
        <div class="row g-3">

            <div class="col-md-6 mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <!-- Image Upload -->
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>
            </div>

            <!-- Teaching Experience -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="teachingExperience" name="teaching_experience" placeholder="Teaching Experience" required>
                    <label for="teachingExperience">Teaching Experience</label>
                </div>
            </div>

            <!-- Seniority -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="seniority" name="seniority" placeholder="Seniority" required>
                    <label for="seniority">Seniority</label>
                </div>
            </div>

            <!-- Leadership Role -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="leadershipRole" name="leadership_role" placeholder="Leadership Role" required>
                    <label for="leadershipRole">Leadership Role</label>
                </div>
            </div>

            <!-- Qualifications -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="qualifications" name="qualifications" placeholder="Qualifications" required>
                    <label for="qualifications">Qualifications</label>
                </div>
            </div>

            <!-- Scholarly Recognition -->
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="scholarlyRecognition" name="scholarly_recognition" placeholder="Scholarly Recognition" required>
                    <label for="scholarlyRecognition">Scholarly Recognition</label>
                </div>
            </div>

            <!-- Honoring Words -->
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Honoring Words" id="honoringWords" name="honoring_words" style="height: 150px"></textarea>
                    <label for="honoringWords">Honoring Words</label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Submit Instructor</button>
            </div>
        </div>
    </form>
</div>

<hr>
<div class="container mt-4">
    <h2>Instructors List</h2>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Instructors Table -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instructors as $instructor)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $instructor->image_path) }}" alt="Instructor Image" style="width: 50px; height: 50px; border-radius: 50%;">
                        </td>
                        <td>{{ $instructor->name }}</td>
                        <td>{{ $instructor->designation }}</td>
                        <td>
                            <!-- Delete Form -->
                            <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this instructor?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('partials.adminfooter')