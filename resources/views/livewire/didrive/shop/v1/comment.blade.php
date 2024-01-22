<div>
    {{--    коменты--}}
    {{--    <br/>--}}
    {{--    order_id: {{ $order_id ?? 'x' }}--}}
    {{--    <br/>--}}
    {{--    data: {{ $data ?? [] }}--}}
    <div class="p-1" style="max-height: 150px; overflow-y: auto;">
        @foreach($data as $d)
            {{--            {{ $d }}--}}

            <button class="text-xl text-red-300 hover:text-red-600 hover:font-bold"
                    wire:click="delete({{ $d->id }})"
                    wire:confirm="удалить комментарий ?"
            >X
            </button>

            @if( !empty($d->created_at) )
                <b>{{ $d->created_at->format('d.m H:i') }}</b>
            @endif
            {{ $d->text }}
            <br/>
        @endforeach
    </div>
    <br/>
    {{--    фомрочка их добавить--}}
    <form wire:submit="save" class="text-center">
        <input type="hidden" wire:model="order_id" value="{{$order_id}}"/>
        <textarea wire:model="text" placeholder="добавить комент (текст)"
                  class="w-[95%] p-1 border-2 border-gray-300"></textarea>
        <button type="submit" class="bg-[#6dff6d] rounded-md px-3 py-1">Добавить</button>
    </form>
</div>
