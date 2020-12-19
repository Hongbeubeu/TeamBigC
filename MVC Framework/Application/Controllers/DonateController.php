<?php

namespace Application\Controllers;

use Application\Models\DonationHistoryModel;
use Application\Models\GroupModel;
use Core\BaseController;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;

class DonateController extends BaseController
{
    public function donate()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $userModel = new UserModel();
        $currentStar = $userModel->getStar($_SESSION['user_id']);
        if ($formPost['amount_star'] <= $currentStar){
            $groupModel = new GroupModel();
            $groupModel->receiveDonation($formPost['amount_star'], $formPost['group_id']);
            $userModel = new UserModel();
            $userModel->donate($_SESSION['user_id'], $formPost['amount_star']);
            $donationHistoryModel = new DonationHistoryModel();
            $donationHistoryModel->logHistoryDonation($_SESSION['user_id'], $formPost['group_id'], $formPost['amount_star']);
        } else {
            $this->setError("Số sao ủng hộ cao hơn số sao có trong tài khoản");
        }

        //header('location:/group/' . $formPost['group_id']);
    }
}
