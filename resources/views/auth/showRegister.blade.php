<x-layout>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-8">
                <div class="text-center">Register</div>
                <form action="{{route('register')}}" method="post">
                    <labe class="form-label">Name</labe>
                    <input type="text" name="name" class="form-control">
                    <labe class="form-label">Email</labe>
                    <input type="text" name="email" class="form-control">
                    <labe class="form-label">Password</labe>
                    <input type="password" name="password" class="form-control">
                    <input type="submit" value="Register" class="btn btn-secondary form-control my-2">
                </form>
            </div>
        </div>
    </div>
</x-layout>