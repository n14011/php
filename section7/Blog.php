<?php
/**
 * Blogクラスのファイルです。
 */
/**
 * BlogクラスはBlogの記事の取得、すべての記事の取得、記事の追加を行ないます。
 *
 * @todo 編集用のupdateArticleクラス、削除用のremoveArticleクラス
 */
class Blog {
  /**
   * @var PDO $dbh データベースハンドラー
   */
  private $dbh;
  /**
   * コンストラクターです。データベースハンドラーの初期化しかしてません。
   *
   * @return true
   */
  public function __construct(){
    include_once('config.php');
    // blogの機能は基本的にデータベースを使用するので、コンストラクターでDBに接続しておく
    $this->dbh = new PDO(CONNECTION,DBUSER,DBPASSWORD);
    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return true;
  }
  /**
   * 指定した記事IDの記事の本文を取得する。
   *
   * @param int $id 取得したい記事のID
   * @return Object
   */
  function getArticle($id){
    $query = 'SELECT id, article, author, create_date, update_date FROM articles WHERE id = :id';
    $stmt = $this->dbh->prepare($query);
    $stmt->bindValue(":id",$id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
  /**
   * 登録されているすべての記事を取得する
   *
   * @return Object
   */
  function getArticles(){
    $query = 'SELECT id, article, author, create_date, update_date FROM articles';
    $stmt = $this->dbh->prepare($query);
    $stmt->execute();
    // fetchAllを実行すると登録されているすべての情報を配列で返してくれるよ
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  /**
   * 記事を追加する
   *
   * @param string $article 記事の本文
   * @param string $author 記事の作者
   * @param string $create_date 記事が作られた日付(YYYY-MM-DD hh:mm:ss)
   * @return bool
   */
  function addArticle($article,$author,$create_date){
    $query = 'INSERT INTO articles(article,author,create_date,update_date)
     VALUES (:article,:author,:create_date,:update_date)';
    // SQLが実行可能な状態にしておく
    $stmt = $this->dbh->prepare($query);
    $stmt->bindParam(':article', $article,PDO::PARAM_STR);
    $stmt->bindParam(':author', $author,PDO::PARAM_STR);
    $stmt->bindParam(':create_date',$create_date ,PDO::PARAM_STR);
    $stmt->bindParam(':update_date',$create_date ,PDO::PARAM_STR);
    // 実 行 ! !
    return $stmt->execute();
  }
  function removeArticle($id){
    $query = "DELETE FROM articles WHERE id = :id";
    $stmt = $this->dbh->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    return $stmt->execute();

  }
  /**
   * デストラクターです。データベース接続を終了してます。
   *
   * @return true
   */
  public function __destruct(){
    unset($this->dbh);
    return true;
  }
}
