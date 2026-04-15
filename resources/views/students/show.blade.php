<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="m-2 p-2">
                <div>
                    <strong>Name</strong> {{ $student->name }}</div>
                <div>
                    <strong>Address</strong> {{ $student->address }}</div>
                <div><strong>Age</strong> {{ $student->age }}</div>
            </div>
            <div>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Update</a>
                <a href="{{ route('students.destroy', $student->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</x-layout>