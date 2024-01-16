<div>

    <a href="#" wire:click.prevent="showHide">форма добавить оплату</a>

    @if($form_show)
        <form
            wire:submit.prevent="save"
        >

            с <input type="date" wire:model="date_start" class="border-2 border-gray-200 p-1">
            {{--        <div>--}}
            @error('date_start') <span class="error bg-red-200 p-2">{{ $message }}</span> @enderror
            {{--        </div>--}}
{{--            <br/>--}}
            &nbsp;
            &nbsp;
            <label>
            <input type="checkbox" wire:model="month" value="yes" class="border-2 border-gray-200 p-1"> 1 месяц
            </label>
            &nbsp;
            &nbsp;
{{--            <br/>--}}

            или по <input type="date" wire:model="date_end" class="border-2 border-gray-200 p-1">
            {{--        <div>--}}
            {{--            @error('content') <span class="error">{{ $message }}</span> @enderror--}}
            {{--        </div>--}}
{{--            <br/>--}}
            &nbsp;
            &nbsp;
            <button type="submit" class="border-2 border-gray-200 bg-blue-300 rounded px-2 py-1">Save</button>
        </form>
    @endif
</div>
