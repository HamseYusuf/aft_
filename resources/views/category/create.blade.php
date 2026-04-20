<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-8">
                <div class=" m-4">
                    <div class="text-center text-center">Add Category</div>
                    <form action="{{ route('category.store') }}" method="post">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control">
                        <input class="btn btn-secondary my-2 form-control " type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>