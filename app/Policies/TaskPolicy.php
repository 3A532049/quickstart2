<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * 判斷當給定的使用者可以刪除給定的任務。
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Task $task) //此方法會取得一個 User 實例及一個 Task 實例。此方法會簡單的檢查當使用者的 ID 符合任務的 user_id。實作上，所有的授權方法必須回傳 true 或 false
    {
        return $user->id === $task->user_id;
    }
}
