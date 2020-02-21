<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
//Home Update Function===================================================================================================
if(isset($_POST["update_home"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('text');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))){
            $errors[] = $fieldname;
        }
    }
    if(empty($errors))
    {
        $id = 1;
        $text = mysql_prep($_POST['text']);
        $image = $_FILES['image']['name'];
        $query = "UPDATE home SET text = '{$text}', picture = '{$image}' WHERE id = 1";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                redirect_to("home.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}

//About Page Update Function=============================================================================================
if(isset($_POST["update_about"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('vision', 'mission');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = 1;
        $vision = mysql_prep($_POST['vision']);
        $mission = mysql_prep($_POST['mission']);
        $image = $_FILES['image']['name'];
        $query = "UPDATE about SET vision = '{$vision}', mission = '{$mission}', picture = '{$image}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
            // echo "<script>alert(\"The details were succesfully updated\")<script>";
                redirect_to("about.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there are errors";
        var_dump($errors);
    }
}

//Bio Section Upddate Function===========================================================================================
if(isset($_POST["update_bio"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('biotext');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))){
            $errors[] = $fieldname;
        }
    }
    if(empty($errors))
    {
        $id = 1;
        $biotext = mysql_prep($_POST['biotext']);
        $image = $_FILES['image']['name'];
        $query = "UPDATE bio SET biotext = '{$biotext}', picture = '{$image}' WHERE id = 1";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                redirect_to("bio.php");
            }
            else
            {
                echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}


//    ==================================ALL BACKGROUND PHOTOS UPDATE START===============================================

// About Background Update=============================================
if(isset($_POST["upd_about_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $aboutBG = $_FILES['image']['name'];
    $query = "UPDATE background SET about = '{$aboutBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}
// Events Background Update=============================================
if(isset($_POST["upd_events_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $eventBG = $_FILES['image']['name'];
    $query = "UPDATE background SET events = '{$eventBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}
// Blog Background Update===============================================
if(isset($_POST["upd_blog_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $blogBG = $_FILES['image']['name'];
    $query = "UPDATE background SET blog = '{$blogBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}
// Ebooks Background Update==============================================
if(isset($_POST["upd_ebooks_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $ebookBG = $_FILES['image']['name'];
    $query = "UPDATE background SET ebooks = '{$ebookBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}
// Contact Background Update=============================================
if(isset($_POST["upd_contact_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $contactBG = $_FILES['image']['name'];
    $query = "UPDATE background SET contact = '{$contactBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}
// Blog Single Background Update=========================================
if(isset($_POST["upd_blogsingle_pic"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $id = 1;
    $singleBG = $_FILES['image']['name'];
    $query = "UPDATE background SET blogSingle = '{$singleBG}' WHERE id = {$id} ";
    if($result = $mysqli->query($query) or die($mysqli->error))
    {
        confirm_query($result);
        if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            echo "<script>alert(\"The details were succesfully updated\")<script>";
            redirect_to("background.php");
        }
        else
        {
            echo "<script>alert(\"The update failed\")<script>";
        }
    }
    else
    {
        echo "<script>alert('Info not inserted into the database')</script>";
        echo mysql_error();
    }
}


//    ==================================ALL BACKGROUND PHOTOS UPDATE END=================================================

//    ==================================EDIT PAGES WITH MULTIPLE FIELDS START=================================================

// Edit Blog Posts========================================
if(isset($_POST["upd_blog"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('title', 'author', 'summary', 'main_post', 'dt');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
			}
        if(empty($errors))
        {
			$id = mysql_prep($_GET['blog']);
			$title = mysql_prep($_POST['title']);
            $author = mysql_prep($_POST['author']);
            $summary = mysql_prep($_POST['summary']);
            $main_post = mysql_prep($_POST['main_post']);
            $date = mysql_prep(date('d-m-y H:i:s', strtotime($_POST['dt'])));
            $image = $_FILES['image']['name'];
			$query = "UPDATE blog SET title = '{$title}', author = '{$author}', dt = '{$date}', picture = '{$image}', summary = '{$summary}', main_post = '{$main_post}' WHERE id = {$id} ";
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
                {
                    // echo "<script>alert(\"The blog post was succesfully updated\")<script>";
                    redirect_to("blog.php");
                }
                else
                {
                    echo "<script>alert(\"The blog post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }

// Edit Event Post========================================
if(isset($_POST["upd_event"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('theme', 'location', 'dt', 'about');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
    }
    if(empty($errors))
    {
        $id = mysql_prep($_GET['event']);
        $theme = mysql_prep($_POST['theme']);
        $location = mysql_prep($_POST['location']);
        $about = mysql_prep($_POST['about']);
        $date = mysql_prep(date('d-m-y H:i:s', strtotime($_POST['dt'])));
        $image = $_FILES['image']['name'];
        $query = "UPDATE events SET theme = '{$theme}', location = '{$location}', about = '{$about}', dt = '{$date}', picture = '{$image}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                // echo "<script>alert(\"The event was succesfully updated\")<script>";
                redirect_to("event.php");
            }
            else
            {
                echo "<script>alert(\"The event update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }

}
//Edit Single Story=======================================
if(isset($_POST["upd_story"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('name', 'testimony', 'portfolio');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
        }

    if(empty($errors))
    {
        $id = mysql_prep($_GET['story']);
        $name = mysql_prep($_POST['name']);
        $testimony = mysql_prep($_POST['testimony']);
        $image = $_FILES['image']['name'];
        $query = "UPDATE stories SET name = '{$name}', testimony = '{$testimony}', portfolio = '{$portfolio}', picture = '{$image}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                // echo "<script>alert(\"The testimony was succesfully updated\")<script>";
                redirect_to("stories.php");
            }
            else
            {
            echo "<script>alert(\"The testimony update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}
//Edit Single Free Book===================================
if(isset($_POST["upd_freebook"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $target2 = "ebooks/".basename($_FILES['document']['name']);
    $errors = array();
    $required_fields = array('title', 'author', 'summary');
    foreach($required_fields as $fieldname){
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
        }
    }
    if(empty($errors))
    {
        $id = mysql_prep($_GET['ebook']);
        $title = mysql_prep($_POST['title']);
        $author = mysql_prep($_POST['author']);
        $summary = mysql_prep($_POST['summary']);
        $image = $_FILES['image']['name'];
        $book = $_FILES['document']['name'];
        $query = "UPDATE freebook SET title = '{$title}', author = '{$author}', picture = '{$image}', book = '{$book}', summary = '{$summary}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['document']['tmp_name'], $target2))
            {
                redirect_to("freeEbooks.php");
                echo "<script>alert(\"The ebook post was succesfully updated\")<script>";
            }
            else
            {
                echo "<script>alert(\"The ebook post update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}
//Edit Sinlge Ebook=======================================
if(isset($_POST["upd_ebook"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('title', 'author', 'summary', 'link');
    foreach($required_fields as $fieldname){
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
        }
    }
    if(empty($errors))
    {
        $id = mysql_prep($_GET['ebook']);
        $title = mysql_prep($_POST['title']);
        $author = mysql_prep($_POST['author']);
        $link = mysql_prep($_POST['link']);
        $summary = mysql_prep($_POST['summary']);
        $image = $_FILES['image']['name'];
        $query = "UPDATE ebooks SET title = '{$title}', author = '{$author}', picture = '{$image}', link = '{$link}', summary = '{$summary}' WHERE id = {$id} ";
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                redirect_to("ebooks.php");
                echo "<script>alert(\"The ebook post was succesfully updated\")<script>";
            }
            else
            {
                echo "<script>alert(\"The ebook post update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}
//    ==================================EDIT PAGES WITH MULTIPLE FIELDS END=================================================

?>