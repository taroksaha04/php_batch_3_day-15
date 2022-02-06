<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $blog){ ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $blog['image'];?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $blog['title']; ?>Smart Shari and shirt</h3>
                            <h4><?php echo $blog['author']; ?>Brand</h4>
                            <p class="card-text">
                                <span class="font-weight-bold"> <?php echo $blog['price']; ?></span>
                            </p>
                            <hr/>
                            <a href="" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
