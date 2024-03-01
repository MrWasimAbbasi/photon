<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        // Retrieve users from the database using the User model
        $users = User::getAll();
        // Render view
        require_once __DIR__ . '/../Views/user/index.php';
    }

    // Add other controller methods (e.g., create, edit, delete)
}
