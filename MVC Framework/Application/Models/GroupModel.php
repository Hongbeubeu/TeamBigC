<?php

namespace Application\Models;

use Core\BaseModel;

class GroupModel extends BaseModel
{
    public $table = "Group";

    public function createGroup(array $paramsIn)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['current_star'] = 0;
        $params = array_merge($params, $paramsIn);
        return $this->dbo->insert($this->table, $params);
    }

    public function getGroupInformation(int $groupId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->select('id, owner_id, group_name, slogan, description, current_star, target_star')
                    ->where($groupId)
                    ->get()
                    ->toArray();
    }

    public function getGroupNameById(int $groupId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->select('group_name')
                    ->where($groupId)
                    ->get()
                    ->toArray();
    }

    public function getSuggestionGroups()
    {
        return $this->dbo
                    ->table($this->table)
                    ->select('id, group_name')
                    ->orderBy('id', 'DESC')
                    ->get()
                    ->toArray();
    }

    public function getCurrentStar(int $groupId)
    {
        return $this->dbo 
                    ->table($this->table)
                    ->select('current_star')
                    ->where($groupId)
                    ->get()
                    ->toArray();
    }

    public function receiveDonation(int $amountStar, int $groupId)
    {
        $currentStar = $this->getCurrentStar($groupId)[0]['current_star'];
        $params['current_star'] = $amountStar + $currentStar;
        $timestamp = date("Y-m-d H:i:s");
        $params['updated_at'] = $timestamp;
        $this->dbo->update($this->table, $params, $groupId);
    }

    public function updateGroup(array $paramsIn, int $groupId)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        $this->dbo->update($this->table, $params)->where([['id', $groupId]])->exec();
    }

    public function search($like)
    {
        return $this->dbo->table($this->table)->where([['group_name','LIKE', '%'.$like .'%']])->get()->toArray();
    }
}
