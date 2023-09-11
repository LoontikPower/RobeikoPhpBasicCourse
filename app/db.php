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
    return $result ?? [];


}
//


dd(dbSelect(Tables::Content, condition: 'id=4', isSingle: true));

