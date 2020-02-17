<?php
/**
 * Areaクラス：areasテーブルの１レコードを管理するクラス
 */
class Area {
	/**
	 * 属性
	 */
	private $id;		// int 		地域ID
	private $name;	// string 地域名

	/**
	 * コンストラクタ
	 * @param int 		$id
	 * @param string 	$name
	 */
	function __construct(int $id, string $name) {
		$this->id = $id;
		$this->name = $name;
	}

	/**
	 * アクセサメソッド群
	 * @property-read int 		id
	 * @property-read string 	name
	 */
	function getId():int {
		return $this->id;
	}

	function getName():string {
		return $this->name;
	}
}

/**
 * Restaurantクラス：restaurantsテーブルの1レコードを管理するクラス
 */
class Restaurant {
	/**
	 * 属性
	 */
	private $id;		
	private $name;		
	private $price;	
	private $image;		
	private $area;	

	/**
	 * コンストラクタ
	 * @param int 	 $id
	 * @param string $name
	 * @param string $price
	 * @param string $image
	 * @param int 	 $area
	 */
	function __construct(int $id, string $name, string $price, string $image, int $area) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->image = $image;
		$this->area = $area;
	}

	/**
	 * アクセサメソッド群
	 * @property-read int 	 id
	 * @property-read string name
	 * @property-read string price
	 * @property-read string image
	 * @property-read int 	 area
	 */
	function getId():int {
		return $this->id;
	}

	function getName():string {
		return $this->name;
	}

	function getprice():string {
		return $this->price;
	}

	function getImage():string {
		return $this->image;
	}

	function getArea():int {
		return $this->area;
	}
}

/**
 * Reviewクラス：reviewsテーブルの1レコードを管理するクラス
 */
class Review {
	/**
	 * 属性
	 */
	private $id;					
	private $restaurantId;	
	private $comment;			
	private $reviewer;		
	private $rating;			

	/**
	 * コンストラクタ
	 * @param int 	 $id
	 * @param int 	 $restaurantId
	 * @param string $comment
	 * @param string $reviewer
	 * @param int 	 $rating
	 */
	function __construct(int $id, int $restaurantId, string $comment, string $reviewer, int $rating) {
		$this->id = $id;
		$this->restaurantId = $restaurantId;
		$this->comment = $comment;
		$this->reviewer = $reviewer;
		$this->rating = $rating;
	}

	/**
	 * アクセサメソッド群
	 * @property-read int 	 id
	 * @property-read int 	 name
	 * @property-read string price
	 * @property-read string image
	 * @property-read int 	 area
	 */
	function getId():int {
		return $this->id;
	}

	function getRestaurantId():int {
		return $this->restaurantId;
	}

	function getComment():string {
		return $this->comment;
	}

	function getReviewer():string {
		return $this->reviewer;
	}

	function getRating():int {
		return $this->rating;
	}
}

?>