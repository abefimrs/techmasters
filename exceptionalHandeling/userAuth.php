<?php

// PHP 5
// class definition
class userAuth {

// define properties
    private $username;
    private $passwd;
    private $passwdFile;

// constructor
// must be passed username and non-encrypted password
    public function __construct($username, $password) {
        $this->username = $username;
        $this->passwd = $password;
    }

// set .htaccess-style file to check for passwords
    public function setPasswdFile($file) {
        $this->passwdFile = $file;
    }

// perform password verification
    public function authenticateUser() {
// check that the file exists
        if (!file_exists($this->passwdFile)) {
            throw new FileException("Password file cannot be found: " . $this->passwdFile);
        }

        // check that the file is readable
        if (!is_readable($this->passwdFile)) {
            throw new FileException("Unable to read password file: " . $this->passwdFile);
        }
        // read file
        $data = file($this->passwdFile);
        // iterate through file
        foreach ($data as $line) {
        $arr = explode(":", $line);
        // if username matches, test password
            if ($arr[0] == $this->username) {
        // get salt and crypt(), assuming encryption
                $salt = substr($arr[1], 0, 2);
        // if match, user/pass combination is correct
                if ($arr[1] == crypt($this->passwd, $salt)) {
                    echo "User was authenticated";
        // do some other stuff
                }
        // otherwise return exception
                else {
                    throw new AuthException("Incorrect password");
                    break;
                }
            } else {
// could not find a username match
// return exception
                throw new AuthException("No such user");
            }
        }
    }

// end class definition
}

// subclass exceptions
class FileException extends Exception {}
class AuthException extends Exception {}

    // try the code
    try {
    // create instance
        $ua = new userAuth("joe", "secret");
    // set password file
        $ua->setPasswdFile("password.txt");
    // perform authentication
        $ua->authenticateUser();
    }
    // catch authentication failures, if any
    catch (FileException $e) {
    // print file errors
        print "A file error occurred. " . $e->getMessage();
    } catch (AuthException $e) {
    // an authentication error occurred
        print "An authentication error occurred. " . $e->getMessage();
    // more normally, redirect to new page on auth errors, e.g.
    // header ('Location: login_fail.php');
    } catch (Exception $e) {
        print "An unknown error occurred";
    }
?>