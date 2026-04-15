<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-8">
                <div class="text-center">Add Student</div>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control">
                    <label for="" class="form-label">Age</label>
                    <input type="text" name="age" class="form-control">
                    <input type="submit" value="Submit" class="btn btn-primary form-control my-2">
                </form>
            </div>
        </div>
    </div>
</x-layout>