<?php
namespace Kawasaki\Model;

use \Kawasaki\DB\Sql;
use \Kawasaki\Model;

class Item extends Model
{
	const SESSION_ERROR = "ItemSaveError";

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

	public static function setMsgError($msg)
	{

		$_SESSION[Item::SESSION_ERROR] = $msg;

	}

	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Item::SESSION_ERROR]) && $_SESSION[Item::SESSION_ERROR]) ? $_SESSION[Item::SESSION_ERROR] : "";

		Item::clearMsgError();

		return $msg;

	}

	public static function clearMsgError()
	{

		$_SESSION[Item::SESSION_ERROR] = NULL;

	}

}
?>