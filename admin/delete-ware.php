<?php 
    //Include COnstants Page
    include('constants.php');

    //echo "Delete Food Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2. Remove the Image if Available
        //CHeck whether the image is available or not and Delete only if available
        if($image_name != "")
        {
            // IT has image and need to remove from folder
            //Get the Image Path
            $path = "../images/".$image_name;

            //REmove Image File from Folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==false)
            {
                //Failed to Remove image
                $_SESSION['upload'] = "<div>Failed to Remove Image File.</div>";
                //REdirect to Manage Food
                header('location:'.SITEURL.'admin/manage-ware.php');
                //Stop the Process of Deleting Food
                die();
            }

        }

        //3. Delete from Database
        $sql = "DELETE FROM tbl_ware WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage with Session Message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div>Ware Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-ware.php');
        }
        else
        {
            //Failed to Delete
            $_SESSION['delete'] = "<div>Failed to Delete Ware.</div>";
            header('location:'.SITEURL.'admin/manage-ware.php');
        }

        

    }
    else
    {
        //Redirect to Manage Page
        //echo "REdirect";
        $_SESSION['unauthorize'] = "<div>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-ware.php');
    }

?>