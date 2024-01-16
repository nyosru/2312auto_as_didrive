<div>

    {{--    прайс шаблон--}}

    @if( !empty($prices) )
{{--        прайс шаблон--}}

        {{--        prices: {{ $prices }}<br/><br/>--}}
        @foreach( $prices as $p )

            <div class="mb-3 border-l-[5px] border-blue-400">

                <div class="bg-blue-400 p-2 text-xl"
                     style="position:sticky; top: 160px; z-index:140;"
                >
                    {{--                    $o: {{ $o }} <br/> <br/>--}}
                    #{{$p->id}} p: {{ str_replace(',',', ',$p) }}
                </div>1

                <div class="p-1">
                    {{--                $p: {{ str_replace(',',', ',$p) }} <br/><br/>--}}

                    <livewire:ar.show2.ar-show2-pay
                        {{--            <livewire:ar.show2.ar-show2-tenant--}}
                        {{--        :item="$o" :show_id="$o->id"--}}
                        :price="$p"
                        lazy
                    />

                    <br/>
                    <livewire:ar.show2.ar-show2-payed
                        {{--            <livewire:ar.show2.ar-show2-tenant--}}
                        {{--        :item="$o" :show_id="$o->id"--}}
                        :tenant_id="$p->ar_tenant_id"
                        :object_id="$p->ar_object_id"
                        lazy
                    />
                    <br/>
                    <br/>
                    <livewire:ar.show2.ar-show2-payed-add-form
                        :ar_tenant_id="$p->ar_tenant_id"
                        :ar_object_id="$p->ar_object_id"
                        lazy
                    />
                </div>
            </div>

        @endforeach
</div>
@endif
</div>
