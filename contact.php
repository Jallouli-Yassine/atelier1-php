<?php
if (( isset( $_GET['fname'] ) )&&( isset( $_GET['lname'] ) )&&( isset( $_GET['mail'] ) )
&&( isset( $_GET['telnumber'] ) )&&( isset( $_GET['address'] ) )&&( isset( $_GET['cpostal'] ) )) { 
    $firstname = $_GET['fname'];
    $lastname = $_GET['lname'];
    $email = $_GET['mail'];
    $telephone = $_GET['telnumber'];
    $addresse= $_GET['address'];
    $codepostal = $_GET['cpostal'];
    echo "<table border=1>
    <tr>
    <td>
    Nom
    </td>
    <td>
    Prenom
    </td>
    <td>
    Email
    </td>
    <td>
    Telephone
    </td>
    <td>
    Address
    </td>
    <td>
    Code postal
    </td>
    </tr>
    <tr>
    <td>
    $firstname
    </td>
    <td>
    $lastname
    </td>
    <td>
    $email
    </td>
    <td>
    $telephone
    </td>
    <td>
    $addresse
    </td>
    <td>
    $codepostal
    </td>
    </tr>
    </table>";
    
}
    
?>