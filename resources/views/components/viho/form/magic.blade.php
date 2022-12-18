@foreach ($formField as $item)
    @if ($item['type']==App\View\Components\Viho\Form\InputText::class)
    <x-viho::form.input-text
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-text>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\InputDate::class)
    <x-viho::form.input-date
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"

     ></x-viho::form.input-date>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\TextArea::class)
    <x-viho::form.text-area
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.text-area>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\InputSelect::class)
    <x-viho::form.input-select
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :option="$item['option']"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-select>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\InputSelect2::class)
    <x-viho::form.input-select2
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :option="$item['option']"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-select2>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\InputHidden::class)
        <x-viho::form.input-hidden
            :id="$item['field']"
            :name="$item['field']"
            :value="$extData"
        ></x-viho::form.input-hidden>
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\CheckboxGroup::class)
         <x-viho::form.checkbox-group
            :id="$item['field']"
            :name="$item['field']"
            :model="$item['option'][0]"
            :title="$item['title']"
            :dataChecked="[$extData,$item['option'][5]]"
            :where="$item['option'][3]"
            :order="$item['option'][4]" />
    @endif
    @if ($item['type']==App\View\Components\Viho\Form\InputRadio::class)
    <x-viho::form.input-radio
        :id="$item['field']"
        :name="$item['field']"
        :label="$item['title']"
        :value="$extData"
        :option="$item['option']"
        :readonly="isset($item['readonly']) ? $item['readonly']:false"
        :datasource="isset($item['datasource']) ? $item['datasource']:null"
        :disabled="isset($item['disabled']) ? $item['disabled'] : false"
        :autofocus="isset($item['autofocus']) ? $item['autofocus'] : false"
        :tabindex="isset($item['tabindex']) ? $item['tabindex'] : null"
        :placeholder="isset($item['placeholder']) ? $item['placeholder'] : ''"
        :required="isset($item['required']) ? $item['required'] : false"
     ></x-viho::form.input-radio>
    @endif
 @endforeach
