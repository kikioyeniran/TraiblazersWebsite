<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
//======================Delete Individual Blog Post==========================================================================
if(isset($_GET['blogid']))
{
    $id = mysql_prep($_GET['blogid']);
    if($id)
    {
        $query = "DELETE FROM blog WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: blog.php");
        }
        else
        {
            echo "<script>alert(\"Image deleted from database\")<script>";
            echo "<p>" .  mysql_error() .  "</p>";
            // echo "<a href = 'event.php'>Return to Main Page</a>";
        }
    }
    else
    {
        //subject didn't exist in  database
        header("Location: blog.php");
    }
}
//======================Delete Individual Event=================================================================================
if(isset($_GET['eventid']))
{$id = mysql_prep($_GET['eventid']);
	if($id){
		$query = "DELETE FROM events WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: events.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: events.php");
    }
}
//======================Delete Individual Story==================================================================================
if(isset($_GET['storyid']))
{$id = mysql_prep($_GET['storyid']);
	if($id){
		$query = "DELETE FROM stories WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: stories.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: stories.php");
    }
}
//======================Delete Individual Free Book===================================================================================
if(isset($_GET['freebookid']))
{$id = mysql_prep($_GET['freebookid']);
	if($id){
		$query = "DELETE FROM freebook WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: freeEbooks.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: freeEbooks.php");
    }
}
//======================Delete Individual Book==================================================================================
if(isset($_GET['ebookid']))
{$id = mysql_prep($_GET['ebookid']);
	if($id){
		$query = "DELETE FROM ebooks WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: ebooks.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: ebooks.php");
    }
}
//======================Delete Individual Picture from Gallery=======================================================================
if(isset($_GET['galleryid']))
{$id = mysql_prep($_GET['galleryid']);
	if($id){
		$query = "DELETE FROM gallery WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
			echo "<script>alert(\"Image deleted from database\")<script>";
            //redirect_to("event.php");
            header("Location: gallery.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'event.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: gallery.php");
    }
}
?>