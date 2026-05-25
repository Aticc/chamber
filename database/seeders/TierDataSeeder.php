<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TierBenefit;
use App\Models\StrategicOpportunity;

class TierDataSeeder extends Seeder
{
    public function run()
    {
        // Tier II Benefits
        $benefits = [
            'High-level market entry facilitation',
            'Infrastructure development access',
            'Large-scale industrial execution',
            'Priority deal pipeline access',
            'All Tier I benefits',
        ];

        foreach ($benefits as $index => $benefit) {
            TierBenefit::create([
                'tier' => 'tier_ii',
                'benefit' => $benefit,
                'order' => $index + 1,
                'is_active' => true,
            ]);
        }

        // Strategic Opportunities
        $opportunities = [
            [
                'title' => 'Infrastructure Projects Pipeline',
                'description' => '$500M+ infrastructure projects across West Africa',
                'button_text' => 'View Pipeline →',
                'button_link' => '#',
            ],
            [
                'title' => 'Strategic Partnership Matching',
                'description' => 'Connect with institutional investors and government entities',
                'button_text' => 'Request Matching →',
                'button_link' => '#',
            ],
            [
                'title' => 'Market Entry Advisory',
                'description' => 'One-on-one advisory sessions for market entry strategy',
                'button_text' => 'Schedule →',
                'button_link' => '#',
            ],
        ];

        foreach ($opportunities as $index => $opp) {
            StrategicOpportunity::create([
                'tier' => 'tier_ii',
                'title' => $opp['title'],
                'description' => $opp['description'],
                'category' => 'opportunity',
                'button_text' => $opp['button_text'],
                'button_link' => $opp['button_link'],
                'order' => $index + 1,
                'is_active' => true,
            ]);
        }

        // Deals
        $deals = [
            [
                'title' => 'Lagos-Ibadan Railway',
                'description' => '$500M - Infrastructure',
                'status' => 'Active',
                'sector' => 'Infrastructure',
            ],
            [
                'title' => 'Kigali Logistics Hub',
                'description' => '$200M - Logistics',
                'status' => 'Matching',
                'sector' => 'Logistics',
            ],
            [
                'title' => 'Green Energy Initiative',
                'description' => '$750M - Energy',
                'status' => 'Vetting',
                'sector' => 'Energy',
            ],
        ];

        foreach ($deals as $index => $deal) {
            StrategicOpportunity::create([
                'tier' => 'tier_ii',
                'title' => $deal['title'],
                'description' => $deal['description'],
                'category' => 'deal',
                'status' => $deal['status'],
                'sector' => $deal['sector'],
                'order' => $index + 1,
                'is_active' => true,
            ]);
        }

        // Events
        $events = [
            [
                'title' => 'Infrastructure Investment Summit',
                'location' => 'Lagos, Nigeria - By Invitation',
                'event_date' => '2025-06-10',
                'status' => 'upcoming',
            ],
            [
                'title' => 'CEO Roundtable',
                'location' => 'Virtual - Exclusive for Tier II',
                'event_date' => '2025-07-25',
                'status' => 'upcoming',
            ],
            [
                'title' => 'African Business HNI Summit',
                'location' => 'Lagos, Nigeria',
                'event_date' => '2025-09-08',
                'status' => 'upcoming',
            ],
        ];

        foreach ($events as $index => $event) {
            StrategicOpportunity::create([
                'tier' => 'tier_ii',
                'title' => $event['title'],
                'location' => $event['location'],
                'category' => 'event',
                'event_date' => $event['event_date'],
                'order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}