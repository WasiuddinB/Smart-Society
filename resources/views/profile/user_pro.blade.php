@extends('layout')
<table>
    <tr>
        <td>Name: </td>
        <td>Email: </td>
        <td>DOB: </td>
        <td>Phone</td>
        <td>St_NO: </td>
        <td>House: </td>
    </tr>
    
    <tr>
        <td><?php echo $users['name'] ?></td>
        <td><?php echo $users['email'] ?></td>
        <td><?php echo $users['dob'] ?></td>
        <td><?php echo $users['phone'] ?></td>
        <td><?php echo $users['st_no'] ?></td>
        <td><?php echo $users['house'] ?></td>
    </tr>
</table>