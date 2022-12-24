
    <div class="table-responsive">
        <table class="table table-sm table-stripe">
            <thead class="{{$theadClass}}">
                <tr>
                    <th scope="col">#</th>

                    @foreach ($column as $col)
                        <th scope="col">{{$col['title']}}</th>
                    @endforeach
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record as $item)
                    @canany(['view', 'read'], $item)
                        <tr>
                            <td scope="row"><input type="checkbox" class="datachecked" value="{{ $item->id}}"/></td>
                            @foreach ($column as $col)

                                @if ($loop->first)
                                    <td width='15%'>
                                        @if (isset($showButton))
                                            @if (strpos($showButton,'http')===0)
                                                <a href="{{ $showButton }}">{{ substr(strip_tags($item->{$col['field']}),0,200) }}</a> </td>
                                            @else
                                                <a href="{{ route($showButton,$item->uuid) }}">{{ substr(strip_tags($item->{$col['field']}),0,200) }}</a> </td>
                                            @endif
                                        @else
                                            {{ substr(strip_tags($item->{$col['field']}),0,200) }}
                                        @endif

                                @else
                                    @if (isset($col['render']))
                                        <td>
                                            @php
                                                if(is_array($col['render'])){
                                                    $rndr=$col['render'][0]::find($item->{$col['field']});
                                                    echo $rndr->{$col['render'][1]};
                                                }else{
                                                    echo $item->{$col['render']}($item->{$col['field']});
                                                }

                                            @endphp
                                        </td>
                                    @else
                                        <td >{{ substr(strip_tags($item->{$col['field']}),0,200) }}</td>

                                    @endif
                                @endif
                            @endforeach
                                <td>
                                    <div class="row">
                                        @isset($editButton)
                                            @can('update', $item)
                                                @if (strpos($editButton,'http')===0)
                                                    <x-viho::link-button class='btn btn-warning btn-sm' href='{{ $editButton}}' title="Edit"><i class="fa fa-pencil"></i></x-viho::link-button>
                                                @else
                                                    <x-viho::link-button class='btn btn-warning btn-sm' href='{{ route_from($editButton,$item) }}' title="Edit"><i class="fa fa-pencil"></i></x-viho::link-button>
                                                @endif
                                            @endcan
                                        @endisset
                                        @isset($deleteButton)
                                            @can('delete', $item)
                                                @if (strpos($deleteButton,'http')===0)
                                                    <x-viho::link-button class="btn btn-danger btn-sm" title="hapus" href="#" onclick="destroy('{{ $deleteButton}}')"><i data-feather="fa fa-trash-o"></i></x-viho::button>
                                                @else
                                                    <x-viho::link-button class="btn btn-danger btn-sm" title="hapus" href="#" onclick="destroy('{{ route($deleteButton,$item->uuid) }}')"><i class="fa fa-trash-o"></i></x-viho::button>
                                                @endif
                                            @endcan
                                        @endisset

                                    </div>
                                </td>
                        </tr>
                     @endcanany
                @endforeach
            </tbody>
        </table>
        @if ($record instanceof \Illuminate\Pagination\AbstractPaginator)
            {{$record->links()}}
            Menampilkan record {{$record->firstItem()}} sampai {{ $record->total() }}

        @endif
    </div>
