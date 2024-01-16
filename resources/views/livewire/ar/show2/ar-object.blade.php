<div>
    @if( !empty($objects))
        {{--        обьект шаблон / objects: {{ $objects }}--}}
        @foreach($objects as $o )

            <div class="border-l-[5px] border-orange-500">
                <div class="bg-orange-500 p-2 text-xl"
                     style="position:sticky; top: 110px; z-index:150;"
                >
                    {{--                    $o: {{ $o }} <br/> <br/>--}}
                    #{{$o->id}} <b>{{ $o->nomer ?? 'x' }}</b> {{ $o->name ?? 'x' }}
                </div>
                <div class="p-1">
                    <livewire:ar.show2.ar-show2-price
                        {{--            <livewire:ar.show2.ar-show2-tenant--}}
                        {{--        :item="$o" :show_id="$o->id"--}}
                        :object="$o"
                        lazy/>
                </div>
            </div>
        @endforeach
    @endif
</div>
