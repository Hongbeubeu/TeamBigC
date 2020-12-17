<?php
namespace Application\Models;

use Core\BaseModel;

class CommentModel extends BaseModel
{
    public $table = "Comment";

    public function addComment(array $paramsIn) {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        $this->dbo->insert($this->table, $params);
    }
}