<?php
/**
 * Created by PhpStorm.
 * User: Shelly
 * Date: 2018/12/15
 * Time: 下午 11:01
 */

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository  //定義一個 TaskRepository 存放所有 Task 模型的資料存取邏輯
{
    /**
     * 取得給定使用者的所有任務。
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}