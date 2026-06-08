<?php

function sample_cases(): array
{
    return [
        [
            'id' => 1,
            'subject' => 'Cannot submit support form',
            'description' => 'Customer reports that the support form fails during submission.',
            'status' => 'New',
            'priority' => 'High',
            'created_at' => '2026-06-06',
        ],
        [
            'id' => 2,
            'subject' => 'Email notification not received',
            'description' => 'Customer submitted a case but did not receive an email confirmation.',
            'status' => 'In Progress',
            'priority' => 'Medium',
            'created_at' => '2026-06-06',
        ],
        [
            'id' => 3,
            'subject' => 'Request to update account details',
            'description' => 'Customer needs support updating their account information.',
            'status' => 'Resolved',
            'priority' => 'Low',
            'created_at' => '2026-06-06',
        ],
    ];
}

