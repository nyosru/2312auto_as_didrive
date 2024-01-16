<div>
    <div class="ml-5 p-2 border-l-4 border-cyan-200">
        <div class="bg-green-300 p-2">оплаты

        </div>

        {{--    {{ $tenant_id ?? 'x1' }}--}}
        {{--    {{ $object_id ?? 'x2' }}--}}
        {{--    <br/>--}}
        {{--    <br/>--}}
        {{--    payeds: {{ $payeds }}--}}
        @foreach( $payeds as $pa )
{{--            $pa: {{ $pa }}--}}
{{--        {{ $pa->date_start }} - {{ $pa->date_end }}--}}
            <livewire:ar.show2.ar-show2-payed-item
                :key="$pa->id"
                {{--            <livewire:ar.show2.ar-show2-tenant--}}
                {{--        :item="$o" :show_id="$o->id"--}}
                :item="$pa"
{{--                lazy--}}
            />
{{--            <Br/>--}}
        @endforeach
    </div>
</div>
