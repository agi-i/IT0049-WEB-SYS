<?php
namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    // 1. Welcome page (/): Shows only today's tasks
    public function index()
    {
        $taskModel = new TaskModel();
        $today = date('Y-m-d'); // Current system date
        
        $data['tasks'] = $taskModel->getTodaysTasks($today);
        $data['today'] = $today;

        return view('welcome_view', $data);
    }

    // 2. Task List page (/tasks): Shows every task ordered by date
    public function tasks()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllTasksOrdered();

        return view('tasks_view', $data);
    }

    // 3. Profile page (/profile): Shows the single demo user's info
    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->getDemoUser();

        return view('profile_view', $data);
    }

    // 4. About page (/about): Identifies you as the developer
    public function about()
    {
        return view('about_view');
    }
}