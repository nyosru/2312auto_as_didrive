<div
    class="чmy-5 mt-1"
>
    <div class="bg-gradient-to-r from-orange-300 to-white p-2 font-bold"
         wire:click="changeShow"
    >
        История изменений <sup>{{ sizeof($data) }}</sup>
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
                {!! $log->msg !!}
                <br/>
            @endforeach


            <abbr
                title="{{ $created_at->format('d.m.Y H:i:s') }}"><b>{{ $created_at->format('d.m') }}@if( date('Y') != $created_at->format('Y') )
                        .{{ $created_at->format('Y') }}
                    @endif {{ $created_at->format('H:i') }}</b></abbr>
            создание заказа

        </div>
    @endif
</div>
