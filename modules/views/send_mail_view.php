<?php 
    require 'header.php';
    require '../controllers/send_mail.php';
?>

<div class="mail-send">
    <h1 class="title"><strong>Thanks for contacting us !</strong></h1>

    <img src="../../assets/img/logo.png" alt="logo">

    <p>Your email was sent perfectly. You'll soon get a reply :)</p>

    <?php echo $_SESSION['lastname']; ?>
</div>

<?php require 'footer.php'; ?>