@foreach (\App\Models\Post::$formFields as $item)

@php
    $readOnly=isset($item['readonly']) ? $item['readonly']: false;
    $inputType=$item['type'];
    $value=$RECORD->{$item['field']};
    $condition=null;

    if (Auth::user()->cannot('modify', 'berita:'.$item['field'])) {
        $readOnly=true;
        if($item['field']=='post_type'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
            $value='blog';

        }
        if($item['field']=='post_status'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
        }
        if($item['field']=='post_category'){
            $condition=['in'=>['slugs'=>['headline']]];
        }


    }

@endphp


    @if ($inputType==App\View\Components\Viho\Form\InputText::class)
    <x-viho::form.input-text
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :readonly="$readOnly"
        :value="$value"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-text>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputDate::class)
    <x-viho::form.input-date
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :readonly="$readOnly"
        :value="$value"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"

     ></x-viho::form.input-date>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\TextArea::class)
    <x-viho::form.text-area
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :readonly="$readOnly"
        :value="$value"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.text-area>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputSelect::class)
    <x-viho::form.input-select
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :option="$item['option']"
        :readonly="$readOnly"
        :value="$value"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-select>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputSelect2::class)
    <x-viho::form.input-select2
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :option="$item['option']"
        :readonly="$readOnly"
        :value="$value"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-select2>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputHidden::class)
        <x-viho::form.input-hidden
            :id="$item['field']"
            :name="$item['field']"
            :value="$value"
        ></x-viho::form.input-hidden>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\CheckboxGroup::class)
         <x-viho::form.checkbox-group
            :id="$item['field']"
            :name="$item['field']"
            :model="$item['option'][0]"
            :title="$item['title']"
            :dataChecked="[$extData,$item['option'][5]]"
            :where="$condition"
            :order="$item['option'][4]" />
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputRadio::class)
    <x-viho::form.input-radio
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :option="$item['option']"
        :readonly="$readOnly"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-radio>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputFile::class)
    <x-viho::form.input-file
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :readonly="$readOnly"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"

     ></x-viho::form.input-file>
    @endif
 @endforeach
 <input type="hidden" name="modname" id="modname" value="{{$modName}}" />
 <input type="hidden" name="post_category[]" id="post_category[]" value="{{$modName}}" />

