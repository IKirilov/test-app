<!DOCTYPE html>
<html>
<head>
    <title>Registration complete</title>
</head>
<body>
<form action="/home" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name='email'/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name='password'/></td>
            <!---change 'someFunction()' when Vue.js is ready--->
            <td><input type="checkbox" onclick="hidePassword()">Show Password</td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Login"/>
            </td>
        </tr>
    </table>
</form>

<form action="/register" method="get">
    <tr>
        <td colspan = '2'>
            <input type = 'submit' value = "Register"/>
        </td>
    </tr>
</form>

</body>
</html>
