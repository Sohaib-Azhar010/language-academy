<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\Enrollment;
use App\Models\Instructor;
use App\Exports\EnrollmentsExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function showQueries()
    {
        $queries = Query::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.queries', compact('queries'));
    }

    public function showEnrollments(Request $request)
    {
        $search = $request->input('search');

        $enrollments = Enrollment::when($search, function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('country', 'like', "%{$search}%")
                ->orWhere('language_course', 'like', "%{$search}%");
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.students', compact('enrollments', 'search'));
    }

    public function storeEnrollments(Request $request)
    {
        // Validate the form data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'country' => 'required|string|max:255',
            'age' => 'required|integer',
            'phone' => 'required|string|max:20',
            'language_course' => 'required|string|max:50',
            'enrollment_date' => 'required|date',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the picture upload
        $path = $request->file('picture')->store('pictures', 'public');

        // Create a new enrollment
        Enrollment::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'country' => $request->country,
            'age' => $request->age,
            'phone' => $request->phone,
            'language_course' => $request->language_course,
            'enrollment_date' => $request->enrollment_date,
            'picture_path' => $path,
        ]);

        // Redirect with success message
        return redirect()->route('show.enrollments')->with('success', 'Enrollment submitted successfully!');
    }

    public function destroyEnrollments($id)
{
    $enrollment = Enrollment::findOrFail($id);

    // Optional: Delete associated file if exists
    if ($enrollment->picture_path && file_exists(storage_path('app/public/' . $enrollment->picture_path))) {
        unlink(storage_path('app/public/' . $enrollment->picture_path));
    }

    // Delete the enrollment
    $enrollment->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Enrollment deleted successfully!');
}


    public function export()
    {
        $enrollments = Enrollment::all();

        return response()->json($enrollments);
    }

    public function showInstructors()
    {

        $instructors = Instructor::all();

        return view('admin.instructors', compact('instructors'));

    }

    public function storeInstructors(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teaching_experience' => 'required|string|max:255',
            'seniority' => 'required|string|max:255',
            'leadership_role' => 'required|string|max:255',
            'qualifications' => 'required|string|max:255',
            'scholarly_recognition' => 'required|string|max:255',
            'honoring_words' => 'required|string',
        ]);

        // Handle the image upload
        $path = $request->file('image')->store('images', 'public');

        // Create a new instructor
        Instructor::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image_path' => $path,
            'teaching_experience' => $request->teaching_experience,
            'seniority' => $request->seniority,
            'leadership_role' => $request->leadership_role,
            'qualifications' => $request->qualifications,
            'scholarly_recognition' => $request->scholarly_recognition,
            'honoring_words' => $request->honoring_words,
        ]);

        // Redirect with success message
        return redirect()->route('show.instructors')->with('success', 'Instructor added successfully!');
    }

    public function destroyInstructor($id)
    {
        $instructor = Instructor::findOrFail($id);

        // Delete the image file if needed
        if (file_exists(storage_path('app/public/' . $instructor->image_path))) {
            unlink(storage_path('app/public/' . $instructor->image_path));
        }

        // Delete the instructor
        $instructor->delete();

        return redirect()->route('show.instructors')->with('success', 'Instructor deleted successfully!');
    }

    public function indexInstructors()
    {
        // Fetch all instructors from the database
        $instructors = Instructor::all();

        // Pass the instructors to the view
        return view('team', compact('instructors'));
    }

    public function showFaculty($id)
    {
        // Find the instructor by ID
        $instructor = Instructor::findOrFail($id);

        // Pass the instructor data to the view
        return view('faculty',compact('instructor'));
    }

    public function deleteQuery($id)
    {
        $query = Query::findOrFail($id);

        // Delete the instructor
        $query->delete();

        return redirect()->back()->with('success', 'Query deleted successfully!');
    }


}
