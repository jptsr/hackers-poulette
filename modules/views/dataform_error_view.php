<?php
    require 'header.php';
    require '../controllers/destroy_session.php';
?>

<div class="mail-send">
    <h1 class="title"><strong>Something went wrong :(</strong></h1>

    <img src="../../assets/img/logo.png" alt="logo">

    <p>Informations incorrect or empty</p>

    <form action="../../src/index.html" method="post" class="contact-again">
        <label for="contact">Retourn to the contact page and try again</label>
        <input type="submit" name="contact" value="Contact form" class="btn">
    </form>
</div>

<?php require 'footer.php'; ?>