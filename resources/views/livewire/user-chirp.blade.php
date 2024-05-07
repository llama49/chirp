<div>

    <container>
        <div class="row justify-content-between  mt-3">
            @foreach ($chirps->sortByDesc('id') as $chirp)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$chirp->user->name}} dice:</li>
                        <li class="list-group-item">{{$chirp->text}}</li>
                        <li class="list-group-item"><button wire:click="destroy({{$chirp}})" class="btn btn-outline-danger">Elimina</button></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </container>

</div>
