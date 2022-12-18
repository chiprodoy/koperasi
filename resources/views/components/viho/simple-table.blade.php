<div class="table-responsive">
    <table class="table table-sm table-stripe">
        <thead class="{{$theadClass}}">
            <tr>
                @foreach ($column as $col)
                    <th scope="col">{{$col['title']}}</th>
                @endforeach
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
            {{-- @canany(['update', 'delete'], $item) --}}

                <tr>
                    @foreach ($column as $col)

                        @if ($loop->first)
                            <td >
                                @if (isset($showButton))
                                    @if (strpos($showButton,'http')===0)
                                        <a href="{{ $showButton }}">{{ substr(strip_tags($item->{$col['field']}),0,200) }}</a>
                                    @else
                                        <a href="{{ route($showButton,$item->uid) }}">{{ substr(strip_tags($item->{$col['field']}),0,200) }}</a>
                                    @endif
                                @else
                                        {{ substr(strip_tags($item->{$col['field']}),0,200) }}
                                @endif
                            </td>
                        @else
                            @if (isset($col['render']))
                                <td>
                                    @php
                                        //$rndr=$col['render'][0]::find($item->{$col['field']});
                                        //echo $rndr->{$col['render'][1]};

                                    @endphp
                                    {{ $col['render']($item->{$col['field']}) }}

                                </td>
                            @else
                                <td >{{ substr(strip_tags($item->{$col['field']}),0,200) }}</td>

                            @endif
                        @endif
                    @endforeach
                    @if(isset($editButton) || isset($deleteButton))

                        <td>
                            <div class="row">
                                @isset($editButton)
                                    @can('update', $item)
                                        @if (strpos($editButton,'http')===0)
                                            <x-viho::link-button class="btn-secondary btn-sm" href='{{ $editButton}}'><i data-feather="pencil"></i>Edit</x-viho::link-button>
                                        @else
                                            <x-viho::link-button class="btn-secondary btn-sm" href='{{ route($editButton,$item->id) }}'><i data-feather="pencil"></i>Edit</x-viho::link-button>
                                        @endif
                                    @endcan
                                @endisset
                                @isset($deleteButton)
                                    @can('delete', $item)
                                        @if (strpos($deleteButton,'http')===0)
                                            <x-viho::button class="btn-danger btn-sm" onclick="destroy('{{ $deleteButton}}')"><i data-feather="trash-2"></i>Delete</x-viho::button>
                                        @else
                                            <x-viho::button class="btn-danger btn-sm" onclick="destroy('{{ route($deleteButton,$item->id) }}')"><i data-feather="trash-2"></i>Delete</x-viho::button>
                                        @endif
                                    @endcan
                                @endisset
                            </div>
                        </td>
                    @endif

                </tr>
            {{-- @endcanany --}}
        @endforeach
        </tbody>
    </table>
</div>
