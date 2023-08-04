<?php
include 'app/modals/employees.php';
include 'config/config.php';
class employeesRepository {
    public function getAllEmployees(){
        try{
            $db = new Database();
            $conn = $db->getConnection();
            $sql = 'select * from employees';
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $employees = [];
            foreach ($result as $row){
                $employee = new employees($row['id'],$row[name],$row['address'],$row['salary']);
                $employees[]= $employee;
            }
            return $employees;
        }catch (PDOException $e){
            return null;
        }

    }

    public function getDetail($employees){
        try{
            $db = new Database();
            $conn = $db->getConnection();
            $sql = 'select * from employees where id=?';
            $stmt=$conn->prepare($sql);
            $id = $employees->getId();
            $stmt->bindParam(1,$id,PDO::PARAM_INT);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            $em = new employees($result['id'],$result['name'],$result['address'],$result['salary']);
            return $em;
        }catch (PDOException $e){
            return null;
        }

    }
}
