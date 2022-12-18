<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <select
         id="{{$id}}"
         name="{{$name}}"
        {{ $attributes->merge(['class'=>'form-select select2']) }}
    >
        <option value="">Silahkan Pilih</option>

            @foreach ($option as $item)
            @if(isset($optionKey))
                @if (isset($value) && $item->$optionKey==$value->$name)
                <option value="{{$item->$optionKey}}" selected>{{$item->$optionValue}}</option>
                @else
                    <option value="{{$item->$optionKey}}">{{$item->$optionValue}}</option>
                @endif
            @else
                @if (isset($value) && $item==$value->$name)
                <option value="{{$item}}" selected>{{$item}}</option>
                @else
                    <option value="{{$item}}">{{$item}}</option>
                @endif

            @endif


            @endforeach

     </select>
</div>
