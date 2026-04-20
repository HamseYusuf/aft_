<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-8">
                <div class=" m-4">
                    <div class="text-center text-center"> Category</div>
                    <form action="{{ route('product.store') }}" method="post">
                        <label for="" class="form-label"> Name</label>
                        <input type="text" name="name" class="form-control">
                        <label for="" class="form-label"> Price</label>
                        <input type="text" name="price" class="form-control">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" class="form-control" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <input class="btn btn-secondary my-2 form-control " type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>