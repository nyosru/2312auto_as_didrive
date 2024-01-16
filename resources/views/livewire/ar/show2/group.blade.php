<div>
    {{--        $groups {{ $groups }}<br/>--}}
    @foreach( $groups as $g )
        {{-- {{ $g }}<br/> --}}

        <div class="ml-0 bg-green-500 p-2 border-green-400 text-3xl"
        style="position:sticky; top: 50px; z-index: 160;"
        >
            #{{$g->id}} <b>{{ $g->name }}</b>
            <sup>{{ $g->address }}</sup>
        </div>

        <div class="ml-0 mb-3 pt-1 pl-1 border-l-[5px] border-green-400">

            <livewire:ar.show2.ar-object
                {{--        :item="$o" :show_id="$o->id"--}}
                :group="$g"
                lazy/>


        </div>
{{--        <br/>--}}
{{--        <br/>--}}
    @endforeach
</div>
