<div>
    {{-- The best athlete wants his opponent at his best. --}}
    пай шаблон    <br/>
{{--    price: {{ str_replace(',',', ',$price) }}    <br/>--}}
{{--    pays: {{ str_replace(',',', ',$pays) }} <br/>--}}

    @foreach($pays as $p)
        <div class="mb-1 p-2 border-l-4 border-red-200">
        $p: {{ str_replace(',',', ',$p) }} <br/>
        </div>
    @endforeach

</div>
