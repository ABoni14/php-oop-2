<?php 
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito.
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
*/
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/VipUser.php";
require_once __DIR__ . "/classes/Customer.php";

$new_product = new Product("iPhone 13",1200,11);
var_dump($new_product);

$new_creditcard = new CreditCard(12345226789, "Andrea Boni",123,2,2025);
var_dump($new_creditcard);

$new_vipuser = new VipUser("Gianni","Pascoli","giannipas@gmailcom");
$new_vipuser -> setDiscount(40);
$new_vipuser -> controlEmailUser();
var_dump($new_vipuser);

$new_user = new User("Andrea","Boni","andreboni@gmail.com");
$new_user -> controlEmailUser();
var_dump($new_user);

$cliente = new Customer("Giuseppe", "Verdi","giubeppe@gmail.com");
$cliente->setCreditCard(987987987987,'Giuseppe Verdi',5,2023,987);
$cliente->route = "Via Giuseppe Garibaldi";
$cliente->town = "Affi";
$cliente->zip = 37010;
$cliente->Country = 'Italia';
var_dump($cliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-commerce</title>
</head>
<body>
  
</body>
</html>