<table class="table vihoCheckBoxGroup  table-hover" id={{$id}}>
    <thead>
        <tr>
            <th width='2%'><input type="checkbox" id="checkAll" /></th>

            @foreach ($column as $c)
            <th>{{$c['title']}}</th>
            @endforeach

        </tr>
    </thead>
    <tbody>
        @foreach ($record as $item)
            <tr>
                <td scope="row">
                    @php
                         $checked='';
                    @endphp
                @if ($dataChecked)
                    @foreach ($dataChecked as $dc)
                    @if($dc->id==$item->id)
                        @php
                             $checked='checked';
                        @endphp

                    @endif
                    @endforeach
                @else
                       @php
                           $checked='';
                       @endphp
                @endif
                <input type="checkbox" {{ $checked }} name="{{$name}}[]" class='form-check-input' value="{{$item->id}}"/>

                </td>
                @foreach ($column as $col)
                   <td >{{ substr(strip_tags($item->{$col['field']}),0,200) }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>

</table>
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('table.vihoCheckBoxGroup').DataTable({
            paging: false,
            info: false,sort:false
        });

        $('#checkAll').click(function(){
            $('input:checkbox').not(this).prop('checked',this.checked);
        });
    });
</script>
@endpush
