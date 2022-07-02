<?php
     include './edit.php';

    $id = $_GET['eid'];

    $fetchq = mysqli_query($connection,"select * from tbl_student where sd_id='{$id}'") or die(mysqli_error($connection));
    $row = mysqli_fetch_array($fechq);

    if($_post)
    {
    $name = $_post['txt1'];
    $gender = $_post['txt2'];
    mysqli_query($connection,"update tbl_student set sd_name='{$name}',sd_gender='{$gender}'where sd_id='{$_GET['eid']}'");
    header("loction:display.php");
    }
    ?>
    <html>
        <body>
            <from method ="post">
                Name:<input type="text" value ="<?php echo $row['sd_name']; ?>" name="txt1">
                Gender:<select>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </from>
        </body>
    </html>
