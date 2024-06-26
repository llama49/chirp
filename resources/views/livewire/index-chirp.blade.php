<div>

    <container>
        <div class="row mt-3">
            @foreach ($chirps->sortByDesc('id') as $chirp)
            <div class="col-12 d-flex justify-content-center py-3">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$chirp->user->name}} dice:</li>
                        <li class="list-group-item">"{{$chirp->text}}"</li>
                        <li class="list-group-item">
                            @foreach ($chirp->tags as $tag)
                            <span class="badge text-bg-dark">#{{$tag->name}}</span>
                            @endforeach                            
                        </li>
                        <!-- <li class="list-group-item">A third item</li> -->
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </container>

</div>