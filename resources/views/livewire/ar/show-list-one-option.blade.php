<div>
    {{--    da:<pre>{{ print_r($da,true) }}</pre>--}}
    {{--    objects:<pre>{{ print_r($objects,true) }}</pre>--}}

    {{--    show-list-one.blade.php--}}
    {{--    -----    @if( !empty($show_id ) ) {{ $show_id ?? 'x'}} @endif    -----}}
    {{--    <br/>--}}
    {{--    <br/>--}}
    {{--    @if( !empty($da ) ) {{ $da ?? 'x'}} @endif--}}
    {{--    {{ $item ?? 'xx' }}--}}
    <div class="text-[0.7rem] border-2 border-[#3b71ca] p-2">
        $item
        <br/>
        {{ str_replace(',',', ',$item ?? '--') }}
        <br/>
        <br/>
        $prices
        <br/>
        {{ str_replace(',',', ',$prices ?? '--') }}
    </div>

    <div class="container">
        <table class="table-auto">
            <thead>
            <tr>
                <th>Кто</th>
                <th>Дата</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prices as $p)
                <tr>
                    <td>{{ $p->tenant[0]->name ?? '-' }}</td>
                    <td>{{ $p->date_start }}</td>
                    <td>{{ $p->price }}</td>
                </tr>
                <tr>
                    <td colspan="3">{{ str_replace(',',', ',$p ) }}</td>
                </tr>
            @endforeach

            {{--        <tr>--}}
            {{--            <td>11</td>--}}
            {{--            <td>22</td>--}}
            {{--            <td>33</td>--}}
            {{--        </tr>--}}

            </tbody>
        </table>
    </div>
</div>
