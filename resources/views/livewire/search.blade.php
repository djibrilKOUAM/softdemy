<div class="inline-block" x-data="{ open:true }">
    <input @click.away="{ open = false; @this.resetIndex(); }" @click = "{ open = true }" type="text" class="bg-gray-200 text-gray-700 border-2 focus:outline-none px-2 py-1 rounded-full w-56"
    placeholder="Rechercher une mission..." wire:model="query"
    wire:keydown.arrow-down.prevent="incrementIndex"
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.backspace="resetIndex"
    wire:keydown.enter.prevent="showJob">

    @if (strlen($query) > 2)
        <div  class="absolute border rounded bg-gray-100 text-md w-56 mt-1"
        x-show="open">


            @if (count($jobs) > 0)
                @foreach ($jobs as $index => $job)
                    <p class="p-1 {{$index === $selectedIndex ? 'text-green-500': '' }}">{{$job->title}}</p>
                @endforeach
            @else
                <span class="text-orange-500 p-1">Pas de resultat pour "{{$query}}"</span>
            @endif
        </div>
    @endif

</div>
