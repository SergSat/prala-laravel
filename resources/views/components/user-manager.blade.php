namespace App\Http\Livewire;

use Livewire\Component;

class YourComponentName extends Component
{
public $isManager;

public function mount()
{
// Логіка для визначення, чи є поточний користувач керівником
$this->isManager = @livewire('check-manager-status', ['user' => $user], key('check-manager-status-' . $user->id));
}

public function render()
{
return view('livewire.home-manager.blade.php');
}
}