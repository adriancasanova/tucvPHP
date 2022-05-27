<?php
/*
class Controller{



  public function getProducts(){
   try{
  
    
        $list = array();
        $conexion = new Conexion();
        $db = $conexion->getConexion();
        $query = "SELECT * FROM upload ORDER BY id";
        $statement = $db->prepare($query);
        $statement->execute();
        while($row = $statement->fetch()) {
           $list[] = array(
                 "id" => $row['id'],
                 "email" => $row['email'],
                 "asunto" => $row['asunto'],
                 "cuerpoEmail" => $row['cuerpoEmail'], 
                 "cv" => $row['cv']
                );
        }//fin del ciclo while 

        return $list;
        
   

      }catch(PDOException $e){
        echo "¡Error!: " . $e->getMessage() . "<br/>";
      }
  }


public function addProduct($data){
  try{    
      $email = $data['email'];
      $asunto = $data['asunto'];
      $cuerpoEmail = $data['cuerpoEmail'];
      $cv = $data['cv'];
      $conexion = new Conexion();
      $db = $conexion->getConexion();
      $query = "INSERT INTO upload (email, asunto, cuerpoEmail, cv) VALUES (:email,:asunto,:cuerpoEmail,:cv)";
      $statement = $db->prepare($query);
      $statement->bindParam(":email", $email);
      $statement->bindParam(":asunto", $asunto);
      $statement->bindParam(":cuerpoEmail", $cuerpoEmail);
      $statement->bindParam(":cv", $cv);
      $result = $statement->execute();
      if($result){
         return "successfully";
      }
       return "error!";

     } catch (PDOException $e) {
      echo "¡Error!: " . $e->getMessage() . "<br/>";
   }
}



public function deleteProduct($data){
  try {
       $id = $data['id'];
       $conexion = new Conexion();
       $db = $conexion->getConexion();
       $query = "DELETE FROM product WHERE id=:id";
       $statement = $db->prepare($query);
       $statement->bindParam(':id', $id);
       $result = $statement->execute();
       if($result){
         return "removed";
       }
       return "error!";      

      } catch (PDOException $e) {
          echo "¡Error!: " . $e->getMessage() . "<br/>";
  }
  
}

public function getProduct($data){
    $id = $data['id'];
    $list = array();
    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $query = "SELECT * FROM product WHERE id=:id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id); 
    $statement->execute();
    while($row = $statement->fetch()) {
          $list[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "price" => $row['price'],
            "quantity" => $row['quantity'] );
          }//fin del ciclo while 

    return $list[0];
  }


public function updateProduct($data){
 try{
    $id = $data['id'];
    $name = $data['name'];
    $price = $data['price'];
    $quantity = $data['quantity'];
    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $query="UPDATE product SET name=:n,price=:p,quantity=:q
            WHERE id=:id";
    $statement= $db->prepare($query);
    $statement->bindParam(":n", $name);
    $statement->bindParam(":p", $price);
    $statement->bindParam(":q", $quantity);
    $statement->bindParam(":id", $id); 
    $result = $statement->execute();
    if($result){ return "updated"; } 

      return "error!";

   } catch(PDOException $e){
     echo "¡Error!: " . $e->getMessage() . "<br/>";
   }
}


}
*/
?>