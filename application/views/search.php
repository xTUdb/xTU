<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/search.css" />
<div class="container move-down">
    <form action="search.php" method="get">
        <input type="text" id="search" name="search" placeholder="Search a store, a category...">
        <button id="query"><i class="fas fa-search"></i> Search</button>
        <button id="alert"><i class="fas fa-times"></i></button>
    </form>
</div>
<div class="container">
    <div class="query-head">Recent Search</div>
    <div class="query-head">Most View</div>
</div>