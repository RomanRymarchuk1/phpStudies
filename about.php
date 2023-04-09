<?php
    $title = 'About Us';

    require_once("./blocks/header.php");
?>
<div class="container">
    <h1>About Us</h1>

    <form action="check_get.php" method="get" >
        <input type="text" name="name" placeholder="Enter your name" class="form-control" ><br>
        <input type="email" name="email" placeholder="Enter your e-mail" class="form-control" ><br>
        <input type="password" name="password" placeholder="Enter your password" class="form-control" ><br>
        <textarea name="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <input type="submit" value="Submit" class="btn btn-success" >
    </form>
</div>
<?php
    require_once("./blocks/footer.php");
?>
