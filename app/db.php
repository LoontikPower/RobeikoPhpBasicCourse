<?php
/*
 *@param Tables $table
 * @param string $columns
 * @param string|null $condition
 * @param array
 */

function dbSelect(Tables $table, string $columns = '*', string $condition = null, string $order = null, bool $isSingle = false): array
{
    $sql = "SELECT {$columns} FROM {$table->value}";
    $sql .= $condition ? " WHERE {$condition}" : "";
    $sql .= $order ? " ORDER BY {$order}" : "";

    $query = DB::connect()->prepare($sql);
    $query->execute();

    $result = $isSingle ? $query->fetch() : $query->fetchAll();
    return $result ?: [];


}


function dbFind(Tables $table, int $id): array
{
    return dbSelect($table, condition: "id = $id", isSingle: true);
}


function getOrderInfo(int $orderId): array|bool
{
    $sql = "SELECT p.id, p.name, p.description, op.quantity, op.single_price, op.additions FROM ". Tables::OrderProducts->value ." op LEFT JOIN ". Tables::Products->value ." p ON op.product_id = p.id WHERE op.order_id = :order_id";
    $query = DB::connect()->prepare($sql);

    $query->bindParam('order_id', $orderId, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll();
}
//


//dd(dbSelect(Tables::Content, condition:'id=4' , isSingle: true));
//foreach (Tables::Content as $kon=>$value) {
//    dd(dbSelect(Tables::Content));
//}

