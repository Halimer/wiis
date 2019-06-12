<?php
$users = array('George Washington', 'John Adams', 'Thomas Jefferson', 'James Madison', 'James Monroe');
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case "GET":
        $uid = (int)$_GET['uid'];
        $msg = '{"User Name" : ' . $users[$uid] . '"}';
        echo $msg;
        break;
    case "POST":
        $postdata = file_get_contents('php://input');
        if ($postdata == NULL) {
         echo '{"Message":"No Data Sent"}';
        break;
        } else {
        $postjson = json_decode($postdata);
        $user_name = $postjson->user_name;
        array_push($users, $user_name);
        $msg = '{"User Name" : ' . $user_name . '"}';
        echo $msg;
        break;
    }
}
?>