<?php $this->load->view('templates/header', array(
    'title' => '登录',
    'css' => array('auth.css')
)); ?>


<div class="jumbotron">
    <div class="container">

        <div id="alert"></div>

        <?php echo form_open('auth/login_action', array(
            'id'       => 'login_form',
            'class'    => 'form-auth',
            'role'     => 'form',
            'onsubmit' => 'return false;'
        )); ?>
            <?php echo form_input(array(
                'type'        => 'text',
                'id'          => 'username',
                'class'       => 'form-control',
                'placeholder' => '用户名',
                'required'    => 'true',
            'autofocus'   => 'true'
            )); ?><br/>

            <?php echo form_input(array(
                'type'        => 'password',
                'id'          => 'password',
                'class'       => 'form-control',
                'placeholder' => '密码',
                'required'    => 'true'
            )); ?><br/>

            <?php echo form_button(array(
                'type'    => 'submit',
                'content' => '登录',
                'class'   => 'btn btn-lg btn-primary btn-block',
                'onclick' => 'login()'
            )); ?>
        <?php echo form_close(); ?>
    </div>
</div>


<?php $this->load->view('templates/footer', array(
    'js' => array('auth.js')
)); ?>
