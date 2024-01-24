<div
    style="position:sticky; top: 5px; z-index:170;"
    class="bg-gradient-to-l
    from-orange-300 from-{{rand(1,35)}}% via-sky-500 via-{{rand(36,75)}}% to-emerald-200 to-{{rand(76,99)}}%
                     text-center">

    @foreach( $menu as $m )
        <a class="inline-block

        @if( Route::currentRouteName() == $m['route'] ) active font-bold bg-orange-200 @endif

        transition duration-150 ease-in-out

        hover:text-neutral-700
        hover:font-bold
        hover:bg-[rgba(255,255,255,0.5)]

        focus:text-neutral-700
        disabled:text-black/30



        lg:p-2
        [&.active]:text-black/90"
           href="{{ route($m['route']) }}" data-te-nav-link-ref data-te-ripple-init
           data-te-ripple-color="light"
           wire:navigate
        >{{ $m['name'] }}</a>
    @endforeach

</div>
