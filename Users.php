<?php
class Users
{
    private $employe_id;
    private $fullname;
    private $role;
    private $password;

    function set_login_data($employe_id, $password)
    {
        $this->employe_id = $employe_id;
        $this->password = $password;
    }

    function get_employe_id()
    {
        return $this->employe_id;
    }

    function get_password()
    {
        return $this->password;
    }

    function set_profile_data()
    {

    }


}

?>