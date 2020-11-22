<?php

namespace data;

use http\Exception\InvalidArgumentException;

class Builder
{
    private array $select = ['*'];
    private ?string $from = null;
    private array $where = [];
    private array $andWhere = [];
    private array $orWhere = [];
    private array $orderBy = [];

    public function select(array $select): self
    {
        if (empty($select)) {
            throw new InvalidArgumentException('$select не может быть пустым');
        }

        $this->select = $select;

        return $this;
    }

    public function from(string $tableName): self
    {
        if (empty($tableName)) {
            throw new InvalidArgumentException('$tableName не может быть пустым');
        }

        $this->from = $tableName;

        return $this;
    }

    public function where(array $conditions): self
    {
        $this->where = $conditions;

        return $this;
    }

    public function andWhere(array $conditions): self
    {
        $this->andWhere = $conditions;

        return $this;
    }

    public function orWhere(array $conditions): self
    {
        $this->orWhere = $conditions;

        return $this;
    }

    public function orderBy(array $conditions): self
    {
        $this->orderBy = $conditions;

        return $this;
    }

    public function getQuery(): string
    {
        if (empty($this->from)) {
            throw new \Exception('Не установлено значение $from');
        }


        $query = '';
        $query .= 'SELECT ' . implode(',', $this->select);
        $query .= ' FROM ' . $this->from;
        if (!empty($this->where)) {
            if (count($this->where) > 1) {
                $i = 0;
                foreach ($this->where as $condition) {
                    if ($i == 0) {
                        $query .= " WHERE $condition";
                    } else {
                        $query .= " AND $condition";
                    }
                }
            } else {
                $colName = array_key_first($this->where);
                $query .= " WHERE {$this->where[$colName]}";
            }

            if (!empty($this->andWhere)) {
                foreach ($this->andWhere as $condition) {
                    $query .= " AND $condition";
                }
            }

            if (!empty($this->orWhere)) {
                foreach ($this->orWhere as $condition) {
                    $query .= " OR $condition";
                }
            }
        }

        if (!empty($this->orderBy)) {
            $query .= " ORDER BY " . implode(',', $this->orderBy);
        }

        return $query;
    }
}



