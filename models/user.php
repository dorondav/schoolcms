<?php
ob_start();

class UserModel extends Model
{
    public function administrator()
    {

        $this->query('SELECT * FROM admins');
        $rows = $this->resultSet();
        return $rows;

    }

    public function register()
    {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if ($post['submit']) {
            if ($post['userName'] == '' || $post['userEmail'] == '' || $post['password'] == '' || $post['userPhone'] == '' || $post['userRole'] == 'default') {
                echo 'Pleas enter data ';
                return;
            }

            $imageName = $_FILES['userImage']['name'];
            $temp_name = $_FILES['userImage']['tmp_name'];
            $fileSize = $_FILES['userImage']['size'];
            $fileError = $_FILES['userImage']['error'];
            $fileType = $_FILES['userImage']['type'];

            $fileExt = explode('.', $imageName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (isset($imageName)) {
                if (!empty($imageName)) {
                    if (in_array($fileActualExt, $allowed)) {
                        if ($fileError === 0) {
                            if ($fileSize > 10000) {

                                $location = '../assets/image/';
                                if (move_uploaded_file($temp_name, $location . $imageName)) {
                                    echo 'File uploaded successfully';
                                }
                            } else {
                                echo 'Your file is to big!';

                            }
                        } else {
                            echo 'There was an error upleading your file!';

                        }
                    } else {
                        echo 'You cannot uplead files of this type!';

                    }
                }
            } else {
                echo 'You should select a file to upload !!';
            }

            // Insert Into MySql
            $this->query('INSERT INTO admins (userName, userRole, userPhone, userPassword, userEmail, userImage) VALUES (:userName, :userRole, :userPhone, :userPassword, :userEmail, :userImage)');

            $this->bind(':userName', $post['userName']);
            $this->bind(':userRole', $post['userRole']);
            $this->bind(':userPhone', $post['userPhone']);
            $this->bind(':userPassword', $password);
            $this->bind(':userEmail', $post['userEmail']);
            $this->bind(':userImage', $imageName);
            $this->execute();
            if ($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'users/login');
            }
        }
        $this->query('SELECT * FROM admins');
        $rows = $this->resultSet();
        return $rows;

        return;
    }

    public function login()
    {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if ($post['submit']) {

            $this->query('SELECT * FROM admins WHERE userEmail = :userEmail AND userPassword = :userPassword');
            $this->bind(':userEmail', $post['userEmail']);
            $this->bind(':userPassword', $password);

            $row = $this->single();
            $userImage = $row['userImage'];

            if ($row) {

                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "name" => $row['userName'],
                    "role" => $row['userRole'],
                    "image" => $row['userImage'],
                );

                $image = $_SESSION['user_data'];
                header('Location: ' . ROOT_URL);

            } else {
                echo 'Incorrect Login';
            }

        }
        return;

    }

    // public function getAdmin()
    // {
    //     $admin_id = $_GET['userEmail'];
    //     $row = $this->query('SELECT * FROM admins WHERE userEmail = {$admin_id}');
    //     return $row;
    // }

    public function editAdmin()
    {
        $this->query('SELECT * FROM admins');
        $rows = $this->resultSet();
        return $rows;

        $user_id = $_GET['?id'];
        $row = $this->query('SELECT * FROM admins WHERE userID = $user_id');

        return $row;
    }
}
