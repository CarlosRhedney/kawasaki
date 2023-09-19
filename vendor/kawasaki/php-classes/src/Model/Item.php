<?php
namespace Kawasaki\Model;

use \Kawasaki\DB\Sql;
use \Kawasaki\Model;

class Item extends Model
{

	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_itens ORDER BY iditem");

	}

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_itens_save(:iditem, :item, :codigo, :descricao, :preco)", [
			":iditem"=>$this->getiditem(),
			":item"=>$this->getitem(),
			":codigo"=>$this->getcodigo(),
			":descricao"=>$this->getdescricao(),
			":preco"=>$this->getpreco()
		]);

		$this->setData($results[0]);

	}

	public function get($iditem)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_itens WHERE iditem = :iditem", [
			":iditem"=>$iditem
		]);

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("DELETE FROM tb_itens WHERE iditem = :iditem", [
			":iditem"=>$this->getiditem()
		]);

	}
}
?>