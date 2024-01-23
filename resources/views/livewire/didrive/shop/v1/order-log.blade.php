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
                <b>{{ $log->created_at->format('d.m H:i') }}</b>
                {{--            {{ $log->model }} /--}}
                {{--            {{ $log->type }} /--}}
                {!! $log->msg !!}
                <br/>
            @endforeach
        </div>
    @endif
</div>
