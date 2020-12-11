<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
</head>
<body>
<form action="/login" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name'/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name='last_name'/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name='email'/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name='password'/></td>
            <!---change 'someFunction()' when Vue.js is ready--->
            <td><input type="checkbox" onclick="someFunction()">Show Password</td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Add User"/>
            </td>
        </tr>
    </table>
</form>
</body>
