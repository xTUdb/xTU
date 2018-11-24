<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/edit_user.css" />
<div class="user-top-bg"></div>
<div class="container config-con">
    <div class="user-title">Edit your profile</div>
    <img class="user-pic" src="https://www.shareicon.net/download/2015/10/03/650430_users.svg" alt="">
    <form action="change_profile.php" method="post">
        Username: <input type="text" name="username" value="Username1" size="35" class="user-txt-input" required><br>
        E-mail: <input type="email" name="email" value="emailfromDB@mail.com" size="35" class="user-txt-input" disabled><br>

        <!-- Change your profile picture, then update immediately to class "user-pic" -->
        <br>
        <div class="user-head">Change your profile picture</div>
        <input type="file" name="user_pic" accept="image/*""><br>

        <!-- Change to new password -->
        <br>
        <div class="user-head">Change new Password</div>
        New password: <input type="password" name="new_pass" placeholder="New password" size="35" class="user-txt-input"><br>
        Confirm new password: <input type="password" name="check_new_pass" placeholder="Confirm new password" size="35" class="user-txt-input"><br>

        <!-- All of your review, to delete -->
        <br>
        <div class="user-head"><i class="fas fa-edit"></i> Your reviews</div>
        <div class="review-container">
            <div class="review-box">
                <div class="review-title">Test</div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam molestias impedit aliquam porro rerum esse vel. Perspiciatis voluptatem expedita pariatur. Alias quos quia assumenda quidem dolore architecto at repellendus mollitia.
                <br><div class="reviewer-info">
                    Date<br>
                    <a href=""><i class="fas fa-trash-alt"></i> Delete</a>
                </div>
            </div>
        </div>

        <!-- Store Owner -->
        <br>
        <div id="storeowner">
            <div class="user-head"><i class="fas fa-store"></i> Go to your own stores</div>
            <a href="" class="store">Store1 <i class="fas fa-angle-right"></i></a>
            <a href="" class="store">Store1 <i class="fas fa-angle-right"></i></a>
        </div>

        <!-- Confirm password to change -->
        <br>
        <input type="password" name="pass" placeholder="Enter password to proceed" class="user-txt-input" required>
        <input type="submit" value="Change" class="user-button">
        <input type="button" value="Delete Account" class="user-button red-btn">
    </form>
    <!-- END edit profile -->
</div>

<div style="margin-bottom:100px;"></div>
<!-- Admin section -->
<div class="container config-con" id="adminsection">
    <div class="user-title">Admin control section</div>
    <div class="user-head">Links</div>
    <br><strong>Approval</strong><br>
    <a href="" target="_blank" class="special-link">Approve stores</a>
    <a href="" target="_blank" class="special-link">Approve store owners</a>
    <br><strong>Edit and Delete</strong><br>
    <a href="" target="_blank" class="special-link">Edit/Delete stores</a>
    <a href="" target="_blank" class="special-link">Edit/Delete users</a>
    <a href="" target="_blank" class="special-link">View reports/bugs</a>
</div>
<!-- END admin section -->