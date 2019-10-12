<?php
    if ($_POST[login] && $_POST[oldpw] && $_POST[newpw] && $_POST[submit] && $_POST[submit] === "OK")
    {
        $unserialized = unserialize(file_get_contents("../private/passwd"));
        if ($unserialized)
        {
            $password_compared = 0;
            foreach($unserialized as $account => $user)
            {
                if ($user[login] === $_POST[login] && $user[passwd] === hash("whirlpool", $_POST[oldpw]))
                {
                    $password_compared = 1;
                    $unserialized[$account][passwd] = hash("whirlpool", $_POST[newpw]);
                }
            }
            if ($password_compared == 1)
            {       
                file_put_contents("../private/passwd", serialize($unserialized));
                echo "OK\n";
            }
            else
                echo "ERROR\n";
        }
        else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>