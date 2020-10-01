// In file: 'packages/eleganttechnologies/grok/src/Components/DemoUiChunks/AANothing.php'


# namespace App\Http\Livewire\Flash; OLD NAMESPACE
  namespace ElegantTechnologies\Grok\Components\DemoUiChunks; #New, Package Namespace

public function render()
    {
        // was:
        // return view('livewire.demo-ui-chunks.a-a-nothing');
           return view('grok::livewire.demo-ui-chunks.a-a-nothing');
    }
