<?php
    if ($_POST[login] && $_POST[passwd] && $_POST[submit] && $_POST[submit] === "OK")
    {
        if (file_exists("../private") == 0)
        {
            mkdir("../private");
        }
        if (file_exists("../private/passwd") == 0)
        {
            file_put_contents("../private/passwd", null);
        }
        $unserialized = unserialize(file_get_contents("../private/passwd"));
        if ($unserialized)
        {
            $user_exist = 0;
            foreach($unserialized as $account => $user)
            {
                if ($user[login] === $_POST[login])
                    $user_exist = 1;
            }
            if ($user_exist == 1)
            echo "ERROR\n";
            (exit);
        }
        $credentials[login] = $_POST[login];
        $credentials[passwd] = hash("whirlpool", $_POST[passwd]);
        $unserialized[] = $credentials;
        file_put_contents("../private/passwd", serialize($unserialized));
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>