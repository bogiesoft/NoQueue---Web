<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 5/25/2016
 * Time: 12:00 PM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function registerCustomer()
    {
        $pdo = DB::connection()->getPdo();
        $response = array("error" => FALSE);
        if (isset($_POST['first_name']) && isset($_POST['email']) && isset($_POST['password'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $dob = $_POST['dob'];

            if ($pdo->isUserExisted($email)) {
                $response["error"] = TRUE;
                $response["error_msg"] = "User already existed with " . $email;
                echo json_encode($response);
            } else {
                $query = 'INSERT into customers (c_id, first_name, last_name, sex, email, password, dob) VALUES (?,?,?,?,?,?,?)';
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                if ($stmt) {
                    $response["error"] = FALSE;
                    $response["customers"]["first_name"] = $first_name;
                    $response["customers"]["last_name"] = $last_name;
                    $response["customers"]["sex"] = $sex;
                    $response["customers"]["email"] = $email;
                    $response["customers"]["password"] = $password;
                    $response["customers"]["dob"] = $dob;
                    echo json_encode($response);
                } else {
                    $response["error"] = TRUE;
                    $response["error_msg"] = "Unknown error occurred in registration!";
                    echo json_encode($response);
                }
            }
        } else {
            $response["error"] = TRUE;
            $response["error_msg"] = "Required parameters (name, email or password) is missing!";
            echo json_encode($response);
        }
    }

    public function loginCustomers()
    {
        $response = array("error" => FALSE);
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $pdo = DB::connection()->getPdo();
            $query = "SELECT email, password FROM customers WHERE email = '$email' AND password = '$password'";
            $stmt = $pdo->prepare($query);
            $stmt->bind_param("ss", $email, $password);
            if ($stmt->execute()) {
                $stmt->get_result()->fetch_assoc();
                $stmt->close();
            } else {
                return null;
            }
            if ($stmt) {
                $response["error"] = FALSE;
                $response["customers"]["email"] = $email;
                $response["customers"]["email"] = $password;
                echo json_encode($response);
            } else {
                // user is not found with the credentials
                $response["error"] = TRUE;
                $response["error_msg"] = "Login credentials are wrong. Please try again!";
                echo json_encode($response);
            }
        }else{
            // required post params is missing
            $response["error"] = TRUE;
            $response["error_msg"] = "Required parameters email or password is missing!";
            echo json_encode($response);
        }
    }

    public function isUserExisted($email)
    {
        $pdo = DB::connection()->getPdo();
        $stmt = $pdo->prepare("SELECT email from customers WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            // user existed
            $stmt->close();
            return true;
        } else {
            // user not existed
            $stmt->close();
            return false;
        }
    }
}