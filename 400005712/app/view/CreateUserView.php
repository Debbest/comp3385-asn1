<?php

    include 'header.php';
?>

    <h1>User Registration</h1>

    <form action="CreateUser.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="guest">Guest</option>
        </select>

        <button type="submit">Create</button>
    </form>

<?php
    include 'footer.php';
?>