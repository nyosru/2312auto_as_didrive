<div
    class="my-5 "
>
    <div class="bg-gradient-to-r from-orange-300 to-white p-2 font-bold"
         wire:click="changeShow"
    >
        Лог изменений <sup>{{ sizeof($data) }}</sup>
        {{--        changeShow: {{ $show ? 1 : 2}}--}}
    </div>
    @if($show)
        <div class="bg-gradient-to-br from-white to-orange-100 border-l-[10px] border-orange-300 pb-3 pl-2">
            @foreach( $data as $log )
                {{-- если год разный то показываем, иначе только месяц и дата--}}
                <abbr
                    title="{{ $log->created_at->format('d.m.Y H:i:s') }}"><b>{{ $log->created_at->format('d.m') }}@if( date('Y') != $log->created_at->format('Y') )
                            .{{ $log->created_at->format('Y') }}
                        @endif {{ $log->created_at->format('H:i') }}</b></abbr>
                {{--            {{ $log->model }} /--}}
                {{--            {{ $log->type }} /--}}
                {!! $log->msg !!}
                <br/>
            @endforeach
        </div>
    @endif
</div>
