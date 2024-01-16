<div>

    <h2 class="block text-3xl my-4 ">Группы</h2>

    {{--    <div class="widht-w bg-green p-2">--}}
    {{--        #status ar_group_status--}}
    {{--    </div>--}}
    {{--    ar_group_status: {{ $ar_group_status ?? '' }}--}}

    @if(1==2)
        <form>

            <input type="text"/>
            <div>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <input type="text"/>
            <div>
                @error('address') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Добавить
                <div wire:loading class="bg-green-500 p-2 text-2xl">
                    пару сек, добавляю
                </div>
            </button>

        </form>
    @endif

    {{-- Be like water. --}}
    @if( isset($groups) )

        @foreach( $groups as $g )
            <div class="w-full md:w-[32%] xl:w-[24%] float-left mr-1 mb-1 p-1 pl-2 bg-gray-300">
                <a
                    wire:click="ArGroupItemDelete({{ $g->id }})"
                    onclick="return confirm('удалить ?')"

                    href="#" class="bg-red-100 hover:bg-red-500 float-right px-2">X</a>
                {{-- {{ $g }} --}}
                {{ $g->id }}
                <strong>{{ $g->name }}</strong>
                <br/>
                {{ $g->address }}
            </div>
        @endforeach

        <br clear="all"/>

        {{ $groups->links() }}

    @endif


    <br clear="all"/>

    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit="ArGroupSave">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Название
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text"
                    wire:model="name" placeholder="name"
                >
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Адресс
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="address"
                    type="text"
                    wire:model="address" placeholder="address">
                {{--                <p class="text-red-500 text-xs italic">Please choose a password.</p>--}}
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Добавить
                </button>
                {{--                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">--}}
                {{--                    Forgot Password?--}}
                {{--                </a>--}}
                <div wire:loading class="bg-red-500 p-2 ">
                    Отправлено, Добавляю
                </div>
            </div>
        </form>
        {{--        <p class="text-center text-gray-500 text-xs">--}}
        {{--            &copy;2020 Acme Corp. All rights reserved.--}}
        {{--        </p>--}}
    </div>


</div>
