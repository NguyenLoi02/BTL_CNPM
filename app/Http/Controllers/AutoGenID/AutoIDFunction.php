<?php
namespace App\Http\Controllers\AutoGenID;
class AutoIDFunction{
    public function splitID($lastID, $prefix): int{
        return (int) substr($lastID, strlen($prefix));
    }
    public function AutoID($prefix, $model, $primaryKeyName){
        $records = $model::orderBy($primaryKeyName, 'desc')->get();
        if(count($records)==0){
            return $prefix.'01';
        } 
        $lastID = $records[0]->$primaryKeyName;
        $lastNumber = $this->splitID($lastID,$prefix);
        $genID = $lastNumber<9?'0'.($lastNumber+1):($lastNumber+1);
        return $prefix.$genID;
    }
}
?>