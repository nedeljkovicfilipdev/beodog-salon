<?php

namespace App\Reservations;

use App\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationsManager
{
    protected static $validationRules = [
        'client_name' => 'required',
        'dog_name' => 'required',
        'dog_breed' => 'required',
        'reservation_date' => 'required|date_format:d.m.Y. H:i',
        'phone' => 'required',
    ];

    public function getAll()
    {
        return Reservation::all();
    }

    public function findOrFail($id)
    {
        return Reservation::findOrFail($id);
    }

    public function extractDataFromRequest(Request $request): array
    {
        return $request->validate(self::$validationRules);
    }

    public function create(array $data): Reservation
    {
        $reservation = new Reservation();

        $reservation = $this->populate($reservation, $data);
        $reservation->save();

        return $reservation;
    }

    public function update(Reservation $reservation, array $data): Reservation
    {
        $reservation = $this->populate($reservation, $data);
        $reservation->save();

        return $reservation;
    }

    public function delete(Reservation $reservation): bool
    {
        return $reservation->delete();
    }

    protected function populate(Reservation $reservation, array $data): Reservation
    {
        $reservation->client_name = $data['client_name'] ?? null;
        $reservation->dog_name = $data['dog_name'] ?? null;
        $reservation->dog_breed = $data['dog_breed'] ?? null;
        $reservation->phone = $data['phone'] ?? null;
        $reservation->reservation_date = isset($data['reservation_date'])
            ? Carbon::createFromFormat('d.m.Y. H:i', $data['reservation_date'])
            : null;

        return $reservation;
    }
}
