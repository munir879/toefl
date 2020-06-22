<div>
    @for($i=1; $i<$article ;$i++) <div wire:key="{{ $i }}" article class="row">
        <div class="col-sm-12 text-center">
            <div class="card">
                <div class="card-body" style="padding-bottom:0;">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor
</div>
