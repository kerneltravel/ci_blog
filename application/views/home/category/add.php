<?php $this->load->view('templates/header', array(
    'title' => '添加分类'
)); ?>


<div class="jumbotron">
    <div class="container">
        <?php echo form_open('home/category/add_action', array(
            'role' => 'form'
        )); ?>
        <div class="form-group">
            <?php echo form_input(array(
                'id'          => 'name',
                'class'       => 'form-control',
                'placeholder' => '分类名',
                'required'    => 'true',
                'autofocus'   => 'true'
            )); ?>
        </div>

        <div class="form-group">
            <?php echo form_textarea(array(
                'id'          => 'desc',
                'class'       => 'form-control',
                'name'        => 'desc',
                'placeholder' => '分类描述',
                'required'    => 'true'
            )); ?>
        </div>

        <div class="form-group">
            <?php echo form_button(array(
                'type'    => 'submit',
                'content' => '确认添加',
                'class'   => 'btn btn-lg btn-primary btn-block'
            )); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>


<?php $this->load->view('templates/footer', array(
)); ?>
