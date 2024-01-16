<div>

    {{--    da:<pre>{{ print_r($da,true) }}</pre>--}}
    {{--    objects:<pre>{{ print_r($objects,true) }}</pre>--}}

    <ul class="timeline">
        @foreach($objects as $o )
            @if( $now_group != $o->group->name )
                <li>
                    {{ $now_group = $o->group->name }}
                    @endif

                    <ul>
                        <li>

                            @if(1==2)
                            #{{ $o->id }}<br/>
                            {{ $o->name }} // {{ $o->address }}

                            <br/>
                            xx {{ $o->id  }} xx
                            <br/>
                            @endif

                            <livewire:ar.showListOneOption :item="$o" :show_id="$o->id" lazy/>


                            @if(1==2)
                                <ul>
                                    @foreach($o->prices as $op )
                                        <li>
                                            {{ $op->tenant  }}
                                            <br/>
                                            @foreach($op->tenant as $opt )
                                                <b>чел цены {{ $opt->name }}</b>
                                                <br/>
                                            @endforeach
                                            <br/>
                                            <b>новая цена: {{ $op->price }}</b>
                                            {{ $op->date_start }}
                                            <Small>{{ $op->opis }}</Small>
                                            <br/>
                                            {{-- день старта: {{ date( 'd', strtotime($op->date_start)) }}--}}
                                            день старта: {{ $day = date( 'd', strtotime($op->date_start)) }}
                                            <br/>

                                            @foreach( $listMonth as $y => $y1 )
                                                @foreach( $y1 as $m => $m1 )
                                                    @if( strtotime( $y.'-'.$m.'-'.$day) >= strtotime(date( 'Y-m-'.$day, strtotime($op->date_start))) )

                                                        {{-- с {{ $y }}-{{ $m  }}-{{ $day }} --}}
                                                        c {{ date( 'Y-m-d', strtotime( $y .'-'. $m .'-'. $day ) ) }}
                                                        по {{ date( 'Y-m-d', strtotime( $y .'-'. $m .'-'. $day .' +1 month -1 day') ) }}

                                                        <input type="date" value="{{ date('Y-m-d') }}"/>
                                                        <input type="date" value="{{ date('Y-m-d') }}"/>
                                                        <input type="number" step="100" min="100" size="6"
                                                               value="{{ round($op->price/100)*100 }}"/>
                                                        <button class="button bg-green-300 px-3 py-1">оплачено</button>
                                                        <button class="button bg-red-300 px-3 py-1">не оплачено</button>

                                                        <br/>
                                                    @endif
                                                @endforeach
                                            @endforeach

                                            <div class="p-3 my-3 border-2 border-[#9fa6b2] ">
                                                Оплата /
                                                с&nbsp;<input type="date" value="{{ date('Y-m-d') }}"/>
                                                по&nbsp;<input type="date" value="{{ date('Y-m-d') }}"/>
                                                сумма&nbsp;<input type="number" step="100" min="100" size="6"
                                                                  value="{{ round($op->price/100)*100 }}"/>
                                                <div class="my-1">
                                                    коментарий <input type="text"/>
                                                </div>
                                                <button class="button bg-green-300 px-3 py-1">оплачено</button>
                                            </div>

                                            {{--                                    <div style="font-size: 8px; max-height: 150px; overflow: auto;">--}}
                                            {{--                                    <pre>{{ print_r($op) }}</pre>--}}
                                            {{--                                    </div>--}}

                                        </li>
                                    @endforeach


                                    {{--                            @foreach( $listMonth as $y => $y1 )--}}
                                    {{--                                @foreach( $y1 as $m => $m1 )--}}
                                    {{--                                    {{ $y }} {{ $m  }}<br/>--}}
                                    {{--                                @endforeach--}}
                                    {{--                            @endforeach--}}


                                </ul>
                            @endif

                            {{--                        <div style="font-size: 8px; max-height: 150px; overflow: auto;">--}}
                            {{--                            <pre>--}}
                            {{--                            {{ print_r($o) }}--}}
                            {{--                            </pre>--}}
                            {{--                        </div>--}}

                        </li>
                    </ul>
                    @if( $now_group == $o->group->name )
                        {{--            </li>--}}
                    @else
                </li>
            @endif
        @endforeach

        {{--        <li>111--}}

        {{--            <ul>--}}
        {{--                <li>111--}}
        {{--                    <ul>--}}
        {{--                        <li>111</li>--}}
        {{--                        <li>111</li>--}}
        {{--                        <li>111</li>--}}
        {{--                        <li>111</li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--                <li>111</li>--}}
        {{--                <li>111</li>--}}
        {{--                <li>111</li>--}}
        {{--            </ul>--}}

        {{--        </li>--}}
        {{--        <li>111</li>--}}
        {{--        <li>111</li>--}}
        {{--        <li>111</li>--}}

    </ul>


    <style>
        .timeline li {

            padding-left: 25px;
            border-left: 3px solid green;

            border-top: 3px solid rgba(0, 255, 0, 0.2);
            background-color: rgba(0, 255, 0, 0.1);

            padding-top: 5px;

            margin-bottom: 5px;
            padding-bottom: 5px;

        }
    </style>


</div>
