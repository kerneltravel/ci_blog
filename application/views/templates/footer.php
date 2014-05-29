        <br/>
        <footer>
            &copy; 2014 <?php echo $site_domain; ?> 版权所有
        </footer>

        <script src="<?php echo base_url("public/js/jquery.min.js"); ?>"></script>
        <script src="<?php echo base_url("public/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("public/js/common.js"); ?>"></script>
        <?php if (@$js): ?>
            <?php foreach ($js as $item): ?>
                <script src="<?php echo base_url("public/js/{$item}"); ?>"></script>
            <?php endforeach ?>
        <?php endif ?>
    </body>
</html>
