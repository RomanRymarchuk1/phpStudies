<?php
    session_start();
    $title = 'Contact';
    require_once("./blocks/header.php");
?>
    <h1 class="mt-5"><?=$title?></h1>

    <div class="text-success" ><?=$_SESSION["success_mail"]?></div>

    <form action="check_contact.php" method="post">

        <input value="<?= $_SESSION["user_name"] ?>" type="text" name="username" placeholder="Enter your name..." class="form-control mt-3 " >
        <div class="text-danger"><?= $_SESSION["error_username"]?></div>

        <input value="<?= $_SESSION["email"] ?>" type="text" name="email" placeholder="Enter your email..." class="form-control mt-3 " >
        <div class="text-danger"><?= $_SESSION["error_email"]?></div>

        <input value="<?= $_SESSION["subject"] ?>" type="text" name="subject" placeholder="Message subject..." class="form-control mt-3 " >
        <div class="text-danger"><?= $_SESSION["error_subject"]?></div>

        <textarea name="message" placeholder="Enter your message" class="form-control mt-5 " ><?php $_SESSION["message"] ?></textarea>
        <div class="text-danger"><?= $_SESSION["error_message"]?></div>

        <button type="submit" class="btn btn-success mt-3 ">Submit</button>

    </form>
<?php  

    require_once("./blocks/footer.php");
?>