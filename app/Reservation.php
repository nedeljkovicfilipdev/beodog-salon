<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $dates = [
        'reservation_date',
    ];

    protected $guarded = [];

    public function getTitle(): string
    {
        return sprintf(
            '%s - %s - %s',
            $this->dog_name,
            $this->client_name,
            $this->reservation_date->format('d.m.Y. H:i')
        );
    }

    public function generateCalendarLink(): string
    {
        $dateFormat = 'Ymd\\THi00\\Z';

        $rawDescriotion = "Ime psa: {$this->dog_name}\nRasa psa: {$this->dog_breed}\nVlasnik: {$this->client_name}";

        if ($this->phone) {
            $rawDescriotion .= "\nBroj telefona: {$this->phone}";
        }

        $title = urlencode("Šišanje psa: {$this->dog_name} - {$this->dog_breed}");
        $description = urlencode($rawDescriotion);
        $startDate = $this->reservation_date->format($dateFormat);
        $endDate = $this->reservation_date->addHour()->format($dateFormat);
        $timezone = urlencode('Europe/Belgrade');

        return "https://calendar.google.com/calendar/r/eventedit?action=TEMPLATE&text={$title}&details={$description}&dates={$startDate}%2F{$endDate}&ctz={$timezone}";
    }
}
