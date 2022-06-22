<?php 
    //Include COnstants Page
    include('constants.php');

    //echo "Delete Food Page";

    if(isset($_GET['id'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $id = $_GET['id'];
        $status = 'Unchecked';

        if ($id=$status){
            $sql4 = "UPDATE tbl_ware SET
            status = 'Aproved'
            WHERE id='$id'
            ";
            
            //echo $sql2; die();
            
            //Execute the Query
            $res4 = mysqli_query($conn, $sql4);
    
            if ($res4==true)
            {
                header('location:'.SITEURL.'admin/manage-requests.php');
            }
        
            else
            {
                $_SESSION['delete'] = "Error";
        
                header('location:'.SITEURL.'admin/manage-requests.php');
            }
        }

        else{
            $sql4 = "UPDATE tbl_ware SET
            status = 'Unchecked'
            WHERE id='$id'
            ";
            
            //echo $sql2; die();
            
            //Execute the Query
            $res4 = mysqli_query($conn, $sql4);
    
            if ($res4==true)
            {
                header('location:'.SITEURL.'admin/manage-requests.php');
            }
        
            else
            {
                $_SESSION['delete'] = "Error";
        
                header('location:'.SITEURL.'admin/manage-requests.php');
            }
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