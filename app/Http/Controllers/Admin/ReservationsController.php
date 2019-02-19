<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservations\ReservationsManager;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * @var ReservationsManager
     */
    protected $reservationsManager;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ReservationsManager $reservationsManager)
    {
        $this->reservationsManager = $reservationsManager;

        $this->middleware('auth');
    }

    public function index()
    {
        $reservations = $this->reservationsManager->getAll();

        $data = [
            'reservations' => $reservations,
            'panelTitle' => 'Rezervacije',
        ];

        return view('admin.reservations.index', $data);
    }

    public function get(Request $request)
    {
        $reservation = $this->reservationsManager->findOrFail($request->route('id'));

        $data = [
            'reservation' => $reservation,
            'panelTitle' => 'Rezervacija: ' . $reservation->getTitle(),
        ];

        return view('admin.reservations.edit', $data);
    }

    public function create()
    {
        $data = [
            'panelTitle' => 'Nova rezervacija',
        ];

        return view('admin.reservations.create', $data);
    }

    public function store(Request $request)
    {
        $data = $this->reservationsManager->extractDataFromRequest($request);
        $reservation = $this->reservationsManager->create($data);

        return redirect()->route('reservations.single', ['id' => $reservation->id]);
    }

    public function update(Request $request)
    {
        $reservation = $this->reservationsManager->findOrFail($request->route('id'));
        $data = $this->reservationsManager->extractDataFromRequest($request);
        $reservation = $this->reservationsManager->update($reservation, $data);

        return redirect()->route('reservations.single', ['id' => $reservation->id]);
    }

    public function confirmDelete(Request $request)
    {
        $reservation = $this->reservationsManager->findOrFail($request->route('id'));

        $data = [
            'reservation' => $reservation,
            'panelTitle' => 'Brisanje rezervacije',
        ];

        return view('admin.reservations.delete', $data);
    }

    public function delete(Request $request)
    {
        $reservation = $this->reservationsManager->findOrFail($request->route('id'));

        $this->reservationsManager->delete($reservation);

        return redirect()->route('reservations.index');
    }
}
