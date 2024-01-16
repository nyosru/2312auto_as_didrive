<div>
    {{ $item->date_start }} - {{ $item->date_end }}
    <a href="#"
       class="bg-green px-2 py-1 underline "
       wire:confirm="удалить {{ $item->date_start }} - {{ $item->date_end }} ?"
       wire:click.prevent="delete({{$item->id}})"
    >удалить</a>
</div>
