<?
namespace phpTestPack{
use MysqliDb;
class TestClass {
public function __construct(){
print("heyy you");
}
  public function doTest(){
    echo __CLASS__, time(), "Ok";
  }
}
  $db = new MysqliDb ('host', 'username', 'password', 'databaseName');
  var_dump($db);
  
}
