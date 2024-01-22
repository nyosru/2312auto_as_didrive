<div class="w-full px-5">
    <h2 class="my-3 text-2xl font-bold">Заказы</h2>
    {{--    items_count: {{$items_count}}--}}
    <nav class="text-center xborder-[2px] xborder-green-300 mb-3">
        <a href="#" class="px-3 py-1
        @if( $type_order == 'all' ) bg-orange-200 @else bg-gray-200 @endif
        hover:bg-blue-300
        "
           wire:click="setFilterTypeOrder('all')"
        >Все</a>

        @foreach( $types_order as $to => $t_name )
            <a href="#"
               class="px-3 py-1 @if( $type_order == $to ) bg-orange-200 @else bg-gray-200 @endif hover:bg-blue-300"
               wire:click="setFilterTypeOrder('{{ $to }}')"
            >{{$t_name}} @if( isset($items_count[$to]) && $items_count[$to] > 0 )
                    <sup>{{ $items_count[$to] }}</sup>
                @endif</a>
        @endforeach

    </nav>

    {{--    <div style="max-height: 100px; overflow: auto;">items: {{ $items }}</div>--}}
    {{ $items->links() }}
    {{--    111--}}
    @foreach($items as $i )

        <div class="flex flex-row mt-5 p-3
          @if($loop->index%2 == 0) bg-gray-200 @else bg-gray-300 @endif
        ">

            <span class="text-2xl font-bold">
            Заказ № {{ $i->id }} от {{ date('d-m-Y',strtotime($i->created_at) ) }}
            </span>

            <div class="ml-5" style="padding: 5px; border: 1px solid #228500;">
                <livewire:didrive.shop.v1.orderStatus
                    :order_id=" $i->id "
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
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left">Товар</th>
                            <th class="text-left">Цена в заказе</th>
                            <th class="text-left">Цена товара (сейчас)</th>
                            <th class="text-left">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($i->orderGoods as $o )
                            <tr class=" @if($loop->index%2 == 0) bg-gray-200 @else bg-blue-100 @endif ">
                                <td class="px-2 py-1">{{$o->good->head}}
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
                        @endforeach
                        </tbody>
                    </table>
                @endif

                    <div
                        class="mt-5 bg-gradient-to-br from-white to-green-100 border-l-[10px] border-green-300 pb-3">
                        <div class="bg-gradient-to-r from-green-300 to-white p-2 font-bold">
                            комментарии
                        </div>

                        <livewire:didrive.shop.v1.comment
                            :order_id=" $i->id "
                            :datas=" $i->comments "
                            lazy
                        />
                    </div>





                    {{--                <br/>--}}
{{--                <div class="bg-orange-200">вся инфа</div>--}}
{{--                <small>{{ str_replace(',',', ',$i) }}</small>--}}
            </div>
        </div>
    @endforeach

    {{ $items->links() }}

</div>
