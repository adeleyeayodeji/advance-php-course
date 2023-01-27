<?php
pushScript('styles');
?>
<style>
    h1 {
        color: red;
    }
</style>
<?php
endPushScript();
section('content');
?>
<h1>Hello World</h1>
<h2><?php echo $name; ?> is <?php echo $age; ?> old</h2>
<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ratione accusamus earum pariatur facere consequatur iusto dolor, non, laudantium nihil nam quas eos! Minus omnis velit dolore id nostrum temporibus!
</p>
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, vel, beatae a tempora laudantium consequuntur temporibus cupiditate soluta nihil, inventore vitae dignissimos. Rem qui a laboriosam voluptatibus dicta at et?
</p>
<?php
endsection();
pushScript('scripts');
?>
<script>
    console.log('Hello World');
</script>
<?php
endPushScript();
extend('layout/app', 'content');
