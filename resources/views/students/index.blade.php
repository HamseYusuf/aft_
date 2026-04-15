<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-10">
                <div class="display-6 text-center fw-bold">  Students</div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td><a href="{{ route('students.show' , $student->id) }}" class="btn btn-sm btn-primary">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
            </div>
        </div>
    </div>
</x-layout>