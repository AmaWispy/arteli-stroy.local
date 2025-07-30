<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

class LeadController extends Controller
{
    /**
     * Display a paginated list of leads.
     *
     * @return View|Application|Factory
     */
    public function index(Request $request): View|Application|Factory
    {
        $query = Lead::query();

        // If month is selected, filter by month
        if ($request->filled('month')) {
            $startOfMonth = Carbon::parse($request->month . '-01')->startOfMonth();
            $endOfMonth = Carbon::parse($request->month . '-01')->endOfMonth();

            $query->whereBetween('created_at', [$startOfMonth, $endOfMonth]);
        }

        // Calculate the total count of leads without pagination
        $count = $query->count();

        // Paginate leads, latest first
        $leads = $query->orderBy('created_at', 'desc')->paginate(20);

        // Get all available months for filter dropdown
        $availableMonths = Lead::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month')->distinct()->orderBy('month', 'desc')->pluck('month');

        return view('dashboard.leads.index', compact('leads', 'availableMonths', 'count'));
    }

    public static function getDataNameByKey(string $key): string
    {
        $names = [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'message' => 'Сообщение',
            'review' => 'Отзыв',
        ];

        return $names[mb_strtolower($key)] ?? $key;
    }
}
