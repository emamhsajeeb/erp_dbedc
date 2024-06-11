<div class="col-sm-3">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption1" class="select2 floating select">
            @foreach ($options1 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        <label class="focus-label">Select Month</label>
    </div>
</div>
<div class="col-sm-3">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption2" class="select2 floating select">
            @foreach ($options2 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        <label class="focus-label">Select Year</label>
    </div>
</div>



@push('scripts')
<script>
    $(document).ready(function() {
        $('#select2').select2();
    });
</script>
@endpush
