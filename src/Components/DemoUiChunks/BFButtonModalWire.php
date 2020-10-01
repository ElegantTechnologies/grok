<?php

namespace ElegantTechnologies\Grok\Components\DemoUiChunks;

use Livewire\Component;

class BFButtonModalWire extends Component
{
    public int $count = 305;
    public bool $showingModal = false;

    public function doModalPrimary()
    {
        $this->count = $this->count + 5;
        $this->showingModal = false; // FYI: This is wire's way of closing the modal, since
        // declared it like
        //      <x-jet-dialog-modal wire:model="showingModal">
    }


    public function render()
    {
        return view('grok::groks.livewire.demo-ui-chunks.b-f-button-modal-wire');
    }
}
