<?php

namespace App\Repository;

class UtilitiesRepository
{

    // Database of Sparkz utilities | adjustable
    public function getUtilities(): array
    {
        $utilities = [
            "services" => [
                "title" => "Tjänster",
                "icon" => '<i class="fa-solid fa-hand-holding-medical"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "courses" => [
                "title" => "Kurser",
                "icon" => '<i class="fa-solid fa-user-graduate"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "memberships" => [
                "title" => "Medlemskap",
                "icon" => '<i class="fa-solid fa-id-card-clip"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "groupActivities" => [
                "title" => "Gruppaktiviteter",
                "icon" => '<i class="fa-solid fa-person-running"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "valueCards" => [
                "title" => "Värdekort",
                "icon" => '<i class="fa-solid fa-ticket"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "cashregister" => [
                "title" => "Kassaregister",
                "icon" => '<i class="fa-solid fa-cash-register"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "passage" => [
                "title" => "Passage",
                "icon" => '<i class="fa-solid fa-door-open"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "employees" => [
                "title" => "Personal",
                "icon" => '<i class="fa-solid fa-clipboard-user"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],
            "calender" => [
                "title" => "Kalender",
                "icon" => '<i class="fa-solid fa-calendar"></i>',
                "link" => '',
                "content" => 'Risus nec tincidunt ullamcorper auctor aliquet at non tristique integer. Faucibus id faucibus turpis vitae amet. Senectus facilisi et egestas blandit.'
            ],

        ];

        return $utilities;
    }
}
