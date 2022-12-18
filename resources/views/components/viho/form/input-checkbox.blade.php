<div class="mb-3 form-check">
    <label for="{{$name}}" class="form-check-label">{{$label}}</label>
    <input type="checkbox" {{$checked}} id="{{$id}}" name="{{$name}}" {{ $attributes->merge(['class'=>'form-check-input']) }} value="{{$value}}"/>
</div>

