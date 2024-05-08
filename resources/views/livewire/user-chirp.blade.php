<div>

    <container>
        <div class="row mt-3">
            <div class="col-12 d-flex justify-content-center py-3">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            @foreach ($chirps->sortByDesc('id') as $chirp)
            <div class="col-12 d-flex justify-content-center py-3">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$chirp->user->name}} dice:</li>
                        <li class="list-group-item">"{{$chirp->text}}"</li>
                        <li class="list-group-item d-flex justify-content-center">
                            <button wire:click="destroy({{$chirp}})" class="btn btn-outline-danger mx-auto">Delete</button>
                            <a class="btn btn-outline-warning mx-auto" href="{{route('chirp.edit', compact('chirp'))}}">Edit</a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </container>

</div>