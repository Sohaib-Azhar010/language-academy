@include('partials.adminheader')

<div class="row mb-2">
    <div class="col-md-2">
        <h3>Hi,{{$userName}}</h3>

    </div>
    <div class="col-md-2">
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-sm btn-warning">Logout</button>
        </form>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Enrollments</p>
                            <h4 class="card-title">{{$studentsCount}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="fas fa-user-check"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Instructors</p>
                            <h4 class="card-title">{{ $instructorsCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-user-cog"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Admins</p>
                            <h4 class="card-title">{{$adminsCount}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="far fa-paper-plane"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Queries</p>
                            <h4 class="card-title">{{$queriesCount}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style>
    .scrollable-table {
        max-height: 400px;  /* Adjust based on your preference */
        overflow-y: auto;
    }
    .cursor-pointer {
        cursor: pointer;
    }
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Signup Form -->
            <div class="card">
                <div class="card-header">
                    <h4>Add Admin</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('register.submit') }}" method="post">
                        @csrf <!-- CSRF token for Laravel -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('password', 'togglePasswordIcon')">
                                    <i class="fas fa-eye-slash" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add New Admin</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <!-- Admins Table -->
            <div class="card" style="height: 95%;">
                <div class="card-header">
                    <h4>Admins</h4>
                </div>
                <div class="card-body scrollable-table">
                    <table class="table cursor-pointer">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.delete', $admin->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>






    <script>
       function togglePasswordVisibility(passwordFieldId, iconFieldId) {
    const passwordInput = document.getElementById(passwordFieldId);
    const toggleIcon = document.getElementById(iconFieldId);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
    }
}
    </script>
    @include('partials.adminfooter')
