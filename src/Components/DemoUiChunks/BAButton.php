<?php

namespace ElegantTechnologies\Grok\Components\DemoUiChunks;

use Livewire\Component;

class BAButton extends Component
{
    public $confirmingClick = false;

    public function confirmClick()
    {
        $this->dispatchBrowserEvent('confirming-click'); // Just sent out in case anyone wants to listen
        $this->confirmingClick = true;
    }

    public function clickHard(\Illuminate\Contracts\Auth\StatefulGuard $auth)
    {
        $this->resetErrorBag();
        $this->confirmingClick = false; // This will automatically cause modal to close.
        \Illuminate\Support\Facades\Log::info('Clicked (and confirmed)');
    }
    public function render()
    {
        return view('grok::grok.livewire.demo-ui-chunks.b-a-button');
    }
}
