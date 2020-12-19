<?php

namespace Application\Models;

use Core\BaseModel;

class DonationHistoryModel extends BaseModel
{
    public $table = "Donation_History";
    
    public function logHistoryDonation(int $userId, int $groupId, int $amountStar)
    {
        $params['user_id'] = $userId;
        $params['group_id'] = $groupId;
        $params['amount_star'] = $amountStar;
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $this->dbo->insert($this->table, $params);
    }
}
