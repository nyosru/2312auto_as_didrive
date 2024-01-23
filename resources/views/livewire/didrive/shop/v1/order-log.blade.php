<div
    class="чmy-5 mt-1"
>
    <div class="bg-gradient-to-r from-orange-300 to-white p-2 font-bold"
         wire:click="changeShow"
    >
        История изменений <sup>{{ sizeof($data) }}</sup>
        {{--        changeShow: {{ $show ? 1 : 2}}--}}
    </div>
    @if($show)
        <div class="bg-gradient-to-br from-white to-orange-100 border-l-[10px] border-orange-300 pb-3 pl-2"
        style="max-height: 150px; overflow-y: auto;">
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
