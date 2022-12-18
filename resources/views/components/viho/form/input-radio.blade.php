<div class="mb-3">
    {{$label}}

    @foreach ($option as $item)

    <div class="form-check">
        <input class="form-check-input" type="radio" name="{{$name}}" id="{{$name}}" value="{{$item['radioKey']}}">
        <label class="form-check-label" for="{{$name}}">
          {{$item['radioLabel']}}
        </label>
    </div>

    @endforeach
</div>
