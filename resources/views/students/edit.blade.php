<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-8">
                <div class="text-center">Update Student</div>
                <form action="{{ route('students.update' , $student->id)  }}" method="post">
                    @csrf
                    <label for="" class="form-label">Name</label>
                    <input value="{{ $student->name }}" type="text" name="name" class="form-control">
                    <label for="" class="form-label">Address</label>
                    <input value="{{ $student->address }}" type="text" name="address" class="form-control">
                    <label for="" class="form-label">Age</label>
                    <input value="{{ $student->age }}" type="text" name="age" class="form-control">
                    <input type="submit" value="Submit" class="btn btn-primary form-control my-2">
                </form>
            </div>
        </div>
    </div>
</x-layout>