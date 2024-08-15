<div
    x-data="
        {
             isEditing: false,
             focus: function() {
                const textInput = this.$refs.textInput;
                textInput.focus();
                textInput.select();
             },
             blur: function() {
                $wire.save();
                textInput.blur();
                isEditing = false;
                
             }
        }
    "
    x-cloak
>
    <div class="p-2" x-show=!isEditing>
        <span
            x-on:click="isEditing = true; $nextTick(() => focus())"
        >{{$newVal}}</span>
    </div>
    <div x-show=isEditing class="flex flex-col">
        <form class="flex" wire:submit.prevent="save">
            <x-input.text shadowless
                          id="{{$field}}"
                          type="text"
                          class="border-0 truncate focus:border-lh-yellow focus:ring focus:ring-lh-yellow focus:ring-opacity-50 h-7 rounded text-sm"
                          x-ref="textInput"
                          wire:model.lazy="newVal"
                          x-on:keydown.enter="isEditing = false"
                          x-on:keydown.escape="isEditing = false"
                          x-on:blur="$wire.save(); isEditing = false;"
            />
        </form>
    </div>
    <script>
        var start =  document.getElementById('start');
        var end =  document.getElementById('end');
        
        if (start != null && !startPicker) {
            var startPicker = new Pikaday({ 
                field: start,
                format: 'DD MMM YYYY'
            });
        }
        if (end != null && !endPicker) {
            var endPicker = new Pikaday({ 
                field: end,
                format: 'DD MMM YYYY'
            });
        }
    </script>
</div>

