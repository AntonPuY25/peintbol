<?php require_once('templates/top.php');
	if(isset($_SESSION['user_id'])){
	    ?>
        <table width="100%">
            <tr>
                <td width="200px">Фото</td>
                <td>Название</td>
                <td>Действия</td>
            </tr>
            <?
            $query = "SELECT * FROM picture ORDER BY id DESC";
            $adr=mysqli_query($de_con,$query);
            if (!$adr){
                exit('error query');
            }
            while($result=mysqli_fetch_array($adr)){
                ?>
                <tr>
                    <td><?
                        if($result['picture']){
                            ?>
                             <img width="200px" src="<?=$result['picture']?>" />
                            <?php
                        }else {
                            echo "no photo";
                        }
                        ?></td>
                    <td><?=$result['name']?></td>
                    <td>Edit, Delete</td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
	if($_POST){
        $name=$_POST['name'];
        $about =$_POST['about'];
	if($_FILES){
	    $filename='/media/uplads/'.$_FILES['picture']['name'];
	    $move=move_uploaded_file( $_FILES['picture']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
	    if(!$move){
	        exit('error fileuplades');

        }
    }else{
        $filename="";
    }
	}
        $query= "INSERT INTO picture VALUES(
                                       NULL,
                                     '$name',
                                      '$about',
                                      '$filename',
                                        NOW())";
         $adr=mysqli_query($de_con,$query);
            if(!$adr) {
                exit($query);
            }
	?>

	<form enctype="multipart/form-data" method="post">
	
	<div class="form-group">
        <label for="exampleInputName">Название</label>
        <input type="text"   class="form-control" name="name" id="exampleInputName"  placeholder="Name">
    </div>
	<div class="form-group">
    <label for="exampleInputabout">Описание</label>
    <textarea class="form-control" name="about"  id="exampleInputabout"  placeholder="Описание"></textarea>
  </div>
  <div class="form-group">
        <label for="exampleInputImg">Изображение</label>
        <input type="file" name="picture" />
    </div>
  <button type="registr" class="btn btn-default">Добавить</button>

  </form>
<?php	}else{
 echo "ОШИБКА ВХОДА";
}
require_once('templates/bottom.php');
?>

	