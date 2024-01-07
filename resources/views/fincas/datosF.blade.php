<form action="{{ route('fincas.viewReport') }}" class="row g-3 my-2" method="post">
    @csrf
    <div class="row g-2">
        <div class="col-md-2">
            <div class="form-floating">
                <select class="form-select" id="ano" name="ano" aria-label="Floating label select example">
                    <option selected>Selecciona un año</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-floating">
                <select class="form-select" id="finca" name="finca" aria-label="Floating label select example">
                    <option selected>Selecciona una finca</option>
                    @foreach ($fincas as $finca)
                    <option value="{{ $finca->id }}">{{ $finca->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Reporte finca</button>
    </div>
</form>