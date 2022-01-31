<div id="sidebar">
    <div class="box">
        <div class="h_title">&#8250; Main control</div>
        <ul id="home">
            <li class="b2"><a class="icon report" href="view-user.php">Manage Invoice</a></li>
            <li class="b1"><a class="icon add_page" href="add-user.php">Add Invoice</a></li>
                
            <li class="b1"><a class="icon add_page" href="export-csv.php">Send & Download</a></li>
            <?php if(Session::get('user') == 'admin'){ ?>
                    <li class="b1"><a class="icon add_page" href="add-admin.php">Create Admin</a></li>
                    <li class="b2"><a class="icon report" href="view-admin-user.php">Admin User List</a></li>
                <?php } ?>
            <!--<li class="b1"><a class="icon add_page" href="download-attachment.php">Download Attachment</a></li>-->		
        </ul>
    </div>   
   
</div>