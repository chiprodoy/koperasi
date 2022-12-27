@foreach (\App\Models\Post::$formFields as $item)
@php
    $readOnly=isset($item['readonly']) ? $item['readonly']: false;
    $inputType=$item['type'];

    if (Auth::user()->cannot('modify', $RECORD->slug.':'.$item['field'])) {
        $readOnly=true;
        if($item['field']=='post_type'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
            $RECORD->post_type='blog';
        }
        if($item['field']=='post_status'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
            $RECORD->post_type='publish';
        }
        if($item['field']=='post_category'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
        }
        if($item['field']=='slug'){
            $inputType=App\View\Components\Viho\Form\InputHidden::class;
        }
    }

@endphp


    @if ($inputType==App\View\Components\Viho\Form\InputText::class)
    <x-viho::form.input-text
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$RECORD"
        :readonly="$readOnly"
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
        :value="$RECORD"
        :readonly="$readOnly"
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
        :value="$RECORD"
        :readonly="$readOnly"
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
        :value="$RECORD"
        :option="$item['option']"
        :readonly="$readOnly"
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
        :value="$RECORD"
        :option="$item['option']"
        :readonly="$readOnly"
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
            :value="$RECORD"
        ></x-viho::form.input-hidden>
    @endif
    @if ($inputType==App\View\Components\Viho\Form\CheckboxGroup::class)
         <x-viho::form.checkbox-group
            :id="$item['field']"
            :name="$item['field']"
            :model="$item['option'][0]"
            :title="$item['title']"
            :dataChecked="[$extData,$item['option'][5]]"
            :where="$item['option'][3]"
            :order="$item['option'][4]" />
    @endif
    @if ($inputType==App\View\Components\Viho\Form\InputRadio::class)
    <x-viho::form.input-radio
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$RECORD"
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
        :value="$RECORD"
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
