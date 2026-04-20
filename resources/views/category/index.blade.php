<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-10">
                <div class="display-6 text-center fw-bold">  Students</div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
            </div>
        </div>
    </div>
</x-layout>