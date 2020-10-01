<?php

namespace ElegantTechnologies\Grok\Components\DemoUiChunks;

use Livewire\Component;

interface UpdatesMood
{
    /**
     * Validate and update the given team's name.
     *
     * @param  mixed  $mood
     * @param  array  $input
     * @return void
     */
    public function update($mood, array $input);
}
class CAInput extends Component
{
    public ?string $mood = null;
    public $state = [];
    #public ?string $moodly = null;
    public function updateData()
    {
        $this->resetErrorBag();
        \Illuminate\Support\Facades\Log::info("New mood entered:".$this->mood);
        $data = $this->validate(['mood' => [
            'required',
            \Illuminate\Validation\Rule::in(['Love','Hate','Lust']),
        ]]);
        #$this->mood = $data['mood'];
        $this->emit('saved');
    }
    public function render()
    {
        return view('grok::groks.livewire.demo-ui-chunks.c-a-input');
    }
}
