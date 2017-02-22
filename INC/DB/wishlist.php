<?php 
ini_set('display_errors', 1);
error_reporting(~0);


  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  // DB - Model
  //include(ROOT_PATH . "INC/DB/model.php");

$test1 = $_POST['recentSearches'];
$test2 = $_GET['recentSearches'];

$data {
  'test1' : $test1,
  'test1' : $test2,
}

 echo json_encode($data);
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  // $result = mysql_query("SELECT * FROM $products");          //query
  // $array = mysql_fetch_row($result);                          //fetch result  

  // try {
  //       $results = $db->query("SELECT name, price, img, sku, paypal From products ORDER BY sku ASC"); 

  //   } catch (Exception $e) { // catch exception if query fails and then exit
  //       echo "Data could not be retrived from database.";
  //       exit;
  //   }  

  //     // // Following code to view the query in an array format
  //   $recent = $results->fetchAll(PDO::FETCH_ASSOC);


  // //--------------------------------------------------------------------------
  // // 3) echo result as json 
  // //--------------------------------------------------------------------------
  // echo json_encode($recent);

?>