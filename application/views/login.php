<?php

echo $list;
echo $hi;
?>

<form id="login" action="<?php echo base_url().'user/login_post'?>" method="post">

    <p>
        Username: <input type="text" name="username" />
    </p>
    <p>
        Password: <input type="password" name="pass" />
    </p>
    <p>
        <input type="submit" name="login" value="login" />
    </p>

</form>