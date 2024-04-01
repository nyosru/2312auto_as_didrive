<div class="w-full px-5">

    <style>
        .fixed-top {
            display: block;
            position: sticky;
            top: 0px;
            z-index: 100;
        }

        .fixed-top-item {
            top: 40px;
            position: sticky;
            z-index: 100;
        }
    </style>

    {{--    <h2 class="my-3 text-2xl font-bold">Заказы</h2>--}}
    {{--    items_count: {{$items_count}}--}}
    <nav class="text-center xborder-[2px] xborder-green-300 mb-3 fixed-top py-2 shadow-2xl
    bg-blue-300
    xbg-gradient-to-r xfrom-cyan-500 xto-blue-500
    ">
        <a
            {{--            href="#" --}}
            class="px-3 py-1
        @if( empty($status_show) ) bg-orange-200 @else bg-gray-200 @endif
        hover:bg-blue-300
        "
            href="{{ route('autoas.didrive.index') }}" wire:navigate
            {{--           wire:click="setFilterTypeOrder('all')"--}}
        >Все</a>
        {{--        status_show: {{$status_show}}--}}
        @foreach( $types_order as $to => $t_name )
            <a
                class="px-3 py-1 @if( $status_show == $to ) bg-orange-200 @else bg-gray-200 @endif hover:bg-blue-300"
                href="{{ route('autoas.didrive.show',['status_show' => $to ]) }}"
                wire:navigate
            >{{$t_name}}
                @if( isset($items_count[$to]) && $items_count[$to] > 0 )
                    <sup>{{ $items_count[$to] }}</sup>
                @endif
            </a>
        @endforeach

    </nav>

    {{--    <div style="max-height: 100px; overflow: auto;">items: {{ $items }}</div>--}}
    {{ $items->links() }}
    {{--    111--}}
    @foreach($items as $i )

        <div
            wire:key="{{$i->id}}"
            class="flex flex-row mt-5 p-3
          @if($loop->index%2 == 0) bg-gray-200 @else bg-gray-300 @endif
          fixed-top-item
        ">
            <span class="text-2xl font-bold">
            Заказ № {{ $i->id }} от {{ date('d-m-Y',strtotime($i->created_at) ) }}
            </span>
            <div class="ml-5" style="padding: 5px; border: 1px solid #228500;">
                <livewire:didrive.shop.v1.orderStatus
                    :order_id="$i->id"
                    lazy
                />
            </div>
        </div>
        <div class="flex flex-row
        border-l-[10px] pl-2
        @if($loop->index%2 == 0) border-gray-200 @else border-gray-300 @endif
        ">
            <div class="basis-1/4

                ">

                {{ $i->user->name ?? 'name no' }}
                <br/>
                <a
                    class="text-blue-900 hover:underline"
                    href="mailto:{{ $i->user->email ?? 'no email' }}">{{ $i->user->email ?? 'no email' }}</a>

                @if( !empty($i->user->email_verified_at) )
                    <sup class="bg-green-300 p-1"><abbr
                            title="email подтверждён {{ $i->user->email_verified_at }}">ОК</abbr></sup>
                @else
                    <sup class="bg-yellow-300 p-1"><abbr
                            title="email не подтверждён">-</abbr></sup>
                @endif


                <br/>
                @if( !empty($i->user->phone->phone) && !empty($i->user->phone->phoneNumber($i->user->phone->phone)) )
                    <a
                        class="text-blue-900 hover:underline"
                        href="tel:{{ $i->user->phone->phoneNumber($i->user->phone->phone) }}">{{ $i->user->phone->phoneNumber($i->user->phone->phone) }}</a>
                @else
                    указан номер: {{$i->user->phone->phone ?? 'no phone'}}
                @endif
                @if( !empty($i->user->phone->phone_confirm) )
                    <sup class="bg-green-300 p-1"><abbr
                            title="телефон подтверждён {{ $i->user->phone->phone_confirm }}">ОК</abbr></sup>
                @else
                    <sup class="bg-yellow-300 p-1"><abbr
                            title="телефон не подтверждён">-</abbr></sup>
                @endif
                {{--                <br/><div class="bg-orange-200">вся инфа</div>--}}
                {{--                <small>{{ str_replace(',',', ',$i->user) }}</small>--}}

            </div>
            <div class="basis-3/4 pl-1">

                @if(!empty($i->orderGoods) )
                    <table class="w-full my-3">
                        <thead>
                        <tr>
                            <th class="text-left py-2">Товар</th>
                            <th class="text-left">Цена в заказе</th>
                            <th class="text-left">Цена товара (сейчас)</th>
                            <th class="text-left">Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($i->orderGoods as $o )

                            {{--                            @if( $last_cat != $i->id )--}}
                            <tr {{ $last_cat=$i->id  }} class=" @if($loop->index%2 == 0) bg-gray-200 @else bg-blue-100 @endif ">
                                <td class="px-2 py-2" colspan="4">
                                    <livewire:didrive.shop.v1.order-item-cats
                                        :cat_id="$o->good->a_categoryid"
                                        lazy
                                    />
                                </td>
                            </tr>
                            {{--                                {{ $last_cat = $i->id }}--}}
                            {{--                            @endif--}}

                            <tr class=" @if($loop->index%2 == 0) bg-gray-200 @else bg-blue-100 @endif ">
                                <td class="pl-5 py-2">
                                    <span class="text-xl">
                                    {{$o->good->head}}
                                    </span>
                                    <sup><a class="text-blue-700 hover:underline"
                                            href="https://avto-as.ru/good/{{$o->good->a_id}}" target="_blank">на
                                            сайте</a></sup>
                                </td>
                                <td class="px-2 py-1">{{$o->price}}</td>
                                <td class="px-2 py-1">
                                    @if( empty($o->good->a_price))
                                        под заказ
                                    @else
                                        {{$o->good->a_price}}
                                    @endif
                                </td>
                                <td class="px-2 py-1">-</td>
                            </tr>

                            @if(1==2)
                                <tr>
                                    <td colspan="4">
                                    <pre>
                                        {{ print_r($o->good) }}
                                    </pre>
                                    </td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                @endif

                <livewire:didrive.shop.v1.comment
                    :order_id="$i->id"
                    :datas="$i->comments"
                    lazy
                />

                <livewire:didrive.shop.v1.order-log
                    :order_id="$i->id"
                    :created_at="$i->created_at"
                    lazy
                />

                {{--                <br/>--}}
                {{--                <div class="bg-orange-200">вся инфа</div>--}}
                {{--                <small>{{ str_replace(',',', ',$i) }}</small>--}}
            </div>
        </div>
    @endforeach

    {{ $items->links() }}

    <style>
        .nav-cats a:not(:first-child)::before {
            content: "/";
            margin: 0 5px; /* Установите желаемый отступ между разделителями и текстом */
            color: #333; /* Установите желаемый цвет разделителя */
        }
    </style>

</div>
