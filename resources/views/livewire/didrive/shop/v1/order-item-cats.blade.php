<div class="nav-cats2">
    {{--        {{ $cat_id }}--}}
    {{--    //--}}
    {{--    <pre>--}}
    {{--        {{ print_r($links,true)  }}--}}
    {{--</pre>--}}

    {{--    @if(1==2)--}}

    {{--    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M853.333333 256H469.333333l-85.333333-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v170.666667h853.333334v-85.333334c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFA000"></path><path d="M853.333333 256H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v426.666667c0 46.933333 38.4 85.333333 85.333334 85.333333h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333V341.333333c0-46.933333-38.4-85.333333-85.333334-85.333333z" fill="#FFCA28"></path></g></svg>--}}
    <span style="float:left;" class="pr-2">
    <svg width="16px" height="16px" viewBox="0 0 1024 1024" class="icon" version="1.1"
         xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g
            id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path
                d="M853.333333 256H469.333333l-85.333333-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v170.666667h853.333334v-85.333334c0-46.933333-38.4-85.333333-85.333334-85.333333z"
                fill="#FFA000"></path><path
                d="M853.333333 256H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v426.666667c0 46.933333 38.4 85.333333 85.333334 85.333333h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333V341.333333c0-46.933333-38.4-85.333333-85.333334-85.333333z"
                fill="#FFCA28"></path></g></svg>
</span>
    <span class="nav-cats">
    @for( $l = 10; $l>=0; $l--)
            {{--        {{ $l  }} ++--}}
            {{--            <pre>            {{ print_r($l) }} /            </pre>--}}
            @if( !empty($links[$l][0]['head']) )
                <a class="text-sm font-medium
            text-gray-500
            hover:text-black
            xhover:bg-blue-200
            hover:underline
             xpx-2 py-1 rounded"
                   href="">{{$links[$l][0]['head']}}</a>
            @endif
            {{--            "{{ $l]['head'] }} /--}}
        @endfor
        {{--        @endif--}}





        {{--    <nav class="flex" aria-label="Breadcrumb">--}}
        {{--        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">--}}


        {{--            @for( $l = 10; $l>=0; $l--)--}}
        {{--                --}}{{--        {{ $l  }} ++--}}
        {{--                --}}{{--            <pre>            {{ print_r($l) }} /            </pre>--}}
        {{--                @if( !empty($links[$l][0]['head']) )--}}

        {{--            <li class="inline-flex items-center">--}}
        {{--                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">--}}
        {{--                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
        {{--                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>--}}
        {{--                    </svg>--}}
        {{--                    {{$links[$l][0]['head']}}--}}
        {{--                </a>--}}
        {{--            </li>--}}
        {{--                @endif--}}
        {{--                --}}{{--            "{{ $l]['head'] }} /--}}
        {{--            @endfor--}}


        {{--            <li>--}}
        {{--                <div class="flex items-center">--}}
        {{--                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
        {{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
        {{--                    </svg>--}}
        {{--                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>--}}
        {{--                </div>--}}
        {{--            </li>--}}
        {{--            <li aria-current="page">--}}
        {{--                <div class="flex items-center">--}}
        {{--                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
        {{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
        {{--                    </svg>--}}
        {{--                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>--}}
        {{--                </div>--}}
        {{--            </li>--}}
        {{--        </ol>--}}
        {{--    </nav>--}}


</span>
</div>
