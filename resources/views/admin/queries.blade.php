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
    <h2>Queries</h2>
    {{-- <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Query</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($queries as $query)
            <tr>
                <td>{{ $query->first_name }} {{ $query->last_name }}</td>
                <td>{{ $query->email }}</td>
                <td>{{ $query->age }}</td>
                <td>{{ $query->message }}</td>
                <td>{{ \Carbon\Carbon::parse($query->created_at)->diffForHumans() }}</td>
                <td>
                    <a href="mailto:{{ $query->email }}?subject=Response to Your Query&body=Dear {{ $query->first_name }},"
                        class="btn btn-sm btn-primary" >Reply</a>
                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{ $query->email }}">
                            <input type="hidden" name="first_name" value="{{ $query->first_name }}">
                            <button type="submit" class="btn btn-sm btn-primary">Reply</button>
                        </form>
                        
                        
                     
                     
                    <a href="{{ route('query.delete', $query->id) }}" class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure you want to delete this query?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Query</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($queries as $query)
            <tr>
                <td>{{ $query->first_name }} {{ $query->last_name }}</td>
                <td>{{ $query->email }}</td>
                <td>{{ $query->language_course }}</td>
                <td>{{ $query->message }}</td>
                <td>{{ $query->created_at->diffForHumans() }}</td>
                <td>
                    <button onclick="showReplyForm({{ $query->id }})" class="btn btn-sm btn-primary mb-2">Reply</button>
                    <form action="{{ route('query.delete', $query->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mb-2" onclick="return confirm('Are you sure you want to delete this query?')">Delete</button>
                    </form>
                </td>
            </tr>
            <tr id="reply-form-{{ $query->id }}" style="display:none;">
                <td colspan="6">
                   <strong>Age:</strong> {{$query->age}} <br>
                   <strong>Cell no.:</strong> {{$query->phone}} <br>
                   <strong>Country:</strong> {{$query->country}} <br>
                   <strong>Query:</strong> {{$query->message}} <br>
                    <form action="{{ route('send.email') }}" method="POST">
                        @csrf
                        <input type="hidden" name="email" value="{{ $query->email }}">
                        <input type="hidden" name="first_name" value="{{ $query->first_name }}">
                        <textarea name="msg" class="form-control" placeholder="Write your response here..."></textarea>
                        <button type="submit" class="btn btn-sm btn-success mt-2">Send Reply</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <script>
        function showReplyForm(id) {
            var replyForm = document.getElementById('reply-form-' + id);
            if (replyForm.style.display === 'none') {
                replyForm.style.display = 'table-row';
            } else {
                replyForm.style.display = 'none';
            }
        }
    </script>
    
    <div class="d-flex justify-content-center">
        {{ $queries->links() }}
    </div>
</div>




@include('partials.adminfooter')

