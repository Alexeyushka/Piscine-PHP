<?php
    if ($_POST[login] && $_POST[passwd] && $_POST[submit] && $_POST[submit] === "OK")
    {

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
        $credentials[passwd] = $_POST[passwd]);
        file_put_contents("credentials/users.txt", $credentials));
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>