<?php //dd($commonBlocks['footer']); ?>
<?php $footer=$commonBlocks['footer'] ?? []; ?>
<footer id="footer" class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 footer-about">
                <?php if($footer['about']['title']): ?>
                <h4>About Us</h4>
                <?php endif;?>
                <?php if($footer['about']['description']): ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                <?php endif;?>

                <div class="copyright"><?= $footer['about']['copyright'].'|'??''?> This template is made with  by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
            <div class="col-12 col-md-5 footer-newsletter">
                <?php if($footer['form']['title']): ?>
                <h4>Newsletter</h4>
                <?php endif;?>
                <form action="/" method="POST" class="w-100">
                    <input type="hidden" name="type" value="new_subscriber">
                    <div class="input-group mb-3">
                        <?php if($footer['form']['description']): ?>
                        <label for="email">Stay update with our latest</label>
                        <?php endif;?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </form>
            </div>
            <?php if($footer['follow']['socials']): ?>
            <div class="col-12 col-md-2 footer-social">
                <?php if($footer['follow']['title']): ?>
                <h4>Follow Us</h4>
                <?php endif;?>
                <?php if($footer['follow']['description']): ?>
                <p>Let us be social</p>
                <?php endif;?>
                <div class="d-flex align-items-center footer-social-list">
                    <?php foreach ($footer['follow']['socials'] as $social): ?>
                    <a href="<?=$social['href']?>">
                        <i class="fa-brands <?= $social['icon']?>"></i>
                    </a>
<!--                    <a href=""><i class="fa-brands fa-twitter"></i></a>-->
<!--                    <a href=""><i class="fa-brands fa-instagram"></i></a>-->
<!--                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>-->
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</footer>
<?php include_once PARTS_DIR . 'modals/buy_product.php'; ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous">

</script>
<script src="<?= ASSETS_URI ?>/libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
<script type="application/javascript" src="<?= ASSETS_URI ?>/js/script.js"></script>
<script type="application/javascript" src="<?= ASSETS_URI ?>/js/buy_product.js"></script>


</body>
</html>

