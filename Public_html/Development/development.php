<!doctype html>
<html lang="en">

<body>
<div class="content">
    <div class="btn">
    <button><a href="">Over Limit Customers</a></button>
    </div>

    <img src="" alt="">

    <div class="table">
    <table>
        <tr>
            <th>Company name</th>
            <th>Project ID</th>
            <th>Maintenance Contract</th>
            <th>Applications</th>
            <th>Hardware</th>
            <th>Software</th>
            <th>Operating System</th>
            <th>Appointments</th>
            <th>Internal Contact</th>
            <th></th>
            <th>Project Complete</th>

        </tr>



        <?php

        $compName['id'] = 'SCP Foundation';
        $projectid['id'] = 4;
        $maintContr['id'] = 'Y';
        $applications['id'] = 5;
        $hWare['id'] = 'Windows';
        $sWare['id'] = 'SCP-079';
        $opSystem['id'] = 'Windows 10';
        $appointments['id'] = 8;
        $intContact['id'] = 'Dr. Bright';
        $projectComplete['id'] = 'Y';







        $tables = array(1, 2, 3); foreach ($tables as $table): ;
            echo '<tr>';
            echo '<td>'; echo $compName['id']; echo'</td>';
            echo'<td>'; echo $projectid['id']; echo'</td>';
            echo'<td>'; echo $maintContr['id']; echo'</td>';
            echo'<td>'; echo $applications['id']; echo'</td>';
            echo'<td>'; echo $hWare['id']; echo'</td>';
            echo'<td>'; echo $sWare['id']; echo'</td>';
            echo'<td>'; echo $opSystem['id']; echo'</td>';
            echo'<td>'; echo $appointments['id']; echo'</td>';
            echo'<td>'; echo $intContact['id']; echo'</td>';
            echo'<td><a href="editProject.php">Edit</a></td>';
            echo'<td>'; echo $projectComplete['id']; echo'</td>';
            echo '</tr>';
        endforeach;?>





    </table>
    </div>

    <div class="btn">
    <button><a href="development-website.php">Back</a></button>
    </div>


</div>

</body>
</html>
