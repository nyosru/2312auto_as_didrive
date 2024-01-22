<div>
    Статус заказа:
    @foreach( $types_order as $to => $t_name )
        <a href="#"
           class="px-3 py-1 @if( $now[0]->status == $to ) bg-orange-200 @else bg-gray-200 @endif hover:bg-blue-300"
           wire:click.prevent="setStatus('{{$now[0]->id}}','{{$to}}')"
           wire:confirm="Изменить статус заказа #{{ $now[0]->id }} на: {{$t_name}} ?"
        >{{$t_name}}</a>
    @endforeach
</div>
