<?php
    require 'header.php';

    session_start();
?>

<div class="mail-send">
    <h1 class="title"><strong>Something went wrong :(</strong></h1>

    <img src="../../assets/img/logo.png" alt="logo">

    <p>Informations incorrect or empty</p>

    <?= '<p>' . $_SESSION['err_lname'] . '</p>' ?>
    <?= '<p>' . $_SESSION['err_fname'] . '</p>' ?>
    <?= '<p>' . $_SESSION['err_gender'] . '</p>' ?>
    <?= '<p>' . $_SESSION['err_email'] . '</p>' ?>
    <?= '<p>' . $_SESSION['err_subject'] . '</p>' ?>
    <?= '<p>' . $_SESSION['err_msg'] . '</p>' ?>

    <form action="../controllers/destroy_session.php" method="post" class="contact-again">
        <label for="contact">Retourn to the contact page and try again</label>
        <input type="submit" name="contact" value="Contact form" class="btn">
    </form>
</div>

<?php require 'footer.php'; ?>