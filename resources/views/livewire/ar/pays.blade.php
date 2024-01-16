<div>

    <h2 class="block text-3xl my-4 ">Платежи</h2>

    @if( isset($items) )
<table class="table" >
    <thead>
    <tr>
        <th>дата</th>
        <th>обьект</th>
        <th>кто</th>
        <th>сумма</th>
    </tr>
    </thead>
    <tbody>
        @foreach( $items as $i )
            <tr>
                <td>{{ $i->date }}</td>
                <td>#{{ $i->object->nomer }}</td>
                <td>{{ $i->tenant->name }} <br/> {{ $i->tenant->phone }} </td>
                <td>{{ $i->amount }}</td>
            </tr>
            <tr><td colspan="4">
                    <small>
{{--            <div class="w-full md:w-[32%] xl:w-[24%] float-left mr-1 mb-1 p-1 pl-2 bg-gray-300">--}}


                @if( 1 == 1 )
                    {{--                    <a--}}
                    {{--                        wire:click="ArItemDelete({{ $i->id }})"--}}
                    {{--                        onclick="return confirm('удалить ?')"--}}
                    {{--                        href="#" class="bg-red-100 hover:bg-red-500 float-right px-2">X</a>--}}

                    {{ str_replace(',',', ',$i) }}

                    {{--                <br/>--}}
                    {{--                <br/>--}}
                    {{--                {{ $i->id }}--}}
                    {{--                <strong>{{ $i->name }}</strong>--}}
                    {{--                <br/>--}}
                    {{--                {{ $i->address }}--}}
                    {{--                <br/>--}}
                    {{--                <small>--}}
                    {{--                    #{{ $i->group_id }}--}}
                    {{--                    {{ $i->group->name }}--}}
                    </small>
                @endif
{{--            </div>--}}
                </td></tr>
        @endforeach
            </tbody>
        </table>
        <br clear="all"/>

        {{ $items->links() }}

    @endif

</div>
