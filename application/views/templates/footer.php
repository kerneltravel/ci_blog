        <br/>
        <center><strong>&copy; 2014 www.ruchee.com 版权所有</strong></center>

        <script src="<?php echo base_url("public/js/jquery.min.js"); ?>"></script>
        <script src="<?php echo base_url("public/js/bootstrap.min.js"); ?>"></script>
        <?php if (@$js): ?>
            <?php foreach ($js as $item): ?>
                <script src="<?php echo base_url("public/js/{$item}"); ?>"></script>
            <?php endforeach ?>
        <?php endif ?>
    </body>
</html>
