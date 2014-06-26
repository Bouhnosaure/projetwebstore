<?php

class ProductsModel extends Model {

	public function getAllCategory() {
		$sql = "select IDCATEGORY, NAMECATEGORY from categories";
	}

	public function addCategory(){
		$sql = "INSERT INTO categories (IDCATEGORY, NAMECATEGORY) VALUES ()";
	}

	public function addArticle() {
		$sql  = "INSERT INTO articles ( IDARTICLE , IDCATEGORY , LABETARTICLE , DESCRIPTION, PRICE, QUANTITYSTOCK , DATECREATEARTICLE,  DATELASTMODIF, THRESHOLDSTOCK, IMAGE)VALUES ()'";
	}

	public function removeArticle() {
		$sql  = "DELETE FROM articles WHERE IDARTICLE = " . $id_article ;
	}

	public function updArticle() {
		$sql = "UPDATE articles SET  `IDARTICLE`=[value-1],`IDARTICLESTATEMENT`=[value-2],`IDCATEGORY`=[value-3],`LABELARTICLE`=[value-4],`DESCRIPTION`=[value-5],`PRICE`=[value-6],`QUANTITYSTOCK`=[value-7],`DATECREATEARTICLE`=[value-8],`DATELASTMODIF`=[value-9],`THRESHOLDSTOCK`=[value-10],`IMAGE`=[value-11] WHERE IDARTICLE = '".$id_article."'";
		$sql = "UPDATE categories SET IDCATEGORY= '', NAMECATEGORY= '', WHERE IDCATEGORY= '' ";
	}
}

?>