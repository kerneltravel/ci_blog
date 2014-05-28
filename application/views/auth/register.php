<?php $this->load->view('templates/header', array(
    'title' => '注册',
    'css' => array('auth.css')
)); ?>


<div class="container">

    <div id="alert"></div>

<?php echo form_open('auth/register_action', array(
    'id'       => 'register_form',
    'class'    => 'form-auth',
    'role'     => 'form',
    'onsubmit' => 'return false;'
)); ?>
    <?php echo form_input(array(
        'type'        => 'input',
        'id'          => 'username',
        'class'       => 'form-control',
        'placeholder' => '用户名',
        'required'    => 'true',
        'autofocus'   => 'true'
    )); ?><br/>

    <?php echo form_input(array(
        'type'        => 'input',
        'id'          => 'password1',
        'class'       => 'form-control',
        'placeholder' => '密码',
        'required'    => 'true'
    )); ?><br/>

    <?php echo form_input(array(
        'type'        => 'input',
        'id'          => 'password2',
        'class'       => 'form-control',
        'placeholder' => '确认密码',
        'required'    => 'true'
    )); ?><br/>

    <?php echo form_button(array(
        'type'    => 'submit',
        'content' => '提交注册',
        'class'   => 'btn btn-lg btn-primary btn-block',
        'onclick' => 'register()'
    )); ?>
<?php echo form_close(); ?>
</div>


<?php $this->load->view('templates/footer', array(
    'js' => array('auth.js')
)); ?>
