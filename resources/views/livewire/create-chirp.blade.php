<div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <form class="rounded-4 shadow bg-secondary-subtle p-3" wire:submit="store">
                    <div class="mb-3">
                        <!-- <label for="text" class="form-label">Chirp:</label> -->
                        <textarea name="text" wire:model="text" placeholder="Cosa penso..." class="form-control" rows="2" id="text"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">#tag</label>
                        <input type="text" wire:model="tags" class="form-control" placeholder="#live #love #laugh" id="tags">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-light">CHIRP</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>