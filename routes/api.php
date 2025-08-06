use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\TranslationController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth.jwt'])->group(function () {
    Route::apiResource('translations', TranslationController::class)->only(['index', 'store', 'update']);
    Route::get('/export', [TranslationController::class, 'export']);
});
