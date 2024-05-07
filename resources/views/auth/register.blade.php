<x-layout title="Register">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <form class="rounded-4 shadow bg-secondary-subtle p-3" action="{{'register'}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="namelHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp">
                        <div id="passwordHelp" class="form-text">(8-20 character, A-a, 1-9, !@#$%)</div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div> -->
                    <div class="text-center ">
                        <button type="submit" class="btn btn-outline-light">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>